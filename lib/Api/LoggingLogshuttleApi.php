<?php
/**
 * LoggingLogshuttleApi
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
 * LoggingLogshuttleApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingLogshuttleApi
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
     * Operation createLogLogshuttle
     *
     * Create a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingLogshuttleResponse
     */
    public function createLogLogshuttle($options)
    {
        list($response) = $this->createLogLogshuttleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createLogLogshuttleWithHttpInfo
     *
     * Create a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingLogshuttleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLogLogshuttleWithHttpInfo($options)
    {
        $request = $this->createLogLogshuttleRequest($options);

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
                    if ('\Fastly\Model\LoggingLogshuttleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingLogshuttleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingLogshuttleResponse';
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
                        '\Fastly\Model\LoggingLogshuttleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createLogLogshuttleAsync
     *
     * Create a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogLogshuttleAsync($options)
    {
        return $this->createLogLogshuttleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLogLogshuttleAsyncWithHttpInfo
     *
     * Create a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogLogshuttleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingLogshuttleResponse';
        $request = $this->createLogLogshuttleRequest($options);

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
     * Create request for operation 'createLogLogshuttle'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createLogLogshuttleRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $placement = array_key_exists('placement', $options) ? $options['placement'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $format = array_key_exists('format', $options) ? $options['format'] : '%h %l %u %t "%r" %&gt;s %b';
        $log_processing_region = array_key_exists('log_processing_region', $options) ? $options['log_processing_region'] : 'none';
        $format_version = array_key_exists('format_version', $options) ? $options['format_version'] : self::FORMAT_VERSION_v2;
        $token = array_key_exists('token', $options) ? $options['token'] : null;
        $url = array_key_exists('url', $options) ? $options['url'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createLogLogshuttle'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createLogLogshuttle'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/logshuttle';
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
        if ($placement !== null) {
            $formParams['placement'] = ObjectSerializer::toFormValue($placement);
        }
        // form params
        if ($response_condition !== null) {
            $formParams['response_condition'] = ObjectSerializer::toFormValue($response_condition);
        }
        // form params
        if ($format !== null) {
            $formParams['format'] = ObjectSerializer::toFormValue($format);
        }
        // form params
        if ($log_processing_region !== null) {
            $formParams['log_processing_region'] = ObjectSerializer::toFormValue($log_processing_region);
        }
        // form params
        if ($format_version !== null) {
            $formParams['format_version'] = ObjectSerializer::toFormValue($format_version);
        }
        // form params
        if ($token !== null) {
            $formParams['token'] = ObjectSerializer::toFormValue($token);
        }
        // form params
        if ($url !== null) {
            $formParams['url'] = ObjectSerializer::toFormValue($url);
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
     * Operation deleteLogLogshuttle
     *
     * Delete a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteLogLogshuttle($options)
    {
        list($response) = $this->deleteLogLogshuttleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteLogLogshuttleWithHttpInfo
     *
     * Delete a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteLogLogshuttleWithHttpInfo($options)
    {
        $request = $this->deleteLogLogshuttleRequest($options);

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
     * Operation deleteLogLogshuttleAsync
     *
     * Delete a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogLogshuttleAsync($options)
    {
        return $this->deleteLogLogshuttleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteLogLogshuttleAsyncWithHttpInfo
     *
     * Delete a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogLogshuttleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteLogLogshuttleRequest($options);

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
     * Create request for operation 'deleteLogLogshuttle'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteLogLogshuttleRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_logshuttle_name = array_key_exists('logging_logshuttle_name', $options) ? $options['logging_logshuttle_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling deleteLogLogshuttle'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteLogLogshuttle'
            );
        }
        // verify the required parameter 'logging_logshuttle_name' is set
        if ($logging_logshuttle_name === null || (is_array($logging_logshuttle_name) && count($logging_logshuttle_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_logshuttle_name when calling deleteLogLogshuttle'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name}';
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
        // path params
        if ($logging_logshuttle_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_logshuttle_name' . '}',
                ObjectSerializer::toPathValue($logging_logshuttle_name),
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
     * Operation getLogLogshuttle
     *
     * Get a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingLogshuttleResponse
     */
    public function getLogLogshuttle($options)
    {
        list($response) = $this->getLogLogshuttleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getLogLogshuttleWithHttpInfo
     *
     * Get a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingLogshuttleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLogLogshuttleWithHttpInfo($options)
    {
        $request = $this->getLogLogshuttleRequest($options);

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
                    if ('\Fastly\Model\LoggingLogshuttleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingLogshuttleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingLogshuttleResponse';
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
                        '\Fastly\Model\LoggingLogshuttleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLogLogshuttleAsync
     *
     * Get a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogLogshuttleAsync($options)
    {
        return $this->getLogLogshuttleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLogLogshuttleAsyncWithHttpInfo
     *
     * Get a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogLogshuttleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingLogshuttleResponse';
        $request = $this->getLogLogshuttleRequest($options);

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
     * Create request for operation 'getLogLogshuttle'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLogLogshuttleRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_logshuttle_name = array_key_exists('logging_logshuttle_name', $options) ? $options['logging_logshuttle_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getLogLogshuttle'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getLogLogshuttle'
            );
        }
        // verify the required parameter 'logging_logshuttle_name' is set
        if ($logging_logshuttle_name === null || (is_array($logging_logshuttle_name) && count($logging_logshuttle_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_logshuttle_name when calling getLogLogshuttle'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name}';
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
        // path params
        if ($logging_logshuttle_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_logshuttle_name' . '}',
                ObjectSerializer::toPathValue($logging_logshuttle_name),
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
     * Operation listLogLogshuttle
     *
     * List Log Shuttle log endpoints
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
     * @return \Fastly\Model\LoggingLogshuttleResponse[]
     */
    public function listLogLogshuttle($options)
    {
        list($response) = $this->listLogLogshuttleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listLogLogshuttleWithHttpInfo
     *
     * List Log Shuttle log endpoints
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
     * @return array of \Fastly\Model\LoggingLogshuttleResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listLogLogshuttleWithHttpInfo($options)
    {
        $request = $this->listLogLogshuttleRequest($options);

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
                    if ('\Fastly\Model\LoggingLogshuttleResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingLogshuttleResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingLogshuttleResponse[]';
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
                        '\Fastly\Model\LoggingLogshuttleResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listLogLogshuttleAsync
     *
     * List Log Shuttle log endpoints
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
    public function listLogLogshuttleAsync($options)
    {
        return $this->listLogLogshuttleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLogLogshuttleAsyncWithHttpInfo
     *
     * List Log Shuttle log endpoints
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
    public function listLogLogshuttleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingLogshuttleResponse[]';
        $request = $this->listLogLogshuttleRequest($options);

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
     * Create request for operation 'listLogLogshuttle'
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
    public function listLogLogshuttleRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listLogLogshuttle'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listLogLogshuttle'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/logshuttle';
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
     * Operation updateLogLogshuttle
     *
     * Update a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingLogshuttleResponse
     */
    public function updateLogLogshuttle($options)
    {
        list($response) = $this->updateLogLogshuttleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateLogLogshuttleWithHttpInfo
     *
     * Update a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingLogshuttleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLogLogshuttleWithHttpInfo($options)
    {
        $request = $this->updateLogLogshuttleRequest($options);

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
                    if ('\Fastly\Model\LoggingLogshuttleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingLogshuttleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingLogshuttleResponse';
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
                        '\Fastly\Model\LoggingLogshuttleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateLogLogshuttleAsync
     *
     * Update a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogLogshuttleAsync($options)
    {
        return $this->updateLogLogshuttleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateLogLogshuttleAsyncWithHttpInfo
     *
     * Update a Log Shuttle log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogLogshuttleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingLogshuttleResponse';
        $request = $this->updateLogLogshuttleRequest($options);

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
     * Create request for operation 'updateLogLogshuttle'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_logshuttle_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $token The data authentication token associated with this endpoint. (optional)
     * @param  string $url The URL to stream logs to. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateLogLogshuttleRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_logshuttle_name = array_key_exists('logging_logshuttle_name', $options) ? $options['logging_logshuttle_name'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $placement = array_key_exists('placement', $options) ? $options['placement'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $format = array_key_exists('format', $options) ? $options['format'] : '%h %l %u %t "%r" %&gt;s %b';
        $log_processing_region = array_key_exists('log_processing_region', $options) ? $options['log_processing_region'] : 'none';
        $format_version = array_key_exists('format_version', $options) ? $options['format_version'] : self::FORMAT_VERSION_v2;
        $token = array_key_exists('token', $options) ? $options['token'] : null;
        $url = array_key_exists('url', $options) ? $options['url'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateLogLogshuttle'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateLogLogshuttle'
            );
        }
        // verify the required parameter 'logging_logshuttle_name' is set
        if ($logging_logshuttle_name === null || (is_array($logging_logshuttle_name) && count($logging_logshuttle_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_logshuttle_name when calling updateLogLogshuttle'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name}';
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
        // path params
        if ($logging_logshuttle_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_logshuttle_name' . '}',
                ObjectSerializer::toPathValue($logging_logshuttle_name),
                $resourcePath
            );
        }

        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($placement !== null) {
            $formParams['placement'] = ObjectSerializer::toFormValue($placement);
        }
        // form params
        if ($response_condition !== null) {
            $formParams['response_condition'] = ObjectSerializer::toFormValue($response_condition);
        }
        // form params
        if ($format !== null) {
            $formParams['format'] = ObjectSerializer::toFormValue($format);
        }
        // form params
        if ($log_processing_region !== null) {
            $formParams['log_processing_region'] = ObjectSerializer::toFormValue($log_processing_region);
        }
        // form params
        if ($format_version !== null) {
            $formParams['format_version'] = ObjectSerializer::toFormValue($format_version);
        }
        // form params
        if ($token !== null) {
            $formParams['token'] = ObjectSerializer::toFormValue($token);
        }
        // form params
        if ($url !== null) {
            $formParams['url'] = ObjectSerializer::toFormValue($url);
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
