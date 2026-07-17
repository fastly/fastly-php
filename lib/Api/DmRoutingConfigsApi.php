<?php
/**
 * DmRoutingConfigsApi
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
 * DmRoutingConfigsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class DmRoutingConfigsApi
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
     * Operation activateDmRoutingConfigDraft
     *
     * Activate the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RoutingConfigVersionResponse
     */
    public function activateDmRoutingConfigDraft($options)
    {
        list($response) = $this->activateDmRoutingConfigDraftWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation activateDmRoutingConfigDraftWithHttpInfo
     *
     * Activate the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RoutingConfigVersionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function activateDmRoutingConfigDraftWithHttpInfo($options)
    {
        $request = $this->activateDmRoutingConfigDraftRequest($options);

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
                    if ('\Fastly\Model\RoutingConfigVersionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RoutingConfigVersionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RoutingConfigVersionResponse';
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
                        '\Fastly\Model\RoutingConfigVersionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation activateDmRoutingConfigDraftAsync
     *
     * Activate the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateDmRoutingConfigDraftAsync($options)
    {
        return $this->activateDmRoutingConfigDraftAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation activateDmRoutingConfigDraftAsyncWithHttpInfo
     *
     * Activate the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function activateDmRoutingConfigDraftAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RoutingConfigVersionResponse';
        $request = $this->activateDmRoutingConfigDraftRequest($options);

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
     * Create request for operation 'activateDmRoutingConfigDraft'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function activateDmRoutingConfigDraftRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling activateDmRoutingConfigDraft'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/activate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createDmRoutingConfig
     *
     * Create a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  \Fastly\Model\RoutingConfig $routing_config routing_config (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RoutingConfigResponse
     */
    public function createDmRoutingConfig($options)
    {
        list($response) = $this->createDmRoutingConfigWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createDmRoutingConfigWithHttpInfo
     *
     * Create a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  \Fastly\Model\RoutingConfig $routing_config (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RoutingConfigResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDmRoutingConfigWithHttpInfo($options)
    {
        $request = $this->createDmRoutingConfigRequest($options);

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
                case 201:
                    if ('\Fastly\Model\RoutingConfigResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RoutingConfigResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RoutingConfigResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\RoutingConfigResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createDmRoutingConfigAsync
     *
     * Create a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  \Fastly\Model\RoutingConfig $routing_config (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDmRoutingConfigAsync($options)
    {
        return $this->createDmRoutingConfigAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDmRoutingConfigAsyncWithHttpInfo
     *
     * Create a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  \Fastly\Model\RoutingConfig $routing_config (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDmRoutingConfigAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RoutingConfigResponse';
        $request = $this->createDmRoutingConfigRequest($options);

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
     * Create request for operation 'createDmRoutingConfig'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  \Fastly\Model\RoutingConfig $routing_config (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createDmRoutingConfigRequest($options)
    {
        // unbox the parameters from the associative array
        $routing_config = array_key_exists('routing_config', $options) ? $options['routing_config'] : null;


        $resourcePath = '/domain-management/v1/routing-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($routing_config)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($routing_config));
            } else {
                $httpBody = $routing_config;
            }
        } elseif (count($formParams) > 0) {
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
     * Operation createDmRoutingConfigPath
     *
     * Create a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  \Fastly\Model\PathCreate $path_create path_create (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\PathResponse
     */
    public function createDmRoutingConfigPath($options)
    {
        list($response) = $this->createDmRoutingConfigPathWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createDmRoutingConfigPathWithHttpInfo
     *
     * Create a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\PathCreate $path_create (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\PathResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDmRoutingConfigPathWithHttpInfo($options)
    {
        $request = $this->createDmRoutingConfigPathRequest($options);

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
                case 201:
                    if ('\Fastly\Model\PathResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PathResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PathResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\PathResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createDmRoutingConfigPathAsync
     *
     * Create a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\PathCreate $path_create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDmRoutingConfigPathAsync($options)
    {
        return $this->createDmRoutingConfigPathAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDmRoutingConfigPathAsyncWithHttpInfo
     *
     * Create a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\PathCreate $path_create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDmRoutingConfigPathAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PathResponse';
        $request = $this->createDmRoutingConfigPathRequest($options);

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
     * Create request for operation 'createDmRoutingConfigPath'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\PathCreate $path_create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createDmRoutingConfigPathRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_create = array_key_exists('path_create', $options) ? $options['path_create'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling createDmRoutingConfigPath'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($path_create)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($path_create));
            } else {
                $httpBody = $path_create;
            }
        } elseif (count($formParams) > 0) {
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
     * Operation createDmRoutingConfigRule
     *
     * Create a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     * @param  \Fastly\Model\RuleCreate $rule_create rule_create (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RuleResponse
     */
    public function createDmRoutingConfigRule($options)
    {
        list($response) = $this->createDmRoutingConfigRuleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createDmRoutingConfigRuleWithHttpInfo
     *
     * Create a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\RuleCreate $rule_create (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RuleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDmRoutingConfigRuleWithHttpInfo($options)
    {
        $request = $this->createDmRoutingConfigRuleRequest($options);

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
                case 201:
                    if ('\Fastly\Model\RuleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RuleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RuleResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\RuleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createDmRoutingConfigRuleAsync
     *
     * Create a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\RuleCreate $rule_create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDmRoutingConfigRuleAsync($options)
    {
        return $this->createDmRoutingConfigRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDmRoutingConfigRuleAsyncWithHttpInfo
     *
     * Create a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\RuleCreate $rule_create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDmRoutingConfigRuleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RuleResponse';
        $request = $this->createDmRoutingConfigRuleRequest($options);

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
     * Create request for operation 'createDmRoutingConfigRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\RuleCreate $rule_create (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createDmRoutingConfigRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;
        $rule_create = array_key_exists('rule_create', $options) ? $options['rule_create'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling createDmRoutingConfigRule'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling createDmRoutingConfigRule'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($rule_create)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($rule_create));
            } else {
                $httpBody = $rule_create;
            }
        } elseif (count($formParams) > 0) {
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
     * Operation deactivateDmRoutingConfig
     *
     * Deactivate a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RoutingConfigResponse
     */
    public function deactivateDmRoutingConfig($options)
    {
        list($response) = $this->deactivateDmRoutingConfigWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deactivateDmRoutingConfigWithHttpInfo
     *
     * Deactivate a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RoutingConfigResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deactivateDmRoutingConfigWithHttpInfo($options)
    {
        $request = $this->deactivateDmRoutingConfigRequest($options);

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
                    if ('\Fastly\Model\RoutingConfigResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RoutingConfigResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RoutingConfigResponse';
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
                        '\Fastly\Model\RoutingConfigResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deactivateDmRoutingConfigAsync
     *
     * Deactivate a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deactivateDmRoutingConfigAsync($options)
    {
        return $this->deactivateDmRoutingConfigAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deactivateDmRoutingConfigAsyncWithHttpInfo
     *
     * Deactivate a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deactivateDmRoutingConfigAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RoutingConfigResponse';
        $request = $this->deactivateDmRoutingConfigRequest($options);

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
     * Create request for operation 'deactivateDmRoutingConfig'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deactivateDmRoutingConfigRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling deactivateDmRoutingConfig'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/deactivate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteDmRoutingConfig
     *
     * Delete a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  bool $force When &#x60;true&#x60;, allows deleting a routing config that has an active version. This is destructive — traffic routing for any paths served by the config will stop immediately. (optional, default to false)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteDmRoutingConfig($options)
    {
        $this->deleteDmRoutingConfigWithHttpInfo($options);
    }

    /**
     * Operation deleteDmRoutingConfigWithHttpInfo
     *
     * Delete a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  bool $force When &#x60;true&#x60;, allows deleting a routing config that has an active version. This is destructive — traffic routing for any paths served by the config will stop immediately. (optional, default to false)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDmRoutingConfigWithHttpInfo($options)
    {
        $request = $this->deleteDmRoutingConfigRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteDmRoutingConfigAsync
     *
     * Delete a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  bool $force When &#x60;true&#x60;, allows deleting a routing config that has an active version. This is destructive — traffic routing for any paths served by the config will stop immediately. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigAsync($options)
    {
        return $this->deleteDmRoutingConfigAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDmRoutingConfigAsyncWithHttpInfo
     *
     * Delete a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  bool $force When &#x60;true&#x60;, allows deleting a routing config that has an active version. This is destructive — traffic routing for any paths served by the config will stop immediately. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteDmRoutingConfigRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteDmRoutingConfig'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  bool $force When &#x60;true&#x60;, allows deleting a routing config that has an active version. This is destructive — traffic routing for any paths served by the config will stop immediately. (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteDmRoutingConfigRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $force = array_key_exists('force', $options) ? $options['force'] : false;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling deleteDmRoutingConfig'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($force !== null) {
            if('form' === 'form' && is_array($force)) {
                foreach($force as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['force'] = ObjectSerializer::toString($force);
            }
        }


        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
     * Operation deleteDmRoutingConfigInactiveVersions
     *
     * Delete inactive versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteDmRoutingConfigInactiveVersions($options)
    {
        $this->deleteDmRoutingConfigInactiveVersionsWithHttpInfo($options);
    }

    /**
     * Operation deleteDmRoutingConfigInactiveVersionsWithHttpInfo
     *
     * Delete inactive versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDmRoutingConfigInactiveVersionsWithHttpInfo($options)
    {
        $request = $this->deleteDmRoutingConfigInactiveVersionsRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteDmRoutingConfigInactiveVersionsAsync
     *
     * Delete inactive versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigInactiveVersionsAsync($options)
    {
        return $this->deleteDmRoutingConfigInactiveVersionsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDmRoutingConfigInactiveVersionsAsyncWithHttpInfo
     *
     * Delete inactive versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigInactiveVersionsAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteDmRoutingConfigInactiveVersionsRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteDmRoutingConfigInactiveVersions'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteDmRoutingConfigInactiveVersionsRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling deleteDmRoutingConfigInactiveVersions'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/versions/inactive';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
     * Operation deleteDmRoutingConfigPath
     *
     * Delete a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteDmRoutingConfigPath($options)
    {
        $this->deleteDmRoutingConfigPathWithHttpInfo($options);
    }

    /**
     * Operation deleteDmRoutingConfigPathWithHttpInfo
     *
     * Delete a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDmRoutingConfigPathWithHttpInfo($options)
    {
        $request = $this->deleteDmRoutingConfigPathRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteDmRoutingConfigPathAsync
     *
     * Delete a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigPathAsync($options)
    {
        return $this->deleteDmRoutingConfigPathAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDmRoutingConfigPathAsyncWithHttpInfo
     *
     * Delete a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigPathAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteDmRoutingConfigPathRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteDmRoutingConfigPath'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteDmRoutingConfigPathRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling deleteDmRoutingConfigPath'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling deleteDmRoutingConfigPath'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
     * Operation deleteDmRoutingConfigRule
     *
     * Delete a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     * @param  string $rule_id rule_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteDmRoutingConfigRule($options)
    {
        $this->deleteDmRoutingConfigRuleWithHttpInfo($options);
    }

    /**
     * Operation deleteDmRoutingConfigRuleWithHttpInfo
     *
     * Delete a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDmRoutingConfigRuleWithHttpInfo($options)
    {
        $request = $this->deleteDmRoutingConfigRuleRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteDmRoutingConfigRuleAsync
     *
     * Delete a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigRuleAsync($options)
    {
        return $this->deleteDmRoutingConfigRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDmRoutingConfigRuleAsyncWithHttpInfo
     *
     * Delete a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDmRoutingConfigRuleAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteDmRoutingConfigRuleRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteDmRoutingConfigRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteDmRoutingConfigRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;
        $rule_id = array_key_exists('rule_id', $options) ? $options['rule_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling deleteDmRoutingConfigRule'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling deleteDmRoutingConfigRule'
            );
        }
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null || (is_array($rule_id) && count($rule_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rule_id when calling deleteDmRoutingConfigRule'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
                $resourcePath
            );
        }
        // path params
        if ($rule_id !== null) {
            $resourcePath = str_replace(
                '{' . 'rule_id' . '}',
                ObjectSerializer::toPathValue($rule_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
     * Operation discardDmRoutingConfigDraft
     *
     * Discard the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function discardDmRoutingConfigDraft($options)
    {
        $this->discardDmRoutingConfigDraftWithHttpInfo($options);
    }

    /**
     * Operation discardDmRoutingConfigDraftWithHttpInfo
     *
     * Discard the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function discardDmRoutingConfigDraftWithHttpInfo($options)
    {
        $request = $this->discardDmRoutingConfigDraftRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation discardDmRoutingConfigDraftAsync
     *
     * Discard the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function discardDmRoutingConfigDraftAsync($options)
    {
        return $this->discardDmRoutingConfigDraftAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation discardDmRoutingConfigDraftAsyncWithHttpInfo
     *
     * Discard the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function discardDmRoutingConfigDraftAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->discardDmRoutingConfigDraftRequest($options);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'discardDmRoutingConfigDraft'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function discardDmRoutingConfigDraftRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling discardDmRoutingConfigDraft'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/draft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
     * Operation getDmRoutingConfig
     *
     * Get a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RoutingConfigResponse
     */
    public function getDmRoutingConfig($options)
    {
        list($response) = $this->getDmRoutingConfigWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getDmRoutingConfigWithHttpInfo
     *
     * Get a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RoutingConfigResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDmRoutingConfigWithHttpInfo($options)
    {
        $request = $this->getDmRoutingConfigRequest($options);

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
                    if ('\Fastly\Model\RoutingConfigResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RoutingConfigResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RoutingConfigResponse';
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
                        '\Fastly\Model\RoutingConfigResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDmRoutingConfigAsync
     *
     * Get a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigAsync($options)
    {
        return $this->getDmRoutingConfigAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDmRoutingConfigAsyncWithHttpInfo
     *
     * Get a routing config
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RoutingConfigResponse';
        $request = $this->getDmRoutingConfigRequest($options);

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
     * Create request for operation 'getDmRoutingConfig'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDmRoutingConfigRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling getDmRoutingConfig'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
     * Operation getDmRoutingConfigDraftDiff
     *
     * Get the draft diff
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\DraftDiff
     */
    public function getDmRoutingConfigDraftDiff($options)
    {
        list($response) = $this->getDmRoutingConfigDraftDiffWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getDmRoutingConfigDraftDiffWithHttpInfo
     *
     * Get the draft diff
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\DraftDiff, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDmRoutingConfigDraftDiffWithHttpInfo($options)
    {
        $request = $this->getDmRoutingConfigDraftDiffRequest($options);

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
                    if ('\Fastly\Model\DraftDiff' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\DraftDiff', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\DraftDiff';
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
                        '\Fastly\Model\DraftDiff',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDmRoutingConfigDraftDiffAsync
     *
     * Get the draft diff
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigDraftDiffAsync($options)
    {
        return $this->getDmRoutingConfigDraftDiffAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDmRoutingConfigDraftDiffAsyncWithHttpInfo
     *
     * Get the draft diff
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigDraftDiffAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\DraftDiff';
        $request = $this->getDmRoutingConfigDraftDiffRequest($options);

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
     * Create request for operation 'getDmRoutingConfigDraftDiff'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDmRoutingConfigDraftDiffRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling getDmRoutingConfigDraftDiff'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/draft/diff';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
     * Operation getDmRoutingConfigPath
     *
     * Get a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\PathResponse
     */
    public function getDmRoutingConfigPath($options)
    {
        list($response) = $this->getDmRoutingConfigPathWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getDmRoutingConfigPathWithHttpInfo
     *
     * Get a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\PathResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDmRoutingConfigPathWithHttpInfo($options)
    {
        $request = $this->getDmRoutingConfigPathRequest($options);

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
                    if ('\Fastly\Model\PathResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PathResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PathResponse';
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
                        '\Fastly\Model\PathResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDmRoutingConfigPathAsync
     *
     * Get a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigPathAsync($options)
    {
        return $this->getDmRoutingConfigPathAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDmRoutingConfigPathAsyncWithHttpInfo
     *
     * Get a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigPathAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PathResponse';
        $request = $this->getDmRoutingConfigPathRequest($options);

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
     * Create request for operation 'getDmRoutingConfigPath'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDmRoutingConfigPathRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling getDmRoutingConfigPath'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling getDmRoutingConfigPath'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
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
     * Operation getDmRoutingConfigRule
     *
     * Get a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     * @param  string $rule_id rule_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RuleResponse
     */
    public function getDmRoutingConfigRule($options)
    {
        list($response) = $this->getDmRoutingConfigRuleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getDmRoutingConfigRuleWithHttpInfo
     *
     * Get a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RuleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDmRoutingConfigRuleWithHttpInfo($options)
    {
        $request = $this->getDmRoutingConfigRuleRequest($options);

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
                    if ('\Fastly\Model\RuleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RuleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RuleResponse';
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
                        '\Fastly\Model\RuleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDmRoutingConfigRuleAsync
     *
     * Get a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigRuleAsync($options)
    {
        return $this->getDmRoutingConfigRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDmRoutingConfigRuleAsyncWithHttpInfo
     *
     * Get a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDmRoutingConfigRuleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RuleResponse';
        $request = $this->getDmRoutingConfigRuleRequest($options);

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
     * Create request for operation 'getDmRoutingConfigRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDmRoutingConfigRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;
        $rule_id = array_key_exists('rule_id', $options) ? $options['rule_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling getDmRoutingConfigRule'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling getDmRoutingConfigRule'
            );
        }
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null || (is_array($rule_id) && count($rule_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rule_id when calling getDmRoutingConfigRule'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
                $resourcePath
            );
        }
        // path params
        if ($rule_id !== null) {
            $resourcePath = str_replace(
                '{' . 'rule_id' . '}',
                ObjectSerializer::toPathValue($rule_id),
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
     * Operation listDmRoutingConfigPaths
     *
     * List paths
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path Filter results by path pattern. The match strategy is controlled by the &#x60;match&#x60; parameter. (optional)
     * @param  string $match How to match the value of the &#x60;path&#x60; filter against existing path patterns. Has no effect unless &#x60;path&#x60; is also provided. (optional, default to 'exact')
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\PathsResponse
     */
    public function listDmRoutingConfigPaths($options)
    {
        list($response) = $this->listDmRoutingConfigPathsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listDmRoutingConfigPathsWithHttpInfo
     *
     * List paths
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path Filter results by path pattern. The match strategy is controlled by the &#x60;match&#x60; parameter. (optional)
     * @param  string $match How to match the value of the &#x60;path&#x60; filter against existing path patterns. Has no effect unless &#x60;path&#x60; is also provided. (optional, default to 'exact')
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\PathsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listDmRoutingConfigPathsWithHttpInfo($options)
    {
        $request = $this->listDmRoutingConfigPathsRequest($options);

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
                    if ('\Fastly\Model\PathsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PathsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PathsResponse';
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
                        '\Fastly\Model\PathsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listDmRoutingConfigPathsAsync
     *
     * List paths
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path Filter results by path pattern. The match strategy is controlled by the &#x60;match&#x60; parameter. (optional)
     * @param  string $match How to match the value of the &#x60;path&#x60; filter against existing path patterns. Has no effect unless &#x60;path&#x60; is also provided. (optional, default to 'exact')
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigPathsAsync($options)
    {
        return $this->listDmRoutingConfigPathsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listDmRoutingConfigPathsAsyncWithHttpInfo
     *
     * List paths
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path Filter results by path pattern. The match strategy is controlled by the &#x60;match&#x60; parameter. (optional)
     * @param  string $match How to match the value of the &#x60;path&#x60; filter against existing path patterns. Has no effect unless &#x60;path&#x60; is also provided. (optional, default to 'exact')
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigPathsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PathsResponse';
        $request = $this->listDmRoutingConfigPathsRequest($options);

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
     * Create request for operation 'listDmRoutingConfigPaths'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path Filter results by path pattern. The match strategy is controlled by the &#x60;match&#x60; parameter. (optional)
     * @param  string $match How to match the value of the &#x60;path&#x60; filter against existing path patterns. Has no effect unless &#x60;path&#x60; is also provided. (optional, default to 'exact')
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listDmRoutingConfigPathsRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path = array_key_exists('path', $options) ? $options['path'] : null;
        $match = array_key_exists('match', $options) ? $options['match'] : 'exact';
        $sort = array_key_exists('sort', $options) ? $options['sort'] : '-created_at';
        $cursor = array_key_exists('cursor', $options) ? $options['cursor'] : null;
        $limit = array_key_exists('limit', $options) ? $options['limit'] : 20;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling listDmRoutingConfigPaths'
            );
        }
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling DmRoutingConfigsApi.listDmRoutingConfigPaths, must be smaller than or equal to 100.');
        }


        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($path !== null) {
            if('form' === 'form' && is_array($path)) {
                foreach($path as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['path'] = ObjectSerializer::toString($path);
            }
        }
        // query params
        if ($match !== null) {
            if('form' === 'form' && is_array($match)) {
                foreach($match as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['match'] = ObjectSerializer::toString($match);
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['sort'] = ObjectSerializer::toString($sort);
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['cursor'] = ObjectSerializer::toString($cursor);
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['limit'] = ObjectSerializer::toString($limit);
            }
        }


        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
     * Operation listDmRoutingConfigRules
     *
     * List rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to 'position')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RulesResponse
     */
    public function listDmRoutingConfigRules($options)
    {
        list($response) = $this->listDmRoutingConfigRulesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listDmRoutingConfigRulesWithHttpInfo
     *
     * List rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to 'position')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RulesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listDmRoutingConfigRulesWithHttpInfo($options)
    {
        $request = $this->listDmRoutingConfigRulesRequest($options);

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
                    if ('\Fastly\Model\RulesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RulesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RulesResponse';
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
                        '\Fastly\Model\RulesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listDmRoutingConfigRulesAsync
     *
     * List rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to 'position')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigRulesAsync($options)
    {
        return $this->listDmRoutingConfigRulesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listDmRoutingConfigRulesAsyncWithHttpInfo
     *
     * List rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to 'position')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigRulesAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RulesResponse';
        $request = $this->listDmRoutingConfigRulesRequest($options);

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
     * Create request for operation 'listDmRoutingConfigRules'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to 'position')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listDmRoutingConfigRulesRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : 'position';
        $cursor = array_key_exists('cursor', $options) ? $options['cursor'] : null;
        $limit = array_key_exists('limit', $options) ? $options['limit'] : 20;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling listDmRoutingConfigRules'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling listDmRoutingConfigRules'
            );
        }
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling DmRoutingConfigsApi.listDmRoutingConfigRules, must be smaller than or equal to 100.');
        }


        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['sort'] = ObjectSerializer::toString($sort);
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['cursor'] = ObjectSerializer::toString($cursor);
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['limit'] = ObjectSerializer::toString($limit);
            }
        }


        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
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
     * Operation listDmRoutingConfigVersions
     *
     * List versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to '-activated_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\VersionsResponse
     */
    public function listDmRoutingConfigVersions($options)
    {
        list($response) = $this->listDmRoutingConfigVersionsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listDmRoutingConfigVersionsWithHttpInfo
     *
     * List versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to '-activated_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\VersionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listDmRoutingConfigVersionsWithHttpInfo($options)
    {
        $request = $this->listDmRoutingConfigVersionsRequest($options);

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
                    if ('\Fastly\Model\VersionsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\VersionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\VersionsResponse';
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
                        '\Fastly\Model\VersionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listDmRoutingConfigVersionsAsync
     *
     * List versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to '-activated_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigVersionsAsync($options)
    {
        return $this->listDmRoutingConfigVersionsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listDmRoutingConfigVersionsAsyncWithHttpInfo
     *
     * List versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to '-activated_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigVersionsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\VersionsResponse';
        $request = $this->listDmRoutingConfigVersionsRequest($options);

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
     * Create request for operation 'listDmRoutingConfigVersions'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $sort The order in which to list the results. (optional, default to '-activated_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listDmRoutingConfigVersionsRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : '-activated_at';
        $cursor = array_key_exists('cursor', $options) ? $options['cursor'] : null;
        $limit = array_key_exists('limit', $options) ? $options['limit'] : 20;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling listDmRoutingConfigVersions'
            );
        }
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling DmRoutingConfigsApi.listDmRoutingConfigVersions, must be smaller than or equal to 100.');
        }


        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['sort'] = ObjectSerializer::toString($sort);
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['cursor'] = ObjectSerializer::toString($cursor);
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['limit'] = ObjectSerializer::toString($limit);
            }
        }


        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
     * Operation listDmRoutingConfigs
     *
     * List routing configs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string[] $state Filter configs by lifecycle state. Accepts a comma-separated list of state values (e.g. &#x60;?state&#x3D;active,active-with-draft&#x60;). Returns only configs whose current state matches one of the provided values. Returns 400 if any value is not a recognised state. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RoutingConfigsResponse
     */
    public function listDmRoutingConfigs($options)
    {
        list($response) = $this->listDmRoutingConfigsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listDmRoutingConfigsWithHttpInfo
     *
     * List routing configs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string[] $state Filter configs by lifecycle state. Accepts a comma-separated list of state values (e.g. &#x60;?state&#x3D;active,active-with-draft&#x60;). Returns only configs whose current state matches one of the provided values. Returns 400 if any value is not a recognised state. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RoutingConfigsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listDmRoutingConfigsWithHttpInfo($options)
    {
        $request = $this->listDmRoutingConfigsRequest($options);

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
                    if ('\Fastly\Model\RoutingConfigsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RoutingConfigsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RoutingConfigsResponse';
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
                        '\Fastly\Model\RoutingConfigsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listDmRoutingConfigsAsync
     *
     * List routing configs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string[] $state Filter configs by lifecycle state. Accepts a comma-separated list of state values (e.g. &#x60;?state&#x3D;active,active-with-draft&#x60;). Returns only configs whose current state matches one of the provided values. Returns 400 if any value is not a recognised state. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigsAsync($options)
    {
        return $this->listDmRoutingConfigsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listDmRoutingConfigsAsyncWithHttpInfo
     *
     * List routing configs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string[] $state Filter configs by lifecycle state. Accepts a comma-separated list of state values (e.g. &#x60;?state&#x3D;active,active-with-draft&#x60;). Returns only configs whose current state matches one of the provided values. Returns 400 if any value is not a recognised state. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listDmRoutingConfigsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RoutingConfigsResponse';
        $request = $this->listDmRoutingConfigsRequest($options);

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
     * Create request for operation 'listDmRoutingConfigs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string[] $state Filter configs by lifecycle state. Accepts a comma-separated list of state values (e.g. &#x60;?state&#x3D;active,active-with-draft&#x60;). Returns only configs whose current state matches one of the provided values. Returns 400 if any value is not a recognised state. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  int $limit Limit how many results are returned. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listDmRoutingConfigsRequest($options)
    {
        // unbox the parameters from the associative array
        $state = array_key_exists('state', $options) ? $options['state'] : null;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : '-created_at';
        $cursor = array_key_exists('cursor', $options) ? $options['cursor'] : null;
        $limit = array_key_exists('limit', $options) ? $options['limit'] : 20;

        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling DmRoutingConfigsApi.listDmRoutingConfigs, must be smaller than or equal to 100.');
        }


        $resourcePath = '/domain-management/v1/routing-configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($state)) {
            $state = ObjectSerializer::serializeCollection($state, 'form', true);
        }
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toString($state);
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['sort'] = ObjectSerializer::toString($sort);
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['cursor'] = ObjectSerializer::toString($cursor);
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['limit'] = ObjectSerializer::toString($limit);
            }
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
     * Operation reactivateDmRoutingConfigVersion
     *
     * Reactivate a version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $version_id version_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RoutingConfigVersionResponse
     */
    public function reactivateDmRoutingConfigVersion($options)
    {
        list($response) = $this->reactivateDmRoutingConfigVersionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation reactivateDmRoutingConfigVersionWithHttpInfo
     *
     * Reactivate a version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $version_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RoutingConfigVersionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function reactivateDmRoutingConfigVersionWithHttpInfo($options)
    {
        $request = $this->reactivateDmRoutingConfigVersionRequest($options);

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
                    if ('\Fastly\Model\RoutingConfigVersionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RoutingConfigVersionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RoutingConfigVersionResponse';
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
                        '\Fastly\Model\RoutingConfigVersionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reactivateDmRoutingConfigVersionAsync
     *
     * Reactivate a version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $version_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reactivateDmRoutingConfigVersionAsync($options)
    {
        return $this->reactivateDmRoutingConfigVersionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reactivateDmRoutingConfigVersionAsyncWithHttpInfo
     *
     * Reactivate a version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $version_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reactivateDmRoutingConfigVersionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RoutingConfigVersionResponse';
        $request = $this->reactivateDmRoutingConfigVersionRequest($options);

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
     * Create request for operation 'reactivateDmRoutingConfigVersion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $version_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reactivateDmRoutingConfigVersionRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling reactivateDmRoutingConfigVersion'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling reactivateDmRoutingConfigVersion'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/versions/{version_id}/activate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateDmRoutingConfigDraft
     *
     * Update the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  \Fastly\Model\DraftUpdate $draft_update draft_update (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RoutingConfigVersionResponse
     */
    public function updateDmRoutingConfigDraft($options)
    {
        list($response) = $this->updateDmRoutingConfigDraftWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateDmRoutingConfigDraftWithHttpInfo
     *
     * Update the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\DraftUpdate $draft_update (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RoutingConfigVersionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDmRoutingConfigDraftWithHttpInfo($options)
    {
        $request = $this->updateDmRoutingConfigDraftRequest($options);

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

            if ('PATCH' != 'GET' && 'PATCH' != 'HEAD') {
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
                    if ('\Fastly\Model\RoutingConfigVersionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RoutingConfigVersionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RoutingConfigVersionResponse';
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
                        '\Fastly\Model\RoutingConfigVersionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateDmRoutingConfigDraftAsync
     *
     * Update the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\DraftUpdate $draft_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDmRoutingConfigDraftAsync($options)
    {
        return $this->updateDmRoutingConfigDraftAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDmRoutingConfigDraftAsyncWithHttpInfo
     *
     * Update the draft
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\DraftUpdate $draft_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDmRoutingConfigDraftAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RoutingConfigVersionResponse';
        $request = $this->updateDmRoutingConfigDraftRequest($options);

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
     * Create request for operation 'updateDmRoutingConfigDraft'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  \Fastly\Model\DraftUpdate $draft_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateDmRoutingConfigDraftRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $draft_update = array_key_exists('draft_update', $options) ? $options['draft_update'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling updateDmRoutingConfigDraft'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/draft';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($draft_update)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($draft_update));
            } else {
                $httpBody = $draft_update;
            }
        } elseif (count($formParams) > 0) {
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
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateDmRoutingConfigPath
     *
     * Update a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     * @param  \Fastly\Model\PathUpdate $path_update path_update (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\PathResponse
     */
    public function updateDmRoutingConfigPath($options)
    {
        list($response) = $this->updateDmRoutingConfigPathWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateDmRoutingConfigPathWithHttpInfo
     *
     * Update a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\PathUpdate $path_update (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\PathResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDmRoutingConfigPathWithHttpInfo($options)
    {
        $request = $this->updateDmRoutingConfigPathRequest($options);

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

            if ('PATCH' != 'GET' && 'PATCH' != 'HEAD') {
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
                    if ('\Fastly\Model\PathResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PathResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PathResponse';
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
                        '\Fastly\Model\PathResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateDmRoutingConfigPathAsync
     *
     * Update a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\PathUpdate $path_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDmRoutingConfigPathAsync($options)
    {
        return $this->updateDmRoutingConfigPathAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDmRoutingConfigPathAsyncWithHttpInfo
     *
     * Update a path
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\PathUpdate $path_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDmRoutingConfigPathAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PathResponse';
        $request = $this->updateDmRoutingConfigPathRequest($options);

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
     * Create request for operation 'updateDmRoutingConfigPath'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  \Fastly\Model\PathUpdate $path_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateDmRoutingConfigPathRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;
        $path_update = array_key_exists('path_update', $options) ? $options['path_update'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling updateDmRoutingConfigPath'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling updateDmRoutingConfigPath'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($path_update)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($path_update));
            } else {
                $httpBody = $path_update;
            }
        } elseif (count($formParams) > 0) {
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
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateDmRoutingConfigRule
     *
     * Update a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id config_id (required)
     * @param  string $path_id path_id (required)
     * @param  string $rule_id rule_id (required)
     * @param  \Fastly\Model\RuleUpdate $rule_update rule_update (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\RuleResponse
     */
    public function updateDmRoutingConfigRule($options)
    {
        list($response) = $this->updateDmRoutingConfigRuleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateDmRoutingConfigRuleWithHttpInfo
     *
     * Update a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     * @param  \Fastly\Model\RuleUpdate $rule_update (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\RuleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDmRoutingConfigRuleWithHttpInfo($options)
    {
        $request = $this->updateDmRoutingConfigRuleRequest($options);

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

            if ('PATCH' != 'GET' && 'PATCH' != 'HEAD') {
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
                    if ('\Fastly\Model\RuleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\RuleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\RuleResponse';
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
                        '\Fastly\Model\RuleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateDmRoutingConfigRuleAsync
     *
     * Update a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     * @param  \Fastly\Model\RuleUpdate $rule_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDmRoutingConfigRuleAsync($options)
    {
        return $this->updateDmRoutingConfigRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDmRoutingConfigRuleAsyncWithHttpInfo
     *
     * Update a rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     * @param  \Fastly\Model\RuleUpdate $rule_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDmRoutingConfigRuleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\RuleResponse';
        $request = $this->updateDmRoutingConfigRuleRequest($options);

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
     * Create request for operation 'updateDmRoutingConfigRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $config_id (required)
     * @param  string $path_id (required)
     * @param  string $rule_id (required)
     * @param  \Fastly\Model\RuleUpdate $rule_update (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateDmRoutingConfigRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $config_id = array_key_exists('config_id', $options) ? $options['config_id'] : null;
        $path_id = array_key_exists('path_id', $options) ? $options['path_id'] : null;
        $rule_id = array_key_exists('rule_id', $options) ? $options['rule_id'] : null;
        $rule_update = array_key_exists('rule_update', $options) ? $options['rule_update'] : null;

        // verify the required parameter 'config_id' is set
        if ($config_id === null || (is_array($config_id) && count($config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $config_id when calling updateDmRoutingConfigRule'
            );
        }
        // verify the required parameter 'path_id' is set
        if ($path_id === null || (is_array($path_id) && count($path_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $path_id when calling updateDmRoutingConfigRule'
            );
        }
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null || (is_array($rule_id) && count($rule_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rule_id when calling updateDmRoutingConfigRule'
            );
        }

        $resourcePath = '/domain-management/v1/routing-configs/{config_id}/paths/{path_id}/rules/{rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'config_id' . '}',
                ObjectSerializer::toPathValue($config_id),
                $resourcePath
            );
        }
        // path params
        if ($path_id !== null) {
            $resourcePath = str_replace(
                '{' . 'path_id' . '}',
                ObjectSerializer::toPathValue($path_id),
                $resourcePath
            );
        }
        // path params
        if ($rule_id !== null) {
            $resourcePath = str_replace(
                '{' . 'rule_id' . '}',
                ObjectSerializer::toPathValue($rule_id),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($rule_update)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($rule_update));
            } else {
                $httpBody = $rule_update;
            }
        } elseif (count($formParams) > 0) {
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
            'PATCH',
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
