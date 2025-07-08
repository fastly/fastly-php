<?php
/**
 * LoggingAzureblobApi
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
 * LoggingAzureblobApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingAzureblobApi
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
     * Operation createLogAzure
     *
     * Create an Azure Blob Storage log endpoint
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
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to 2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingAzureblobResponse
     */
    public function createLogAzure($options)
    {
        list($response) = $this->createLogAzureWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createLogAzureWithHttpInfo
     *
     * Create an Azure Blob Storage log endpoint
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
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to 2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingAzureblobResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLogAzureWithHttpInfo($options)
    {
        $request = $this->createLogAzureRequest($options);

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
                    if ('\Fastly\Model\LoggingAzureblobResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingAzureblobResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingAzureblobResponse';
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
                        '\Fastly\Model\LoggingAzureblobResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createLogAzureAsync
     *
     * Create an Azure Blob Storage log endpoint
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
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to 2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogAzureAsync($options)
    {
        return $this->createLogAzureAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLogAzureAsyncWithHttpInfo
     *
     * Create an Azure Blob Storage log endpoint
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
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to 2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogAzureAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingAzureblobResponse';
        $request = $this->createLogAzureRequest($options);

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
     * Create request for operation 'createLogAzure'
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
     * @param  int $format_version The version of the custom logging format used for the configured endpoint. The logging call gets placed by default in &#x60;vcl_log&#x60; if &#x60;format_version&#x60; is set to &#x60;2&#x60; and in &#x60;vcl_deliver&#x60; if &#x60;format_version&#x60; is set to &#x60;1&#x60;. (optional, default to 2)
     * @param  string $message_type How the message should be formatted. (optional, default to 'classic')
     * @param  string $timestamp_format A timestamp format (optional)
     * @param  string $compression_codec The codec used for compressing your logs. Valid values are &#x60;zstd&#x60;, &#x60;snappy&#x60;, and &#x60;gzip&#x60;. Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level The level of gzip encoding when sending logs (default &#x60;0&#x60;, no compression). Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createLogAzureRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $placement = array_key_exists('placement', $options) ? $options['placement'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $format = array_key_exists('format', $options) ? $options['format'] : '%h %l %u %t "%r" %&gt;s %b';
        $log_processing_region = array_key_exists('log_processing_region', $options) ? $options['log_processing_region'] : 'none';
        $format_version = array_key_exists('format_version', $options) ? $options['format_version'] : 2;
        $message_type = array_key_exists('message_type', $options) ? $options['message_type'] : 'classic';
        $timestamp_format = array_key_exists('timestamp_format', $options) ? $options['timestamp_format'] : null;
        $compression_codec = array_key_exists('compression_codec', $options) ? $options['compression_codec'] : null;
        $period = array_key_exists('period', $options) ? $options['period'] : 3600;
        $gzip_level = array_key_exists('gzip_level', $options) ? $options['gzip_level'] : 0;
        $path = array_key_exists('path', $options) ? $options['path'] : 'null';
        $account_name = array_key_exists('account_name', $options) ? $options['account_name'] : null;
        $container = array_key_exists('container', $options) ? $options['container'] : null;
        $sas_token = array_key_exists('sas_token', $options) ? $options['sas_token'] : null;
        $public_key = array_key_exists('public_key', $options) ? $options['public_key'] : 'null';
        $file_max_bytes = array_key_exists('file_max_bytes', $options) ? $options['file_max_bytes'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createLogAzure'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createLogAzure'
            );
        }
        if ($file_max_bytes !== null && $file_max_bytes < 1048576) {
            throw new \InvalidArgumentException('invalid value for "$file_max_bytes" when calling LoggingAzureblobApi.createLogAzure, must be bigger than or equal to 1048576.');
        }


        $resourcePath = '/service/{service_id}/version/{version_id}/logging/azureblob';
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
        if ($path !== null) {
            $formParams['path'] = ObjectSerializer::toFormValue($path);
        }
        // form params
        if ($account_name !== null) {
            $formParams['account_name'] = ObjectSerializer::toFormValue($account_name);
        }
        // form params
        if ($container !== null) {
            $formParams['container'] = ObjectSerializer::toFormValue($container);
        }
        // form params
        if ($sas_token !== null) {
            $formParams['sas_token'] = ObjectSerializer::toFormValue($sas_token);
        }
        // form params
        if ($public_key !== null) {
            $formParams['public_key'] = ObjectSerializer::toFormValue($public_key);
        }
        // form params
        if ($file_max_bytes !== null) {
            $formParams['file_max_bytes'] = ObjectSerializer::toFormValue($file_max_bytes);
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
     * Operation deleteLogAzure
     *
     * Delete the Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteLogAzure($options)
    {
        list($response) = $this->deleteLogAzureWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteLogAzureWithHttpInfo
     *
     * Delete the Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteLogAzureWithHttpInfo($options)
    {
        $request = $this->deleteLogAzureRequest($options);

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
     * Operation deleteLogAzureAsync
     *
     * Delete the Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogAzureAsync($options)
    {
        return $this->deleteLogAzureAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteLogAzureAsyncWithHttpInfo
     *
     * Delete the Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogAzureAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteLogAzureRequest($options);

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
     * Create request for operation 'deleteLogAzure'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteLogAzureRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_azureblob_name = array_key_exists('logging_azureblob_name', $options) ? $options['logging_azureblob_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling deleteLogAzure'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteLogAzure'
            );
        }
        // verify the required parameter 'logging_azureblob_name' is set
        if ($logging_azureblob_name === null || (is_array($logging_azureblob_name) && count($logging_azureblob_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_azureblob_name when calling deleteLogAzure'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name}';
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
        if ($logging_azureblob_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_azureblob_name' . '}',
                ObjectSerializer::toPathValue($logging_azureblob_name),
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
     * Operation getLogAzure
     *
     * Get an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingAzureblobResponse
     */
    public function getLogAzure($options)
    {
        list($response) = $this->getLogAzureWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getLogAzureWithHttpInfo
     *
     * Get an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingAzureblobResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLogAzureWithHttpInfo($options)
    {
        $request = $this->getLogAzureRequest($options);

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
                    if ('\Fastly\Model\LoggingAzureblobResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingAzureblobResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingAzureblobResponse';
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
                        '\Fastly\Model\LoggingAzureblobResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLogAzureAsync
     *
     * Get an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogAzureAsync($options)
    {
        return $this->getLogAzureAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLogAzureAsyncWithHttpInfo
     *
     * Get an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogAzureAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingAzureblobResponse';
        $request = $this->getLogAzureRequest($options);

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
     * Create request for operation 'getLogAzure'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLogAzureRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_azureblob_name = array_key_exists('logging_azureblob_name', $options) ? $options['logging_azureblob_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getLogAzure'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getLogAzure'
            );
        }
        // verify the required parameter 'logging_azureblob_name' is set
        if ($logging_azureblob_name === null || (is_array($logging_azureblob_name) && count($logging_azureblob_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_azureblob_name when calling getLogAzure'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name}';
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
        if ($logging_azureblob_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_azureblob_name' . '}',
                ObjectSerializer::toPathValue($logging_azureblob_name),
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
     * Operation listLogAzure
     *
     * List Azure Blob Storage log endpoints
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
     * @return \Fastly\Model\LoggingAzureblobResponse[]
     */
    public function listLogAzure($options)
    {
        list($response) = $this->listLogAzureWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listLogAzureWithHttpInfo
     *
     * List Azure Blob Storage log endpoints
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
     * @return array of \Fastly\Model\LoggingAzureblobResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listLogAzureWithHttpInfo($options)
    {
        $request = $this->listLogAzureRequest($options);

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
                    if ('\Fastly\Model\LoggingAzureblobResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingAzureblobResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingAzureblobResponse[]';
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
                        '\Fastly\Model\LoggingAzureblobResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listLogAzureAsync
     *
     * List Azure Blob Storage log endpoints
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
    public function listLogAzureAsync($options)
    {
        return $this->listLogAzureAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLogAzureAsyncWithHttpInfo
     *
     * List Azure Blob Storage log endpoints
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
    public function listLogAzureAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingAzureblobResponse[]';
        $request = $this->listLogAzureRequest($options);

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
     * Create request for operation 'listLogAzure'
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
    public function listLogAzureRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listLogAzure'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listLogAzure'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/azureblob';
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
     * Operation updateLogAzure
     *
     * Update an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
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
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingAzureblobResponse
     */
    public function updateLogAzure($options)
    {
        list($response) = $this->updateLogAzureWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateLogAzureWithHttpInfo
     *
     * Update an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
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
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingAzureblobResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLogAzureWithHttpInfo($options)
    {
        $request = $this->updateLogAzureRequest($options);

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
                    if ('\Fastly\Model\LoggingAzureblobResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingAzureblobResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingAzureblobResponse';
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
                        '\Fastly\Model\LoggingAzureblobResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateLogAzureAsync
     *
     * Update an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
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
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogAzureAsync($options)
    {
        return $this->updateLogAzureAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateLogAzureAsyncWithHttpInfo
     *
     * Update an Azure Blob Storage log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
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
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogAzureAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingAzureblobResponse';
        $request = $this->updateLogAzureRequest($options);

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
     * Create request for operation 'updateLogAzure'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $logging_azureblob_name The name for the real-time logging configuration. (required)
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
     * @param  string $path The path to upload logs to. (optional, default to 'null')
     * @param  string $account_name The unique Azure Blob Storage namespace in which your data objects are stored. Required. (optional)
     * @param  string $container The name of the Azure Blob Storage container in which to store logs. Required. (optional)
     * @param  string $sas_token The Azure shared access signature providing write access to the blob service objects. Be sure to update your token before it expires or the logging functionality will not work. Required. (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     * @param  int $file_max_bytes The maximum number of bytes for each uploaded file. A value of 0 can be used to indicate there is no limit on the size of uploaded files, otherwise the minimum value is 1048576 bytes (1 MiB). Note that Microsoft Azure Storage has [block size limits](https://learn.microsoft.com/en-us/rest/api/storageservices/put-block?tabs&#x3D;microsoft-entra-id#remarks). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateLogAzureRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_azureblob_name = array_key_exists('logging_azureblob_name', $options) ? $options['logging_azureblob_name'] : null;
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
        $path = array_key_exists('path', $options) ? $options['path'] : 'null';
        $account_name = array_key_exists('account_name', $options) ? $options['account_name'] : null;
        $container = array_key_exists('container', $options) ? $options['container'] : null;
        $sas_token = array_key_exists('sas_token', $options) ? $options['sas_token'] : null;
        $public_key = array_key_exists('public_key', $options) ? $options['public_key'] : 'null';
        $file_max_bytes = array_key_exists('file_max_bytes', $options) ? $options['file_max_bytes'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateLogAzure'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateLogAzure'
            );
        }
        // verify the required parameter 'logging_azureblob_name' is set
        if ($logging_azureblob_name === null || (is_array($logging_azureblob_name) && count($logging_azureblob_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_azureblob_name when calling updateLogAzure'
            );
        }
        if ($file_max_bytes !== null && $file_max_bytes < 1048576) {
            throw new \InvalidArgumentException('invalid value for "$file_max_bytes" when calling LoggingAzureblobApi.updateLogAzure, must be bigger than or equal to 1048576.');
        }


        $resourcePath = '/service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name}';
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
        if ($logging_azureblob_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_azureblob_name' . '}',
                ObjectSerializer::toPathValue($logging_azureblob_name),
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
        if ($path !== null) {
            $formParams['path'] = ObjectSerializer::toFormValue($path);
        }
        // form params
        if ($account_name !== null) {
            $formParams['account_name'] = ObjectSerializer::toFormValue($account_name);
        }
        // form params
        if ($container !== null) {
            $formParams['container'] = ObjectSerializer::toFormValue($container);
        }
        // form params
        if ($sas_token !== null) {
            $formParams['sas_token'] = ObjectSerializer::toFormValue($sas_token);
        }
        // form params
        if ($public_key !== null) {
            $formParams['public_key'] = ObjectSerializer::toFormValue($public_key);
        }
        // form params
        if ($file_max_bytes !== null) {
            $formParams['file_max_bytes'] = ObjectSerializer::toFormValue($file_max_bytes);
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
