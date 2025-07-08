<?php
/**
 * LoggingCloudfilesApi
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
 * LoggingCloudfilesApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingCloudfilesApi
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
     * Operation createLogCloudfiles
     *
     * Create a Cloud Files log endpoint
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
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingCloudfilesResponse
     */
    public function createLogCloudfiles($options)
    {
        list($response) = $this->createLogCloudfilesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createLogCloudfilesWithHttpInfo
     *
     * Create a Cloud Files log endpoint
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
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingCloudfilesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLogCloudfilesWithHttpInfo($options)
    {
        $request = $this->createLogCloudfilesRequest($options);

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
                    if ('\Fastly\Model\LoggingCloudfilesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingCloudfilesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingCloudfilesResponse';
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
                        '\Fastly\Model\LoggingCloudfilesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createLogCloudfilesAsync
     *
     * Create a Cloud Files log endpoint
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
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogCloudfilesAsync($options)
    {
        return $this->createLogCloudfilesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLogCloudfilesAsyncWithHttpInfo
     *
     * Create a Cloud Files log endpoint
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
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogCloudfilesAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingCloudfilesResponse';
        $request = $this->createLogCloudfilesRequest($options);

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
     * Create request for operation 'createLogCloudfiles'
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
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createLogCloudfilesRequest($options)
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
        $message_type = array_key_exists('message_type', $options) ? $options['message_type'] : 'classic';
        $timestamp_format = array_key_exists('timestamp_format', $options) ? $options['timestamp_format'] : null;
        $compression_codec = array_key_exists('compression_codec', $options) ? $options['compression_codec'] : null;
        $period = array_key_exists('period', $options) ? $options['period'] : 3600;
        $gzip_level = array_key_exists('gzip_level', $options) ? $options['gzip_level'] : 0;
        $access_key = array_key_exists('access_key', $options) ? $options['access_key'] : null;
        $bucket_name = array_key_exists('bucket_name', $options) ? $options['bucket_name'] : null;
        $path = array_key_exists('path', $options) ? $options['path'] : 'null';
        $region = array_key_exists('region', $options) ? $options['region'] : null;
        $public_key = array_key_exists('public_key', $options) ? $options['public_key'] : 'null';
        $user = array_key_exists('user', $options) ? $options['user'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createLogCloudfiles'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createLogCloudfiles'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/cloudfiles';
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
        if ($message_type !== null) {
            $formParams['message_type'] = ObjectSerializer::toFormValue($message_type);
        }
        // form params
        if ($timestamp_format !== null) {
            $formParams['timestamp_format'] = ObjectSerializer::toFormValue($timestamp_format);
        }
        // form params
        if ($compression_codec !== null) {
            $formParams['compression_codec'] = ObjectSerializer::toFormValue($compression_codec);
        }
        // form params
        if ($period !== null) {
            $formParams['period'] = ObjectSerializer::toFormValue($period);
        }
        // form params
        if ($gzip_level !== null) {
            $formParams['gzip_level'] = ObjectSerializer::toFormValue($gzip_level);
        }
        // form params
        if ($access_key !== null) {
            $formParams['access_key'] = ObjectSerializer::toFormValue($access_key);
        }
        // form params
        if ($bucket_name !== null) {
            $formParams['bucket_name'] = ObjectSerializer::toFormValue($bucket_name);
        }
        // form params
        if ($path !== null) {
            $formParams['path'] = ObjectSerializer::toFormValue($path);
        }
        // form params
        if ($region !== null) {
            $formParams['region'] = ObjectSerializer::toFormValue($region);
        }
        // form params
        if ($public_key !== null) {
            $formParams['public_key'] = ObjectSerializer::toFormValue($public_key);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = ObjectSerializer::toFormValue($user);
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
     * Operation deleteLogCloudfiles
     *
     * Delete the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteLogCloudfiles($options)
    {
        list($response) = $this->deleteLogCloudfilesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteLogCloudfilesWithHttpInfo
     *
     * Delete the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteLogCloudfilesWithHttpInfo($options)
    {
        $request = $this->deleteLogCloudfilesRequest($options);

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
     * Operation deleteLogCloudfilesAsync
     *
     * Delete the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogCloudfilesAsync($options)
    {
        return $this->deleteLogCloudfilesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteLogCloudfilesAsyncWithHttpInfo
     *
     * Delete the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogCloudfilesAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteLogCloudfilesRequest($options);

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
     * Create request for operation 'deleteLogCloudfiles'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteLogCloudfilesRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_cloudfiles_name = array_key_exists('logging_cloudfiles_name', $options) ? $options['logging_cloudfiles_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling deleteLogCloudfiles'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteLogCloudfiles'
            );
        }
        // verify the required parameter 'logging_cloudfiles_name' is set
        if ($logging_cloudfiles_name === null || (is_array($logging_cloudfiles_name) && count($logging_cloudfiles_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_cloudfiles_name when calling deleteLogCloudfiles'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name}';
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
        if ($logging_cloudfiles_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_cloudfiles_name' . '}',
                ObjectSerializer::toPathValue($logging_cloudfiles_name),
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
     * Operation getLogCloudfiles
     *
     * Get a Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingCloudfilesResponse
     */
    public function getLogCloudfiles($options)
    {
        list($response) = $this->getLogCloudfilesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getLogCloudfilesWithHttpInfo
     *
     * Get a Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingCloudfilesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLogCloudfilesWithHttpInfo($options)
    {
        $request = $this->getLogCloudfilesRequest($options);

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
                    if ('\Fastly\Model\LoggingCloudfilesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingCloudfilesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingCloudfilesResponse';
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
                        '\Fastly\Model\LoggingCloudfilesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLogCloudfilesAsync
     *
     * Get a Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogCloudfilesAsync($options)
    {
        return $this->getLogCloudfilesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLogCloudfilesAsyncWithHttpInfo
     *
     * Get a Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogCloudfilesAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingCloudfilesResponse';
        $request = $this->getLogCloudfilesRequest($options);

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
     * Create request for operation 'getLogCloudfiles'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLogCloudfilesRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_cloudfiles_name = array_key_exists('logging_cloudfiles_name', $options) ? $options['logging_cloudfiles_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getLogCloudfiles'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getLogCloudfiles'
            );
        }
        // verify the required parameter 'logging_cloudfiles_name' is set
        if ($logging_cloudfiles_name === null || (is_array($logging_cloudfiles_name) && count($logging_cloudfiles_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_cloudfiles_name when calling getLogCloudfiles'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name}';
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
        if ($logging_cloudfiles_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_cloudfiles_name' . '}',
                ObjectSerializer::toPathValue($logging_cloudfiles_name),
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
     * Operation listLogCloudfiles
     *
     * List Cloud Files log endpoints
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
     * @return \Fastly\Model\LoggingCloudfilesResponse[]
     */
    public function listLogCloudfiles($options)
    {
        list($response) = $this->listLogCloudfilesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listLogCloudfilesWithHttpInfo
     *
     * List Cloud Files log endpoints
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
     * @return array of \Fastly\Model\LoggingCloudfilesResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listLogCloudfilesWithHttpInfo($options)
    {
        $request = $this->listLogCloudfilesRequest($options);

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
                    if ('\Fastly\Model\LoggingCloudfilesResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingCloudfilesResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingCloudfilesResponse[]';
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
                        '\Fastly\Model\LoggingCloudfilesResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listLogCloudfilesAsync
     *
     * List Cloud Files log endpoints
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
    public function listLogCloudfilesAsync($options)
    {
        return $this->listLogCloudfilesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLogCloudfilesAsyncWithHttpInfo
     *
     * List Cloud Files log endpoints
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
    public function listLogCloudfilesAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingCloudfilesResponse[]';
        $request = $this->listLogCloudfilesRequest($options);

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
     * Create request for operation 'listLogCloudfiles'
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
    public function listLogCloudfilesRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listLogCloudfiles'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listLogCloudfiles'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/cloudfiles';
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
     * Operation updateLogCloudfiles
     *
     * Update the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingCloudfilesResponse
     */
    public function updateLogCloudfiles($options)
    {
        list($response) = $this->updateLogCloudfilesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateLogCloudfilesWithHttpInfo
     *
     * Update the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingCloudfilesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLogCloudfilesWithHttpInfo($options)
    {
        $request = $this->updateLogCloudfilesRequest($options);

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
                    if ('\Fastly\Model\LoggingCloudfilesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingCloudfilesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingCloudfilesResponse';
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
                        '\Fastly\Model\LoggingCloudfilesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateLogCloudfilesAsync
     *
     * Update the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogCloudfilesAsync($options)
    {
        return $this->updateLogCloudfilesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateLogCloudfilesAsyncWithHttpInfo
     *
     * Update the Cloud Files log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogCloudfilesAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingCloudfilesResponse';
        $request = $this->updateLogCloudfilesRequest($options);

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
     * Create request for operation 'updateLogCloudfiles'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_cloudfiles_name The name for the real-time logging configuration. (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  string $placement Where in the generated VCL the logging call should be placed. If not set, endpoints with &#x60;format_version&#x60; of 2 are placed in &#x60;vcl_log&#x60; and those with &#x60;format_version&#x60; of 1 are placed in &#x60;vcl_deliver&#x60;. (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://www.fastly.com/documentation/guides/integrations/streaming-logs/custom-log-formats/). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  string $log_processing_region The geographic region where the logs will be processed before streaming. Valid values are &#x60;us&#x60;, &#x60;eu&#x60;, and &#x60;none&#x60; for global. (optional, default to 'none')
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to self::FORMAT_VERSION_v2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $access_key Your Cloud Files account access key. (optional)
     * @param  string $bucket_name The name of your Cloud Files container. (optional)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $region The region to stream logs to. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  string $user The username for your Cloud Files account. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateLogCloudfilesRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_cloudfiles_name = array_key_exists('logging_cloudfiles_name', $options) ? $options['logging_cloudfiles_name'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $placement = array_key_exists('placement', $options) ? $options['placement'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $format = array_key_exists('format', $options) ? $options['format'] : '%h %l %u %t "%r" %&gt;s %b';
        $log_processing_region = array_key_exists('log_processing_region', $options) ? $options['log_processing_region'] : 'none';
        $format_version = array_key_exists('format_version', $options) ? $options['format_version'] : self::FORMAT_VERSION_v2;
        $message_type = array_key_exists('message_type', $options) ? $options['message_type'] : 'classic';
        $timestamp_format = array_key_exists('timestamp_format', $options) ? $options['timestamp_format'] : null;
        $compression_codec = array_key_exists('compression_codec', $options) ? $options['compression_codec'] : null;
        $period = array_key_exists('period', $options) ? $options['period'] : 3600;
        $gzip_level = array_key_exists('gzip_level', $options) ? $options['gzip_level'] : 0;
        $access_key = array_key_exists('access_key', $options) ? $options['access_key'] : null;
        $bucket_name = array_key_exists('bucket_name', $options) ? $options['bucket_name'] : null;
        $path = array_key_exists('path', $options) ? $options['path'] : 'null';
        $region = array_key_exists('region', $options) ? $options['region'] : null;
        $public_key = array_key_exists('public_key', $options) ? $options['public_key'] : 'null';
        $user = array_key_exists('user', $options) ? $options['user'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateLogCloudfiles'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateLogCloudfiles'
            );
        }
        // verify the required parameter 'logging_cloudfiles_name' is set
        if ($logging_cloudfiles_name === null || (is_array($logging_cloudfiles_name) && count($logging_cloudfiles_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_cloudfiles_name when calling updateLogCloudfiles'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name}';
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
        if ($logging_cloudfiles_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_cloudfiles_name' . '}',
                ObjectSerializer::toPathValue($logging_cloudfiles_name),
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
        if ($message_type !== null) {
            $formParams['message_type'] = ObjectSerializer::toFormValue($message_type);
        }
        // form params
        if ($timestamp_format !== null) {
            $formParams['timestamp_format'] = ObjectSerializer::toFormValue($timestamp_format);
        }
        // form params
        if ($compression_codec !== null) {
            $formParams['compression_codec'] = ObjectSerializer::toFormValue($compression_codec);
        }
        // form params
        if ($period !== null) {
            $formParams['period'] = ObjectSerializer::toFormValue($period);
        }
        // form params
        if ($gzip_level !== null) {
            $formParams['gzip_level'] = ObjectSerializer::toFormValue($gzip_level);
        }
        // form params
        if ($access_key !== null) {
            $formParams['access_key'] = ObjectSerializer::toFormValue($access_key);
        }
        // form params
        if ($bucket_name !== null) {
            $formParams['bucket_name'] = ObjectSerializer::toFormValue($bucket_name);
        }
        // form params
        if ($path !== null) {
            $formParams['path'] = ObjectSerializer::toFormValue($path);
        }
        // form params
        if ($region !== null) {
            $formParams['region'] = ObjectSerializer::toFormValue($region);
        }
        // form params
        if ($public_key !== null) {
            $formParams['public_key'] = ObjectSerializer::toFormValue($public_key);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = ObjectSerializer::toFormValue($user);
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
