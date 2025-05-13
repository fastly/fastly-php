<?php
/**
 * Configuration
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly;

/**
 * https://www.fastly.com/documentation/reference/api/#rate-limiting
 */
define("DEFAULT_RATELIMIT", 1000);

/**
 * Configuration Class Doc Comment
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class Configuration
{
    /**
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * Associate array to store API token(s)
     *
     * @var string[]
     */
    protected $apiTokens = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiTokenPrefixes = [];

    /**
     * Access token for OAuth/Bearer authentication
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.fastly.com';

    /**
     * User agent of the HTTP request
     *
     * @var string
     */
    protected $userAgent = 'fastly-php/9.0.0';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * The last observed value of http header Fastly-RateLimit-Remaining
     * https://www.fastly.com/documentation/reference/api/#rate-limiting
     *
     * @var int
     */
    protected $rate_limit_remaining = DEFAULT_RATELIMIT;

    /**
     * The last observed value of http header Fastly-RateLimit-Reset
     *
     * @var int
     */
    protected $rate_limit_reset = NULL;

    /**
     * Associative array to store API key(s)
     *
     * @var string[]
     */
    protected array $apiKeys = [];

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets remaining Rate Limit
     *
     * @param int $key Rate Limit remaining calls
     *
     * @return $this
     */
    public function setRateLimitRemaining($remaining)
    {
        $this->rate_limit_remaining = $remaining;
        return $this;
    }

    /**
     * Gets remaining Rate Limit
     *
     * @return int Rate Limit remaining calls
     */
    public function getRateLimitRemaining()
    {
        return $this->rate_limit_remaining;
    }

    /**
     * Sets Rate Limit reset time
     *
     * @param int $key Rate Limit reset time
     *
     * @return $this
     */
    public function setRateLimitReset($reset)
    {
        $this->rate_limit_reset = $reset;
        return $this;
    }

    /**
     * Gets Rate Limit reset time
     *
     * @return int Rate Limit reset time
     */
    public function getRateLimitReset()
    {
        return $this->rate_limit_reset;
    }

    /**
     * Sets API token
     *
     * @param string $key              API token
     *
     * @return $this
     */
    public function setApiToken($key)
    {
        $this->apiKeys['Fastly-Key'] = $key;
        return $this;
    }

    /**
     * Gets API token
     *
     * @return null|string API token
     */
    public function getApiToken()
    {
        return getenv("FASTLY_API_TOKEN") !== false ? getenv("FASTLY_API_TOKEN") : (isset($this->apiKeys['Fastly-Key']) ? $this->apiKeys['Fastly-Key'] : null);
    }

    /**
     * Sets the prefix for API token (e.g. Bearer)
     *
     * @param string $prefix           API token prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiTokenPrefix($prefix)
    {
        $this->apiKeyPrefixes['Fastly-Key'] = $prefix;
        return $this;
    }

    /**
     * Gets API token prefix
     *
     * @return null|string
     */
    public function getApiTokenPrefix()
    {
        return isset($this->apiKeyPrefixes['Fastly-Key']) ? $this->apiKeyPrefixes['Fastly-Key'] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the username for HTTP basic authentication
     *
     * @param string $username Username for HTTP basic authentication
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the password for HTTP basic authentication
     *
     * @param string $password Password for HTTP basic authentication
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;
        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;
        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (Fastly) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the schema document: 1.0.0' . PHP_EOL;
        $report .= '    SDK Package Version: 9.0.0' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API token (with prefix if set)
     *
     * @return null|string API token with the prefix
     */
    public function getApiTokenWithPrefix()
    {
        $prefix = $this->getApiTokenPrefix();
        $apiToken = $this->getApiToken();

        if ($apiToken === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiToken;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiToken;
        }

        return $keyWithPrefix;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings()
    {
        return [
            [
                "url" => "https://api.fastly.com",
                "description" => "No description provided",
            ],
            [
                "url" => "https://rt.fastly.com",
                "description" => "No description provided",
            ]
        ];
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int        $index     index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings($index, $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        $hosts = $this->getHostSettings();

        // check array index out of bound
        if ($index < 0 || $index >= sizeof($hosts)) {
            throw new \InvalidArgumentException("Invalid index $index when selecting the host. Must be less than ".sizeof($hosts));
        }

        $host = $hosts[$index];
        $url = $host["url"];

        // go through variable and assign a value
        foreach ($host["variables"] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (in_array($variables[$name], $variable["enum_values"], true)) { // check to see if the value is in the enum
                    $url = str_replace("{".$name."}", $variables[$name], $url);
                } else {
                    throw new \InvalidArgumentException("The variable `$name` in the host URL has invalid value ".$variables[$name].". Must be ".join(',', $variable["enum_values"]).".");
                }
            } else {
                // use default value
                $url = str_replace("{".$name."}", $variable["default_value"], $url);
            }
        }

        return $url;
    }
}
