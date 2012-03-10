<?php

class FastlyAPI {
	private $_meta = array();
	private $_auth = array();
	private $_ch = null;
	private $_lastcgi = null;
	private $_lastmsg = null;
	private $_laststatus = null;
	private $_user = null;

	private	$apphost = 'https://app.fastly.com';
	private $cookie_file = "./cookiejar.txt";

	public function __construct () {
		$this->_ch = curl_init();
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
	
	private function _curl_init() {
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
			var_dump( $this->_curlheaders );
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

	# =================================================================
	/*
	 * POST /login
	 * -requires having user/pass
	 * return: ?
	 */
	public function API_login() {
		# TODO: check to see if auth has U/P

		# not sure if order matters, but docs did this order, so i too :)
		$payload = array(
			'password' => $this->_auth['password'],
			    'user' => $this->_auth['user']
			);
		
		/* TODO: cache return and analyze.
			- on fail, return false, stash [msg] in some sort of ->lastmsg() var
			- /login return contains [customer] object with COMPANY info
			- /login return contains [user] object with MY info
				- this [user] is 99% (100?) same as doing a /current_user
				- this has an important [role] key we can use to pre-check canDo() actions
			
		*/
		
		$ret = $this->_post( '/login', $payload );
		
		if( $ret === false ) {
			return false;
		}

		# has a msg?
		if( !empty($ret->msg) ) {
			# cache it
			$this->_lastmsg = $ret->msg;
		
			# does it say we're wrong?
			if( $ret->msg == 'Invalid username or password') {
				# fail out
				return false;
			}
			
			print "dumping unhandled return from /login\n";
			print_r( $ret );
			
			return false;
		}

		# ok?
		$this->_user = $ret->user;
		$this->_customer = $ret->customer;
		
		return true;
	}

	/*
	 * GET /current_user
	 *	-Get the logged in user
	 */
	public function API_current_user() {
		# TODO: check for fail (how? not logged in), and return false
		# TODO: cache [user] info internally (overwriting cached [user] from /login?)
		$ret = $this->_get( '/current_user' );
		
		if( $ret === false ) {
			var_dump($ret);
			return false;
		}
		
		$this->_user = $ret;
		return $ret;
	}

	/*
	 * GET /user
	 * 	-List users
	 *		-if role < superuser, will fail
	 *		-if role = superuser, will get users in YOUR customer
	 *		-if role = admin, will get ALL users in ALL customers (have fun)
	 *
	 * GET /user/<id>
	 * 	-Get a specific user
	 *
	 * NOTE:
	 *	getting ANY user requires [role=ADMIN]
	 *	getting a user in your CUSTOMER requires [role=superuser]
	 *  can always get YOUR id (mimics doing /current_user ?)
	 */
	public function API_user($id=null) {
	
		if( empty($id) ) {
			return $this->_get( '/user' );
		} else {
			return $this->_get( '/user/' . $id );
		}
	}	

	public function API_current_customer() {
		# TODO: check for fail (how? not logged in), and return false
		$ret = $this->_get( '/current_customer' );
		
		if( $ret === false ) {
			var_dump($ret);
			return false;
		}
		
		$this->_customer = $ret;
		return $ret;
	}

	# =================================================================
	/*
	 * POST /purge/<url>
	 * purge a url from the service
	 * Requires engineer permissions
	 * example: /purge/http://www.example.com/some/path.html
	 * NOTE: may support using API_KEY authentication
	 */
	public function API_purge($url) {
		$ret = $this->_post( '/purge/' . $url, null);
		var_dump($ret);
	
		if( $ret === false ) {
			return false;
		}
		
		$this->_laststatus = $ret->status;
		if( $ret->status == 'ok' ) {
			return true;
		}
		
		return false;
	}
	
	/*
	 * POST /service/<id>/purge_all
	 * Purge everything from a service
	 * Requires engineer permissions
	 * example: POST /service/SU1Z0isxPaozGVKXdv0eY/purge_all
	 * NOTE: may support using API_KEY authentication
	 */
	public function API_purge_all( $service ) {
		return $this->_post( '/service/' . $service . '/purge_all', null);
	}
	
	/*
	 * POST /service/<id>/purge/<key>
	 * Purge groups of content by referring to the key that they hold in common.
	 * PERMISSIONS: unknown
	 * example: /service/SU1Z0isxPaozGVKXdv0eY/purge/foo
	 *
	 * NOTE: BETA feature, not universally available
	 * SEE http://www.fastly.com/docs/api#Surrogate_Keys
	 */
	public function API_purge_key( $service, $key ) {
		$ret = $this->_post( '/service/' . $service . '/purge_all', null);
		
		if( $ret === false ) {
			return false;
		}

		$this->_laststatus = $ret->status;
		if( $ret->status == 'ok' ) {
			return true;
		}
		
		return false;
	}

}
