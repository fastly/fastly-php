<?php
/**
 * RateLimiterApi
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

namespace Fastly\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Fastly\ApiException;
use Fastly\Configuration;
use Fastly\HeaderSelector;
use Fastly\ObjectSerializer;

/**
 * RateLimiterApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class RateLimiterApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if multiple are defined
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation createRateLimiter
     *
     * Create a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RateLimiterResponse
     */
    public function createRateLimiter($options)
    {
        list($response) = $this->createRateLimiterWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createRateLimiterWithHttpInfo
     *
     * Create a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RateLimiterResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRateLimiterWithHttpInfo($options)
    {
        $request = $this->createRateLimiterRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            if ('POST' != 'GET' && 'POST' != 'HEAD') {
                $header = $response->getHeader('Fastly-RateLimit-Remaining');
                if (count($header) > 0) {
                  $this->config->setRateLimitRemaining($header[0]);
                }

                $header = $response->getHeader('Fastly-RateLimit-Reset');
                if (count($header) > 0) {
                  $this->config->setRateLimitReset($header[0]);
                }
            } 

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\RateLimiterResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RateLimiterResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RateLimiterResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\RateLimiterResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createRateLimiterAsync
     *
     * Create a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRateLimiterAsync($options)
    {
        return $this->createRateLimiterAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRateLimiterAsyncWithHttpInfo
     *
     * Create a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRateLimiterAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RateLimiterResponse';
        $request = $this->createRateLimiterRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createRateLimiter'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRateLimiterRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $uri_dictionary_name = array_key_exists('uri_dictionary_name', $options) ? $options['uri_dictionary_name'] : null;
        $http_methods = array_key_exists('http_methods', $options) ? $options['http_methods'] : null;
        $rps_limit = array_key_exists('rps_limit', $options) ? $options['rps_limit'] : null;
        $window_size = array_key_exists('window_size', $options) ? $options['window_size'] : null;
        $client_key = array_key_exists('client_key', $options) ? $options['client_key'] : null;
        $penalty_box_duration = array_key_exists('penalty_box_duration', $options) ? $options['penalty_box_duration'] : null;
        $action = array_key_exists('action', $options) ? $options['action'] : null;
        $response_object_name = array_key_exists('response_object_name', $options) ? $options['response_object_name'] : null;
        $logger_type = array_key_exists('logger_type', $options) ? $options['logger_type'] : null;
        $feature_revision = array_key_exists('feature_revision', $options) ? $options['feature_revision'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createRateLimiter'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createRateLimiter'
            );
        }
        if ($name !== null && strlen($name) > 255) {
            throw new \InvalidArgumentException('invalid length for "$name" when calling RateLimiterApi.createRateLimiter, must be smaller than or equal to 255.');
        }
        if ($name !== null && strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$name" when calling RateLimiterApi.createRateLimiter, must be bigger than or equal to 1.');
        }

        if ($uri_dictionary_name !== null && strlen($uri_dictionary_name) > 255) {
            throw new \InvalidArgumentException('invalid length for "$uri_dictionary_name" when calling RateLimiterApi.createRateLimiter, must be smaller than or equal to 255.');
        }
        if ($uri_dictionary_name !== null && strlen($uri_dictionary_name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$uri_dictionary_name" when calling RateLimiterApi.createRateLimiter, must be bigger than or equal to 1.');
        }

        if ($http_methods !== null && count($http_methods) < 1) {
            throw new \InvalidArgumentException('invalid value for "$http_methods" when calling RateLimiterApi.createRateLimiter, number of items must be greater than or equal to 1.');
        }

        if ($rps_limit !== null && $rps_limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$rps_limit" when calling RateLimiterApi.createRateLimiter, must be smaller than or equal to 10000.');
        }
        if ($rps_limit !== null && $rps_limit < 10) {
            throw new \InvalidArgumentException('invalid value for "$rps_limit" when calling RateLimiterApi.createRateLimiter, must be bigger than or equal to 10.');
        }

        if ($client_key !== null && count($client_key) < 1) {
            throw new \InvalidArgumentException('invalid value for "$client_key" when calling RateLimiterApi.createRateLimiter, number of items must be greater than or equal to 1.');
        }

        if ($penalty_box_duration !== null && $penalty_box_duration > 60) {
            throw new \InvalidArgumentException('invalid value for "$penalty_box_duration" when calling RateLimiterApi.createRateLimiter, must be smaller than or equal to 60.');
        }
        if ($penalty_box_duration !== null && $penalty_box_duration < 1) {
            throw new \InvalidArgumentException('invalid value for "$penalty_box_duration" when calling RateLimiterApi.createRateLimiter, must be bigger than or equal to 1.');
        }

        if ($action !== null && strlen($action) < 1) {
            throw new \InvalidArgumentException('invalid length for "$action" when calling RateLimiterApi.createRateLimiter, must be bigger than or equal to 1.');
        }

        if ($response_object_name !== null && strlen($response_object_name) > 255) {
            throw new \InvalidArgumentException('invalid length for "$response_object_name" when calling RateLimiterApi.createRateLimiter, must be smaller than or equal to 255.');
        }
        if ($response_object_name !== null && strlen($response_object_name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$response_object_name" when calling RateLimiterApi.createRateLimiter, must be bigger than or equal to 1.');
        }


        $resourcePath = '/service/{service_id}/version/{version_id}/rate-limiters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
                $resourcePath
            );
        }
        // path params
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
                $resourcePath
            );
        }

        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($uri_dictionary_name !== null) {
            $formParams['uri_dictionary_name'] = ObjectSerializer::toFormValue($uri_dictionary_name);
        }
        // form params
        if ($http_methods !== null) {
            $formParams['http_methods'] = ObjectSerializer::toFormValue($http_methods);
        }
        // form params
        if ($rps_limit !== null) {
            $formParams['rps_limit'] = ObjectSerializer::toFormValue($rps_limit);
        }
        // form params
        if ($window_size !== null) {
            $formParams['window_size'] = ObjectSerializer::toFormValue($window_size);
        }
        // form params
        if ($client_key !== null) {
            $formParams['client_key'] = ObjectSerializer::toFormValue($client_key);
        }
        // form params
        if ($penalty_box_duration !== null) {
            $formParams['penalty_box_duration'] = ObjectSerializer::toFormValue($penalty_box_duration);
        }
        // form params
        if ($action !== null) {
            $formParams['action'] = ObjectSerializer::toFormValue($action);
        }
        // form params
        if ($response_object_name !== null) {
            $formParams['response_object_name'] = ObjectSerializer::toFormValue($response_object_name);
        }
        // form params
        if ($logger_type !== null) {
            $formParams['logger_type'] = ObjectSerializer::toFormValue($logger_type);
        }
        // form params
        if ($feature_revision !== null) {
            $formParams['feature_revision'] = ObjectSerializer::toFormValue($feature_revision);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API token authentication
        $apiToken = $this->config->getApiTokenWithPrefix('Fastly-Key');
        if ($apiToken !== null) {
            $headers['Fastly-Key'] = $apiToken;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHosts = ["https://api.fastly.com"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteRateLimiter
     *
     * Delete a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteRateLimiter($options)
    {
        list($response) = $this->deleteRateLimiterWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteRateLimiterWithHttpInfo
     *
     * Delete a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRateLimiterWithHttpInfo($options)
    {
        $request = $this->deleteRateLimiterRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            if ('DELETE' != 'GET' && 'DELETE' != 'HEAD') {
                $header = $response->getHeader('Fastly-RateLimit-Remaining');
                if (count($header) > 0) {
                  $this->config->setRateLimitRemaining($header[0]);
                }

                $header = $response->getHeader('Fastly-RateLimit-Reset');
                if (count($header) > 0) {
                  $this->config->setRateLimitReset($header[0]);
                }
            } 

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\InlineResponse200' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\InlineResponse200', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\InlineResponse200';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteRateLimiterAsync
     *
     * Delete a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRateLimiterAsync($options)
    {
        return $this->deleteRateLimiterAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteRateLimiterAsyncWithHttpInfo
     *
     * Delete a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRateLimiterAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteRateLimiterRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteRateLimiter'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteRateLimiterRequest($options)
    {
        // unbox the parameters from the associative array
        $rate_limiter_id = array_key_exists('rate_limiter_id', $options) ? $options['rate_limiter_id'] : null;

        // verify the required parameter 'rate_limiter_id' is set
        if ($rate_limiter_id === null || (is_array($rate_limiter_id) && count($rate_limiter_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rate_limiter_id when calling deleteRateLimiter'
            );
        }

        $resourcePath = '/rate-limiters/{rate_limiter_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($rate_limiter_id !== null) {
            $resourcePath = str_replace(
                '{' . 'rate_limiter_id' . '}',
                ObjectSerializer::toPathValue($rate_limiter_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API token authentication
        $apiToken = $this->config->getApiTokenWithPrefix('Fastly-Key');
        if ($apiToken !== null) {
            $headers['Fastly-Key'] = $apiToken;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHosts = ["https://api.fastly.com"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getRateLimiter
     *
     * Get a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RateLimiterResponse
     */
    public function getRateLimiter($options)
    {
        list($response) = $this->getRateLimiterWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getRateLimiterWithHttpInfo
     *
     * Get a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RateLimiterResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRateLimiterWithHttpInfo($options)
    {
        $request = $this->getRateLimiterRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            if ('GET' != 'GET' && 'GET' != 'HEAD') {
                $header = $response->getHeader('Fastly-RateLimit-Remaining');
                if (count($header) > 0) {
                  $this->config->setRateLimitRemaining($header[0]);
                }

                $header = $response->getHeader('Fastly-RateLimit-Reset');
                if (count($header) > 0) {
                  $this->config->setRateLimitReset($header[0]);
                }
            } 

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\RateLimiterResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RateLimiterResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RateLimiterResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\RateLimiterResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRateLimiterAsync
     *
     * Get a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRateLimiterAsync($options)
    {
        return $this->getRateLimiterAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRateLimiterAsyncWithHttpInfo
     *
     * Get a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getRateLimiterAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RateLimiterResponse';
        $request = $this->getRateLimiterRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getRateLimiter'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRateLimiterRequest($options)
    {
        // unbox the parameters from the associative array
        $rate_limiter_id = array_key_exists('rate_limiter_id', $options) ? $options['rate_limiter_id'] : null;

        // verify the required parameter 'rate_limiter_id' is set
        if ($rate_limiter_id === null || (is_array($rate_limiter_id) && count($rate_limiter_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rate_limiter_id when calling getRateLimiter'
            );
        }

        $resourcePath = '/rate-limiters/{rate_limiter_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($rate_limiter_id !== null) {
            $resourcePath = str_replace(
                '{' . 'rate_limiter_id' . '}',
                ObjectSerializer::toPathValue($rate_limiter_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API token authentication
        $apiToken = $this->config->getApiTokenWithPrefix('Fastly-Key');
        if ($apiToken !== null) {
            $headers['Fastly-Key'] = $apiToken;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHosts = ["https://api.fastly.com"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listRateLimiters
     *
     * List rate limiters
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RateLimiterResponse[]
     */
    public function listRateLimiters($options)
    {
        list($response) = $this->listRateLimitersWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listRateLimitersWithHttpInfo
     *
     * List rate limiters
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RateLimiterResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listRateLimitersWithHttpInfo($options)
    {
        $request = $this->listRateLimitersRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            if ('GET' != 'GET' && 'GET' != 'HEAD') {
                $header = $response->getHeader('Fastly-RateLimit-Remaining');
                if (count($header) > 0) {
                  $this->config->setRateLimitRemaining($header[0]);
                }

                $header = $response->getHeader('Fastly-RateLimit-Reset');
                if (count($header) > 0) {
                  $this->config->setRateLimitReset($header[0]);
                }
            } 

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\RateLimiterResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RateLimiterResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RateLimiterResponse[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\RateLimiterResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listRateLimitersAsync
     *
     * List rate limiters
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRateLimitersAsync($options)
    {
        return $this->listRateLimitersAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listRateLimitersAsyncWithHttpInfo
     *
     * List rate limiters
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRateLimitersAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RateLimiterResponse[]';
        $request = $this->listRateLimitersRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listRateLimiters'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRateLimitersRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listRateLimiters'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listRateLimiters'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/rate-limiters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
                $resourcePath
            );
        }
        // path params
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API token authentication
        $apiToken = $this->config->getApiTokenWithPrefix('Fastly-Key');
        if ($apiToken !== null) {
            $headers['Fastly-Key'] = $apiToken;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHosts = ["https://api.fastly.com"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateRateLimiter
     *
     * Update a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RateLimiterResponse
     */
    public function updateRateLimiter($options)
    {
        list($response) = $this->updateRateLimiterWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateRateLimiterWithHttpInfo
     *
     * Update a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RateLimiterResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRateLimiterWithHttpInfo($options)
    {
        $request = $this->updateRateLimiterRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            if ('PUT' != 'GET' && 'PUT' != 'HEAD') {
                $header = $response->getHeader('Fastly-RateLimit-Remaining');
                if (count($header) > 0) {
                  $this->config->setRateLimitRemaining($header[0]);
                }

                $header = $response->getHeader('Fastly-RateLimit-Reset');
                if (count($header) > 0) {
                  $this->config->setRateLimitReset($header[0]);
                }
            } 

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\RateLimiterResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RateLimiterResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RateLimiterResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\RateLimiterResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateRateLimiterAsync
     *
     * Update a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRateLimiterAsync($options)
    {
        return $this->updateRateLimiterAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateRateLimiterAsyncWithHttpInfo
     *
     * Update a rate limiter
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRateLimiterAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RateLimiterResponse';
        $request = $this->updateRateLimiterRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateRateLimiter'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $rate_limiter_id Alphanumeric string identifying the rate limiter. (required)
     * @param  string $name A human readable name for the rate limiting rule. (optional)
     * @param  string $uri_dictionary_name The name of a Dictionary containing URIs as keys. If not defined or &#x60;null&#x60;, all origin URIs will be rate limited. (optional)
     * @param  string[] $http_methods Array of HTTP methods to apply rate limiting to. (optional)
     * @param  int $rps_limit Upper limit of requests per second allowed by the rate limiter. (optional)
     * @param  int $window_size Number of seconds during which the RPS limit must be exceeded in order to trigger a violation. (optional)
     * @param  string[] $client_key Array of VCL variables used to generate a counter key to identify a client. Example variables include &#x60;req.http.Fastly-Client-IP&#x60;, &#x60;req.http.User-Agent&#x60;, or a custom header like &#x60;req.http.API-Key&#x60;. (optional)
     * @param  int $penalty_box_duration Length of time in minutes that the rate limiter is in effect after the initial violation is detected. (optional)
     * @param  string $action The action to take when a rate limiter violation is detected. (optional)
     * @param  string $response_object_name Name of existing response object. Required if &#x60;action&#x60; is &#x60;response_object&#x60;. Note that the rate limiter response is only updated to reflect the response object content when saving the rate limiter configuration. (optional)
     * @param  string $logger_type Name of the type of logging endpoint to be used when action is &#x60;log_only&#x60;. The logging endpoint type is used to determine the appropriate log format to use when emitting log entries. (optional)
     * @param  int $feature_revision Revision number of the rate limiting feature implementation. Defaults to the most recent revision. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateRateLimiterRequest($options)
    {
        // unbox the parameters from the associative array
        $rate_limiter_id = array_key_exists('rate_limiter_id', $options) ? $options['rate_limiter_id'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $uri_dictionary_name = array_key_exists('uri_dictionary_name', $options) ? $options['uri_dictionary_name'] : null;
        $http_methods = array_key_exists('http_methods', $options) ? $options['http_methods'] : null;
        $rps_limit = array_key_exists('rps_limit', $options) ? $options['rps_limit'] : null;
        $window_size = array_key_exists('window_size', $options) ? $options['window_size'] : null;
        $client_key = array_key_exists('client_key', $options) ? $options['client_key'] : null;
        $penalty_box_duration = array_key_exists('penalty_box_duration', $options) ? $options['penalty_box_duration'] : null;
        $action = array_key_exists('action', $options) ? $options['action'] : null;
        $response_object_name = array_key_exists('response_object_name', $options) ? $options['response_object_name'] : null;
        $logger_type = array_key_exists('logger_type', $options) ? $options['logger_type'] : null;
        $feature_revision = array_key_exists('feature_revision', $options) ? $options['feature_revision'] : null;

        // verify the required parameter 'rate_limiter_id' is set
        if ($rate_limiter_id === null || (is_array($rate_limiter_id) && count($rate_limiter_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rate_limiter_id when calling updateRateLimiter'
            );
        }
        if ($name !== null && strlen($name) > 255) {
            throw new \InvalidArgumentException('invalid length for "$name" when calling RateLimiterApi.updateRateLimiter, must be smaller than or equal to 255.');
        }
        if ($name !== null && strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$name" when calling RateLimiterApi.updateRateLimiter, must be bigger than or equal to 1.');
        }

        if ($uri_dictionary_name !== null && strlen($uri_dictionary_name) > 255) {
            throw new \InvalidArgumentException('invalid length for "$uri_dictionary_name" when calling RateLimiterApi.updateRateLimiter, must be smaller than or equal to 255.');
        }
        if ($uri_dictionary_name !== null && strlen($uri_dictionary_name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$uri_dictionary_name" when calling RateLimiterApi.updateRateLimiter, must be bigger than or equal to 1.');
        }

        if ($http_methods !== null && count($http_methods) < 1) {
            throw new \InvalidArgumentException('invalid value for "$http_methods" when calling RateLimiterApi.updateRateLimiter, number of items must be greater than or equal to 1.');
        }

        if ($rps_limit !== null && $rps_limit > 10000) {
            throw new \InvalidArgumentException('invalid value for "$rps_limit" when calling RateLimiterApi.updateRateLimiter, must be smaller than or equal to 10000.');
        }
        if ($rps_limit !== null && $rps_limit < 10) {
            throw new \InvalidArgumentException('invalid value for "$rps_limit" when calling RateLimiterApi.updateRateLimiter, must be bigger than or equal to 10.');
        }

        if ($client_key !== null && count($client_key) < 1) {
            throw new \InvalidArgumentException('invalid value for "$client_key" when calling RateLimiterApi.updateRateLimiter, number of items must be greater than or equal to 1.');
        }

        if ($penalty_box_duration !== null && $penalty_box_duration > 60) {
            throw new \InvalidArgumentException('invalid value for "$penalty_box_duration" when calling RateLimiterApi.updateRateLimiter, must be smaller than or equal to 60.');
        }
        if ($penalty_box_duration !== null && $penalty_box_duration < 1) {
            throw new \InvalidArgumentException('invalid value for "$penalty_box_duration" when calling RateLimiterApi.updateRateLimiter, must be bigger than or equal to 1.');
        }

        if ($action !== null && strlen($action) < 1) {
            throw new \InvalidArgumentException('invalid length for "$action" when calling RateLimiterApi.updateRateLimiter, must be bigger than or equal to 1.');
        }

        if ($response_object_name !== null && strlen($response_object_name) > 255) {
            throw new \InvalidArgumentException('invalid length for "$response_object_name" when calling RateLimiterApi.updateRateLimiter, must be smaller than or equal to 255.');
        }
        if ($response_object_name !== null && strlen($response_object_name) < 1) {
            throw new \InvalidArgumentException('invalid length for "$response_object_name" when calling RateLimiterApi.updateRateLimiter, must be bigger than or equal to 1.');
        }


        $resourcePath = '/rate-limiters/{rate_limiter_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($rate_limiter_id !== null) {
            $resourcePath = str_replace(
                '{' . 'rate_limiter_id' . '}',
                ObjectSerializer::toPathValue($rate_limiter_id),
                $resourcePath
            );
        }

        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($uri_dictionary_name !== null) {
            $formParams['uri_dictionary_name'] = ObjectSerializer::toFormValue($uri_dictionary_name);
        }
        // form params
        if ($http_methods !== null) {
            $formParams['http_methods'] = ObjectSerializer::toFormValue($http_methods);
        }
        // form params
        if ($rps_limit !== null) {
            $formParams['rps_limit'] = ObjectSerializer::toFormValue($rps_limit);
        }
        // form params
        if ($window_size !== null) {
            $formParams['window_size'] = ObjectSerializer::toFormValue($window_size);
        }
        // form params
        if ($client_key !== null) {
            $formParams['client_key'] = ObjectSerializer::toFormValue($client_key);
        }
        // form params
        if ($penalty_box_duration !== null) {
            $formParams['penalty_box_duration'] = ObjectSerializer::toFormValue($penalty_box_duration);
        }
        // form params
        if ($action !== null) {
            $formParams['action'] = ObjectSerializer::toFormValue($action);
        }
        // form params
        if ($response_object_name !== null) {
            $formParams['response_object_name'] = ObjectSerializer::toFormValue($response_object_name);
        }
        // form params
        if ($logger_type !== null) {
            $formParams['logger_type'] = ObjectSerializer::toFormValue($logger_type);
        }
        // form params
        if ($feature_revision !== null) {
            $formParams['feature_revision'] = ObjectSerializer::toFormValue($feature_revision);
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API token authentication
        $apiToken = $this->config->getApiTokenWithPrefix('Fastly-Key');
        if ($apiToken !== null) {
            $headers['Fastly-Key'] = $apiToken;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHosts = ["https://api.fastly.com"];
        if ($this->hostIndex < 0 || $this->hostIndex >= sizeof($operationHosts)) {
            throw new \InvalidArgumentException("Invalid index {$this->hostIndex} when selecting the host. Must be less than ".sizeof($operationHosts));
        }
        $operationHost = $operationHosts[$this->hostIndex];

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
