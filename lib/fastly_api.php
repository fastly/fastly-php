<?php

class FastlyAPI {
	private $_meta = array();
	private $_auth = array();
	private $_ch = null;
	private $_lastcgi = null;
	private $_lastmsg = null;
	private $_laststatus = null;
	private $_user = null;
	private $_customer = null;

	private	$apphost = 'https://app.fastly.com';
	private $cookie_file = "./fastly.cookie";

	public function __construct () {
		$this->_curl_init();
	}

	public function __destruct () {
		curl_close( $this->_ch );
	}

	public function __get ( $var ) {
		switch($var) {
			case 'lastcgi':
				return $this->_lastcgi;
			case 'lastmsg':
				return $this->_lastmsg;
			case 'laststatus':
				return $this->_laststatus;
			case 'lasthttp':
				if( empty($this->_lastcgi) ) {
					return null;
				}
				return $this->_lastcgi['http_code'];

			case 'user':
				return $this->_user;
			case 'customer':
				return $this->_customer;
			case 'role':
				if( empty($this->_user) ) {
					return null;
				}
				return $this->_user->role;

		}
		return null;
	}

	# =================================================================
	private function _get ( $path ) {
		// print "GET {$path}\n";
		$this->_curl_init();

		$url = $this->apphost . $path;
		curl_setopt($this->_ch, CURLOPT_URL, $url);

		curl_setopt($this->_ch, CURLOPT_HTTPGET, 1);

		return $this->_curl();
	}

	private function _post ( $path, $payload ) {
		// print "POST {$path}\n";
		$this->_curl_init();

		$url = $this->apphost . $path;
		curl_setopt($this->_ch, CURLOPT_URL, $url);

		# we have a key set? pass it along with our call;
		if( !empty($this->_auth['key']) ) {
			$this->_curlheaders[] = "X-Fastly-Key: " . $this->_auth['key'];
		}

		curl_setopt($this->_ch, CURLOPT_POST, 1);

		# are we actually posting SOMETHING?
		# needed because some of the modules (like /purge) do a POST, but send it in the path
		if( !empty($payload) ) {
			if( is_array( $payload ) ) {
				$payload_s = http_build_query( $payload );
			} else {
				$payload_s = $payload;
			}

			curl_setopt($this->_ch, CURLOPT_POSTFIELDS, $payload_s);
		} else {
			curl_setopt($this->_ch, CURLOPT_POSTFIELDS, '');
		}

		return $this->_curl();
	}

	private function _put ( $path, $payload ) {
		// print "PUT {$path}\n";
		$this->_curl_init();

		$url = $this->apphost . $path;
		curl_setopt($this->_ch, CURLOPT_URL, $url);

		if( is_array( $payload ) ) {
			$payload_s = http_build_query( $payload );
		} else {
			$payload_s = $payload;
		}

		curl_setopt($this->_ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($this->_ch, CURLOPT_POSTFIELDS, $payload_s);

		return $this->_curl();
	}

	private function _delete ( $path, $payload ) {
		// print "DELETE {$path}\n";
		$this->_curl_init();

		$url = $this->apphost . $path;
		curl_setopt($this->_ch, CURLOPT_URL, $url);

		if( is_array( $payload ) ) {
			$payload_s = http_build_query( $payload );
		} else {
			$payload_s = $payload;
		}

		curl_setopt($this->_ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($this->_ch, CURLOPT_POSTFIELDS, $payload_s);

		return $this->_curl();
	}

	private function _curl_init () {
		$this->_ch = curl_init();
		$this->_curlheaders = array();
	}

	private function _curl () {
		/*
			caller must set URL
			caller must set GET or POST
		*/

		curl_setopt($this->_ch, CURLOPT_COOKIEJAR, $this->cookie_file);
		curl_setopt($this->_ch, CURLOPT_COOKIEFILE, $this->cookie_file);

		curl_setopt($this->_ch, CURLOPT_HEADER, 0);
		curl_setopt($this->_ch, CURLOPT_RETURNTRANSFER, 1);

		if( !empty($this->_curlheaders ) ) {
			// print "we havz headers!\n"; var_dump( $this->_curlheaders );
			curl_setopt($this->_ch, CURLOPT_HTTPHEADER, $this->_curlheaders);
		}

		# On *nix systems, the cURL library /should/ pickup the system CA files,
		# But Windows, *AMP setups usually only have the cURL .dll for php,
		# 	and lack the CA cert files
		# So on Windows setups, we just ignore/disable SSL verification.
		#	In short, this makes OK for windows dev, and *nix prod :)

		# should catch WIN32, WINNT, Windows
		# note: docs say PHP_OS is a glorified front to uname()
		if( strtolower( substr(PHP_OS,0,3) ) == 'win' ) {
			curl_setopt($this->_ch, CURLOPT_SSL_VERIFYPEER, false);
		}

		# ----------------------------------------------------------

		# go get it
		$ret = curl_exec( $this->_ch );

		# save this, for debuging reasons
		$this->_lastcgi = curl_getinfo( $this->_ch );

		# ------------------------------------------
		# start looking at what we got

		# easy JSON mime detection
		if( $this->_lastcgi['content_type'] == 'text/json' ) {
			return json_decode($ret);
		}

		#more tricky JSON mime
		list($ct,) = explode(';', $this->_lastcgi['content_type'], 2);

		if( $ct == 'application/json' ) {
			return json_decode($ret);
		}

		# dunno what we got, so just return the raw text back
		return $ret;
	}

	# =================================================================
	public function AuthKey ( $key ) {
		# store this key
		# (we will pass it with requests via 'X-Fastly-Key' header)
		$this->_auth['key'] = $key;
	}

	public function AuthPassword ( $user, $pass ) {
		# store the creds
		$this->_auth['user'] = $user;
		$this->_auth['password'] = $pass;
	}

	public function AuthClear () {
		# drop any stored auth info (key or cookie)
		$this->_auth = array();
	}

	public function AuthDelete () {
		/* We have close the handle before we delete the file,
			because curl does a flush to cookiejar on close. */
		curl_close( $this->_ch );
		unlink( $this->cookie_file );

		# We re-init the handle, just in case we are still using the object
		$this->_curl_init();
	}

	public function KeyFromCustomer () {
		if( empty($this->_customer) ) {
			return false;
		}
		if( empty($this->_customer->raw_api_key) ) {
			return false;
		}
		$this->AuthKey( $this->_customer->raw_api_key );
		return true;
	}

	# =================================================================
	# http://www.fastly.com/docs/api#Auth
	/*
	 * POST /login
	 * -requires having user/pass
	 * return: ?
	 */
	public function API_login () {
		# TODO: check to see if auth has U/P

		# not sure if order matters, but docs did this order, so i too :)
		$payload = array(
			'password' => $this->_auth['password'],
			    'user' => $this->_auth['user']
			);

		/* TODO: cache return and analyze.
			- /login return contains [customer] object with COMPANY info
			- /login return contains [user] object with MY info
				- this [user] is 99% (100?) same as doing a /current_user
				- this has an important [role] key we can use to pre-check canDo() actions

		*/

		$this->_lastmsg = null;
		$ret = $this->_post( '/login', $payload );

		#check for curl hard fail
		if( $ret === false ) {
			return false;
		}

		# did we get a msg back?
		if( !empty($ret->msg) ) {
			# cache it
			$this->_lastmsg = $ret->msg;
		}

		# check for denied http status
		if( $this->lasthttp == '403' ) {
			return false;
		}

		# i think we're ok here? maybe

		# mark that we're now properly logged in
		$this->_meta['login'] = true;

		# cache these out of the return
		$this->_user = $ret->user;
		$this->_customer = $ret->customer;

		return true;
	}

	# =================================================================
	# http://www.fastly.com/docs/api#Users
	/*
	 * GET /current_user
	 *	-Get the logged in user
	 *
	 * If exiting data is in the object, it will return that first,
	 *	pass true to force live fetch
	 *
	 * On fail, check object->lastmsg for reason from responce
	 */
	public function API_current_user ( $force=false ) {
		# do we have pre-cached data?
		# are we allowed to use it?
		if( !empty($this->_user) && empty($force) ) {
			return $this->_user;
		}

		$this->_lastmsg = null;

		$ret = $this->_get( '/current_user' );

		# check for hard curl fail
		if( $ret === false ) {
			return false;
		}

		# stash fail text
		if( !empty($ret->msg) ) {
			$this->_lastmsg = $ret->msg;
		}

		# check not allowed
		if( $this->lasthttp == '403' ) {
			return false;
		}

		# TODO: other ways this can fail?

		#cache data
		$this->_user = $ret;

		# also return it back
		return $ret;
	}

	/*
	 * GET /user
	 * 	-List users
	 *		-if role < admin, fail
	 *		-if role = admin, gets ALL users in ALL customers (have fun)
	 */
	public function API_users () {
		$this->_lastmsg = null;

		# list user mode
		$ret = $this->_get( '/user' );

		if( $ret === false ) {
			$this->_lastmsg = 'hard_false';
			return false;
		}

		if( !empty($ret->msg) ) {
			$this->_lastmsg = $ret->msg;
		}

		if( $this->lasthttp != 200 ) {
			return false;
		}


		return $ret;
	}

	/*
	 * GET /user/<id>
	 * 	-Get a specific user
	 * 		-if role = user, can get own id
	 * 			(same return as /current_user, but does not update internal user cache)
	 * 		-if role = superuser, can get any user in your CUSTOMER
	 * 		-if role = admin, can get any user
	 */
	public function API_user ( $user_id=null ) {
		$this->_lastmsg = null;

		# single user mode
		$ret = $this->_get( '/user/' . $user_id );

		if( $ret === false ) {
			$this->_lastmsg = 'hard_false';
			return false;
		}

		if( !empty($ret->msg) ) {
			$this->_lastmsg = $ret->msg;
		}

		if( $this->lasthttp != 200 ) {
			return false;
		}

		return $ret;
	}

	/*
	 * POST /user
	 * -Creates a user in your CUSTOMER
	 * -Requires >= SUPERUSER role
	 *
	 * Pass in an assoc array of data to create the account with
	 * Required keys:
			name (this is the textual name displayed)
			login (email of user, used for login)
	 * Optional keys:
			role ( default:user if not supplied. Can only make <= your level)
			customer ( id of customer to create the user into, may need role=ADMIN to use)
			? (there are others, but need confirmation from API source)

	 * Returns the userdata array for the newly created user on success.
	 * Returns false on failure to create
	 * TODO: on fail, api returns an array of missing/malformed keys, need to expose this
	 */
	public function API_user_create ( $data ) {
		$this->_lastmsg = null;

		# TODO: pre-check for the required keys in array

		$ret = $this->_post( '/user', $data );

		#check for curl hard fail
		if( $ret === false ) {
			return false;
		}

		# did we get a msg back?
		if( !empty($ret->msg) ) {
			# cache it
			$this->_lastmsg = $ret->msg;
		}

		# check for denied http status
		if( $this->lasthttp == '403' ) {
			// return false;
			# not going to throw a false on this right now, so the error array bubbles out
		}

		# TODO: check for [errors] in return, expose to user somehow

		# returned data should be decoded JSON array of data for new customer
		# Note: you likely need to set additional data for this user (like role)
		return $ret;
	}

	/*
	 * PUT /user/id
	 * -Updates a user's information
	 * -Requires >= SUPER to change others, or can change self
	 * -You can pass null to 1st param (id), it will try to pull YOUR id from YOUR cached userdata
	 * Things confirmed changeable:
			login
			name
			role
	 * Returns the updata userdata wad of the user that was changed.
	 * NOTE: If you change a user other then YOU, that user will get require_new_password=>true
	 * TODO: detect if you are changing your self (id=null OR with id==_user->id), and update _user cache with returned data
	 */
	public function API_user_update ( $id, $data ) {
		$this->_lastmsg = null;

		if( $id == null ) {
			if( !empty($this->_user) && !empty($this->_user->id) ) {
				$id = $this->_user->id;
			}
		}

		if( empty($id) ) {
			return false;
		}

		$ret = $this->_put( '/user/' . $id, $data );

		if( $ret === false ) {
			$this->_lastmsg = 'hard_false';
			return false;
		}

		if( !empty($ret->msg) ) {
			$this->_lastmsg = $ret->msg;
		}

		if( $this->lasthttp != 200 ) {
			return false;
		}

		return $ret;

	}

	# =================================================================
	# http://www.fastly.com/docs/api#Customers
	/*
	 * GET /current_customer
	 *	-Get the logged in customer info
	 *
	 * If exiting data is in the object, it will return that first,
	 *	pass true to force live fetch
	 *
	 * On fail, check object->lastmsg for reason from responce
	 */
	public function API_current_customer ( $force=false ) {
		# do we have pre-cached data?
		# are we allowed to use it?
		if( !empty($this->_customer) && empty($force) ) {
			return $this->_customer;
		}

		$this->_lastmsg = null;

		$ret = $this->_get( '/current_customer' );

		# check for hard curl fail
		if( $ret === false ) {
			return false;
		}

		# stash fail text
		if( !empty($ret->msg) ) {
			$this->_lastmsg = $ret->msg;
		}

		# check not allowed
		if( $this->lasthttp == '403' ) {
			return false;
		}

		# TODO: other ways this can fail?

		#cache data
		$this->_customer = $ret;

		# also return it back
		return $ret;
	}

	# =================================================================
	/*
	 * POST /purge/<url>
	 * purge a url from the service
	 * Requires engineer permissions
	 * example: /purge/http://www.example.com/some/path.html
	 * NOTE: does not require any authentication to use
	 * DEV: tested OK
	 * on fail check ->laststatus;
	 */
	public function API_purge ( $url ) {
		$this->_laststatus = null;

		#prevent stupid
		if( empty($url) ) {
			return false;
		}

		$ret = $this->_post( '/purge/' . $url, null);

		#check for hard fail
		if( $ret === false ) {
			return false;
		}

		# did it give us a status?
		if( empty($ret->status) ) {
			return false;
		}

		# stash it
		$this->_laststatus = $ret->status;

		# is it what we wanted?
		if( $ret->status != 'ok' ) {
			# /purge didnt return 'ok'? is that even possible?
			return false;
		}

		# woo!
		return true;
	}

	/*
	 * POST /service/<id>/purge_all
	 * Purge everything from a service
	 * Requires >= engineer permissions
	 * example: POST /service/SU1Z0isxPaozGVKXdv0eY/purge_all
	 * NOTE: may support using API_KEY authentication?
	 * on fail check ->laststatus;
	 */
	public function API_purge_all ( $service ) {
		$this->_laststatus = null;

		#prevent stupid
		if( empty($service) ) {
			return false;
		}

		$ret = $this->_post( '/service/' . $service . '/purge_all', null);

		# check for hard fail
		if( $ret === false ) {
			return false;
		}

		# did it give us a status?
		if( !empty($ret->status) ) {
			# stash it
			$this->_laststatus = $ret->status;
		}

		# check http_code for not allowed
		if( $this->lasthttp == '403' ) {
			# we hit 403, so status should have a 'you are not allowed' message
			return false;
		}

		# http_code was ok (200?)
		# status should be "ok"

		return true;
	}

	/*
	 * POST /service/<servid>/purge/<surkey>
	 * Purge groups of content by referring to the key that they hold in common.
	 * PERMISSIONS: unknown
	 * example: /service/SU1Z0isxPaozGVKXdv0eY/purge/foo
	 *
	 * NOTE: BETA feature, not universally available
	 * SEE http://www.fastly.com/docs/api#Surrogate_Keys
	 * DEV: untested
	 */
	public function API_purge_key ( $service, $key ) {
		return $this->_post( '/service/' . $service . '/purge/' . $key, null);
	}

}
