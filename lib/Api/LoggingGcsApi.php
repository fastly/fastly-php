<?php
/**
 * LoggingGcsApi
 * PHP version 7.2
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
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Fastly\ApiException;
use Fastly\Configuration;
use Fastly\HeaderSelector;
use Fastly\ObjectSerializer;

/**
 * LoggingGcsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class LoggingGcsApi
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
    public function setHostIndex($hostIndex)
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
     * Operation createLogGcs
     *
     * Create a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id service_id (required)
     * @param  int $version_id version_id (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingGcsResponse
     */
    public function createLogGcs($options)
    {
        list($response) = $this->createLogGcsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createLogGcsWithHttpInfo
     *
     * Create a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingGcsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createLogGcsWithHttpInfo($options)
    {
        $request = $this->createLogGcsRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\LoggingGcsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingGcsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingGcsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Fastly\Model\LoggingGcsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createLogGcsAsync
     *
     * Create a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogGcsAsync($options)
    {
        return $this->createLogGcsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createLogGcsAsyncWithHttpInfo
     *
     * Create a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createLogGcsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingGcsResponse';
        $request = $this->createLogGcsRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createLogGcs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createLogGcsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $placement = array_key_exists('placement', $options) ? $options['placement'] : null;
        $format_version = array_key_exists('format_version', $options) ? $options['format_version'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $format = array_key_exists('format', $options) ? $options['format'] : '%h %l %u %t "%r" %&gt;s %b';
        $message_type = array_key_exists('message_type', $options) ? $options['message_type'] : null;
        $timestamp_format = array_key_exists('timestamp_format', $options) ? $options['timestamp_format'] : null;
        $period = array_key_exists('period', $options) ? $options['period'] : 3600;
        $gzip_level = array_key_exists('gzip_level', $options) ? $options['gzip_level'] : 0;
        $compression_codec = array_key_exists('compression_codec', $options) ? $options['compression_codec'] : null;
        $user = array_key_exists('user', $options) ? $options['user'] : null;
        $secret_key = array_key_exists('secret_key', $options) ? $options['secret_key'] : null;
        $bucket_name = array_key_exists('bucket_name', $options) ? $options['bucket_name'] : null;
        $path = array_key_exists('path', $options) ? $options['path'] : null;
        $public_key = array_key_exists('public_key', $options) ? $options['public_key'] : 'null';

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createLogGcs'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createLogGcs'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/gcs';
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
        if ($format_version !== null) {
            $formParams['format_version'] = ObjectSerializer::toFormValue($format_version);
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
        if ($message_type !== null) {
            $formParams['message_type'] = ObjectSerializer::toFormValue($message_type);
        }
        // form params
        if ($timestamp_format !== null) {
            $formParams['timestamp_format'] = ObjectSerializer::toFormValue($timestamp_format);
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
        if ($compression_codec !== null) {
            $formParams['compression_codec'] = ObjectSerializer::toFormValue($compression_codec);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = ObjectSerializer::toFormValue($user);
        }
        // form params
        if ($secret_key !== null) {
            $formParams['secret_key'] = ObjectSerializer::toFormValue($secret_key);
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
        if ($public_key !== null) {
            $formParams['public_key'] = ObjectSerializer::toFormValue($public_key);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteLogGcs
     *
     * Delete a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id service_id (required)
     * @param  int $version_id version_id (required)
     * @param  string $logging_gcs_name logging_gcs_name (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function deleteLogGcs($options)
    {
        list($response) = $this->deleteLogGcsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteLogGcsWithHttpInfo
     *
     * Delete a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteLogGcsWithHttpInfo($options)
    {
        $request = $this->deleteLogGcsRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteLogGcsAsync
     *
     * Delete a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogGcsAsync($options)
    {
        return $this->deleteLogGcsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteLogGcsAsyncWithHttpInfo
     *
     * Delete a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteLogGcsAsyncWithHttpInfo($options)
    {
        $returnType = 'object';
        $request = $this->deleteLogGcsRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteLogGcs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteLogGcsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_gcs_name = array_key_exists('logging_gcs_name', $options) ? $options['logging_gcs_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling deleteLogGcs'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteLogGcs'
            );
        }
        // verify the required parameter 'logging_gcs_name' is set
        if ($logging_gcs_name === null || (is_array($logging_gcs_name) && count($logging_gcs_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_gcs_name when calling deleteLogGcs'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name}';
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
        if ($logging_gcs_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_gcs_name' . '}',
                ObjectSerializer::toPathValue($logging_gcs_name),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getLogGcs
     *
     * Get a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id service_id (required)
     * @param  int $version_id version_id (required)
     * @param  string $logging_gcs_name logging_gcs_name (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingGcsResponse
     */
    public function getLogGcs($options)
    {
        list($response) = $this->getLogGcsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getLogGcsWithHttpInfo
     *
     * Get a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingGcsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLogGcsWithHttpInfo($options)
    {
        $request = $this->getLogGcsRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\LoggingGcsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingGcsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingGcsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Fastly\Model\LoggingGcsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLogGcsAsync
     *
     * Get a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogGcsAsync($options)
    {
        return $this->getLogGcsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLogGcsAsyncWithHttpInfo
     *
     * Get a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogGcsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingGcsResponse';
        $request = $this->getLogGcsRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getLogGcs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLogGcsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_gcs_name = array_key_exists('logging_gcs_name', $options) ? $options['logging_gcs_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getLogGcs'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getLogGcs'
            );
        }
        // verify the required parameter 'logging_gcs_name' is set
        if ($logging_gcs_name === null || (is_array($logging_gcs_name) && count($logging_gcs_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_gcs_name when calling getLogGcs'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name}';
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
        if ($logging_gcs_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_gcs_name' . '}',
                ObjectSerializer::toPathValue($logging_gcs_name),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listLogGcs
     *
     * List GCS log endpoints
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id service_id (required)
     * @param  int $version_id version_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingGcsResponse[]
     */
    public function listLogGcs($options)
    {
        list($response) = $this->listLogGcsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listLogGcsWithHttpInfo
     *
     * List GCS log endpoints
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingGcsResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listLogGcsWithHttpInfo($options)
    {
        $request = $this->listLogGcsRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\LoggingGcsResponse[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingGcsResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingGcsResponse[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Fastly\Model\LoggingGcsResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listLogGcsAsync
     *
     * List GCS log endpoints
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLogGcsAsync($options)
    {
        return $this->listLogGcsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listLogGcsAsyncWithHttpInfo
     *
     * List GCS log endpoints
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listLogGcsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingGcsResponse[]';
        $request = $this->listLogGcsRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listLogGcs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listLogGcsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listLogGcs'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listLogGcs'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/gcs';
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateLogGcs
     *
     * Update a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id service_id (required)
     * @param  int $version_id version_id (required)
     * @param  string $logging_gcs_name logging_gcs_name (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\LoggingGcsResponse
     */
    public function updateLogGcs($options)
    {
        list($response) = $this->updateLogGcsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateLogGcsWithHttpInfo
     *
     * Update a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\LoggingGcsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLogGcsWithHttpInfo($options)
    {
        $request = $this->updateLogGcsRequest($options);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Fastly\Model\LoggingGcsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\LoggingGcsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\LoggingGcsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\Fastly\Model\LoggingGcsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateLogGcsAsync
     *
     * Update a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogGcsAsync($options)
    {
        return $this->updateLogGcsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateLogGcsAsyncWithHttpInfo
     *
     * Update a GCS log endpoint
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateLogGcsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\LoggingGcsResponse';
        $request = $this->updateLogGcsRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateLogGcs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $service_id (required)
     * @param  int $version_id (required)
     * @param  string $logging_gcs_name (required)
     * @param  string $name The name for the real-time logging configuration. (optional)
     * @param  \Fastly\Model\LoggingPlacement $placement (optional)
     * @param  \Fastly\Model\LoggingFormatVersion $format_version (optional)
     * @param  string $response_condition The name of an existing condition in the configured endpoint, or leave blank to always execute. (optional)
     * @param  string $format A Fastly [log format string](https://docs.fastly.com/en/guides/custom-log-formats). (optional, default to '%h %l %u %t "%r" %&gt;s %b')
     * @param  \Fastly\Model\LoggingMessageType $message_type (optional)
     * @param  string $timestamp_format Date and time in ISO 8601 format. (optional)
     * @param  int $period How frequently log files are finalized so they can be available for reading (in seconds). (optional, default to 3600)
     * @param  int $gzip_level What level of gzip encoding to have when sending logs (default &#x60;0&#x60;, no compression). If an explicit non-zero value is set, then &#x60;compression_codec&#x60; will default to \\\&quot;gzip.\\\&quot; Specifying both &#x60;compression_codec&#x60; and &#x60;gzip_level&#x60; in the same API request will result in an error. (optional, default to 0)
     * @param  \Fastly\Model\LoggingCompressionCodec $compression_codec (optional)
     * @param  string $user Your Google Cloud Platform service account email address. The &#x60;client_email&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $secret_key Your Google Cloud Platform account secret key. The &#x60;private_key&#x60; field in your service account authentication JSON. Required. (optional)
     * @param  string $bucket_name The name of the GCS bucket. (optional)
     * @param  string $path (optional)
     * @param  string $public_key A PGP public key that Fastly will use to encrypt your log files before writing them to disk. (optional, default to 'null')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateLogGcsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $logging_gcs_name = array_key_exists('logging_gcs_name', $options) ? $options['logging_gcs_name'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $placement = array_key_exists('placement', $options) ? $options['placement'] : null;
        $format_version = array_key_exists('format_version', $options) ? $options['format_version'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $format = array_key_exists('format', $options) ? $options['format'] : '%h %l %u %t "%r" %&gt;s %b';
        $message_type = array_key_exists('message_type', $options) ? $options['message_type'] : null;
        $timestamp_format = array_key_exists('timestamp_format', $options) ? $options['timestamp_format'] : null;
        $period = array_key_exists('period', $options) ? $options['period'] : 3600;
        $gzip_level = array_key_exists('gzip_level', $options) ? $options['gzip_level'] : 0;
        $compression_codec = array_key_exists('compression_codec', $options) ? $options['compression_codec'] : null;
        $user = array_key_exists('user', $options) ? $options['user'] : null;
        $secret_key = array_key_exists('secret_key', $options) ? $options['secret_key'] : null;
        $bucket_name = array_key_exists('bucket_name', $options) ? $options['bucket_name'] : null;
        $path = array_key_exists('path', $options) ? $options['path'] : null;
        $public_key = array_key_exists('public_key', $options) ? $options['public_key'] : 'null';

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateLogGcs'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateLogGcs'
            );
        }
        // verify the required parameter 'logging_gcs_name' is set
        if ($logging_gcs_name === null || (is_array($logging_gcs_name) && count($logging_gcs_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $logging_gcs_name when calling updateLogGcs'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name}';
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
        if ($logging_gcs_name !== null) {
            $resourcePath = str_replace(
                '{' . 'logging_gcs_name' . '}',
                ObjectSerializer::toPathValue($logging_gcs_name),
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
        if ($format_version !== null) {
            $formParams['format_version'] = ObjectSerializer::toFormValue($format_version);
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
        if ($message_type !== null) {
            $formParams['message_type'] = ObjectSerializer::toFormValue($message_type);
        }
        // form params
        if ($timestamp_format !== null) {
            $formParams['timestamp_format'] = ObjectSerializer::toFormValue($timestamp_format);
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
        if ($compression_codec !== null) {
            $formParams['compression_codec'] = ObjectSerializer::toFormValue($compression_codec);
        }
        // form params
        if ($user !== null) {
            $formParams['user'] = ObjectSerializer::toFormValue($user);
        }
        // form params
        if ($secret_key !== null) {
            $formParams['secret_key'] = ObjectSerializer::toFormValue($secret_key);
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
        if ($public_key !== null) {
            $formParams['public_key'] = ObjectSerializer::toFormValue($public_key);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
