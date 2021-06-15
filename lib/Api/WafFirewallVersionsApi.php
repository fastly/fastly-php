<?php
/**
 * WafFirewallVersionsApi
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
 * WafFirewallVersionsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class WafFirewallVersionsApi
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
     * Operation cloneWafFirewallVersion
     *
     * Clone a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id firewall_id (required)
     * @param  int $firewall_version_number firewall_version_number (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafFirewallVersionResponse
     */
    public function cloneWafFirewallVersion($options)
    {
        list($response) = $this->cloneWafFirewallVersionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation cloneWafFirewallVersionWithHttpInfo
     *
     * Clone a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafFirewallVersionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cloneWafFirewallVersionWithHttpInfo($options)
    {
        $request = $this->cloneWafFirewallVersionRequest($options);

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
                    if ('\Fastly\Model\WafFirewallVersionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafFirewallVersionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafFirewallVersionResponse';
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
                        '\Fastly\Model\WafFirewallVersionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cloneWafFirewallVersionAsync
     *
     * Clone a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cloneWafFirewallVersionAsync($options)
    {
        return $this->cloneWafFirewallVersionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cloneWafFirewallVersionAsyncWithHttpInfo
     *
     * Clone a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cloneWafFirewallVersionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafFirewallVersionResponse';
        $request = $this->cloneWafFirewallVersionRequest($options);

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
     * Create request for operation 'cloneWafFirewallVersion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cloneWafFirewallVersionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling cloneWafFirewallVersion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling cloneWafFirewallVersion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}/clone';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Fastly-Key');
        if ($apiKey !== null) {
            $headers['Fastly-Key'] = $apiKey;
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
     * Operation createWafFirewallVersion
     *
     * Create a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id firewall_id (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version waf_firewall_version (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafFirewallVersionResponse
     */
    public function createWafFirewallVersion($options)
    {
        list($response) = $this->createWafFirewallVersionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createWafFirewallVersionWithHttpInfo
     *
     * Create a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafFirewallVersionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWafFirewallVersionWithHttpInfo($options)
    {
        $request = $this->createWafFirewallVersionRequest($options);

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
                case 201:
                    if ('\Fastly\Model\WafFirewallVersionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafFirewallVersionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafFirewallVersionResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\WafFirewallVersionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createWafFirewallVersionAsync
     *
     * Create a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createWafFirewallVersionAsync($options)
    {
        return $this->createWafFirewallVersionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createWafFirewallVersionAsyncWithHttpInfo
     *
     * Create a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createWafFirewallVersionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafFirewallVersionResponse';
        $request = $this->createWafFirewallVersionRequest($options);

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
     * Create request for operation 'createWafFirewallVersion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createWafFirewallVersionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $waf_firewall_version = array_key_exists('waf_firewall_version', $options) ? $options['waf_firewall_version'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling createWafFirewallVersion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
                ['application/vnd.api+json']
            );
        }

        // for model (json/xml)
        if (isset($waf_firewall_version)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($waf_firewall_version));
            } else {
                $httpBody = $waf_firewall_version;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Fastly-Key');
        if ($apiKey !== null) {
            $headers['Fastly-Key'] = $apiKey;
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
     * Operation deployActivateWafFirewallVersion
     *
     * Deploy or activate a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id firewall_id (required)
     * @param  int $firewall_version_number firewall_version_number (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function deployActivateWafFirewallVersion($options)
    {
        list($response) = $this->deployActivateWafFirewallVersionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deployActivateWafFirewallVersionWithHttpInfo
     *
     * Deploy or activate a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function deployActivateWafFirewallVersionWithHttpInfo($options)
    {
        $request = $this->deployActivateWafFirewallVersionRequest($options);

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
                case 202:
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
                case 202:
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
     * Operation deployActivateWafFirewallVersionAsync
     *
     * Deploy or activate a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deployActivateWafFirewallVersionAsync($options)
    {
        return $this->deployActivateWafFirewallVersionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deployActivateWafFirewallVersionAsyncWithHttpInfo
     *
     * Deploy or activate a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deployActivateWafFirewallVersionAsyncWithHttpInfo($options)
    {
        $returnType = 'object';
        $request = $this->deployActivateWafFirewallVersionRequest($options);

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
     * Create request for operation 'deployActivateWafFirewallVersion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deployActivateWafFirewallVersionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling deployActivateWafFirewallVersion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling deployActivateWafFirewallVersion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}/activate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Fastly-Key');
        if ($apiKey !== null) {
            $headers['Fastly-Key'] = $apiKey;
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
     * Operation getWafFirewallVersion
     *
     * Get a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id firewall_id (required)
     * @param  int $firewall_version_number firewall_version_number (required)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_firewall&#x60; and &#x60;waf_active_rules&#x60;. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafFirewallVersionResponse
     */
    public function getWafFirewallVersion($options)
    {
        list($response) = $this->getWafFirewallVersionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getWafFirewallVersionWithHttpInfo
     *
     * Get a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_firewall&#x60; and &#x60;waf_active_rules&#x60;. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafFirewallVersionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWafFirewallVersionWithHttpInfo($options)
    {
        $request = $this->getWafFirewallVersionRequest($options);

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
                    if ('\Fastly\Model\WafFirewallVersionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafFirewallVersionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafFirewallVersionResponse';
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
                        '\Fastly\Model\WafFirewallVersionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getWafFirewallVersionAsync
     *
     * Get a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_firewall&#x60; and &#x60;waf_active_rules&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWafFirewallVersionAsync($options)
    {
        return $this->getWafFirewallVersionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWafFirewallVersionAsyncWithHttpInfo
     *
     * Get a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_firewall&#x60; and &#x60;waf_active_rules&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getWafFirewallVersionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafFirewallVersionResponse';
        $request = $this->getWafFirewallVersionRequest($options);

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
     * Create request for operation 'getWafFirewallVersion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_firewall&#x60; and &#x60;waf_active_rules&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getWafFirewallVersionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;
        $include = array_key_exists('include', $options) ? $options['include'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling getWafFirewallVersion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling getWafFirewallVersion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include !== null) {
            if('form' === 'form' && is_array($include)) {
                foreach($include as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include'] = $include;
            }
        }


        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Fastly-Key');
        if ($apiKey !== null) {
            $headers['Fastly-Key'] = $apiKey;
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
     * Operation listWafFirewallVersions
     *
     * List firewall versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id firewall_id (required)
     * @param  string $include Include relationships. Optional. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafFirewallVersionsResponse
     */
    public function listWafFirewallVersions($options)
    {
        list($response) = $this->listWafFirewallVersionsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listWafFirewallVersionsWithHttpInfo
     *
     * List firewall versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  string $include Include relationships. Optional. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafFirewallVersionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWafFirewallVersionsWithHttpInfo($options)
    {
        $request = $this->listWafFirewallVersionsRequest($options);

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
                    if ('\Fastly\Model\WafFirewallVersionsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafFirewallVersionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafFirewallVersionsResponse';
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
                        '\Fastly\Model\WafFirewallVersionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listWafFirewallVersionsAsync
     *
     * List firewall versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  string $include Include relationships. Optional. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWafFirewallVersionsAsync($options)
    {
        return $this->listWafFirewallVersionsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listWafFirewallVersionsAsyncWithHttpInfo
     *
     * List firewall versions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  string $include Include relationships. Optional. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWafFirewallVersionsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafFirewallVersionsResponse';
        $request = $this->listWafFirewallVersionsRequest($options);

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
     * Create request for operation 'listWafFirewallVersions'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  string $include Include relationships. Optional. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listWafFirewallVersionsRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling listWafFirewallVersions'
            );
        }
        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafFirewallVersionsApi.listWafFirewallVersions, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafFirewallVersionsApi.listWafFirewallVersions, must be bigger than or equal to 1.');
        }


        $resourcePath = '/waf/firewalls/{firewall_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include !== null) {
            if('form' === 'form' && is_array($include)) {
                foreach($include as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include'] = $include;
            }
        }
        // query params
        if (is_array($page_number)) {
            $page_number = ObjectSerializer::serializeCollection($page_number, 'simple', true);
        }
        if ($page_number !== null) {
            $queryParams['page[number]'] = $page_number;
        }
        // query params
        if (is_array($page_size)) {
            $page_size = ObjectSerializer::serializeCollection($page_size, 'simple', true);
        }
        if ($page_size !== null) {
            $queryParams['page[size]'] = $page_size;
        }


        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Fastly-Key');
        if ($apiKey !== null) {
            $headers['Fastly-Key'] = $apiKey;
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
     * Operation updateWafFirewallVersion
     *
     * Update a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id firewall_id (required)
     * @param  int $firewall_version_number firewall_version_number (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version waf_firewall_version (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafFirewallVersionResponse
     */
    public function updateWafFirewallVersion($options)
    {
        list($response) = $this->updateWafFirewallVersionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateWafFirewallVersionWithHttpInfo
     *
     * Update a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafFirewallVersionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWafFirewallVersionWithHttpInfo($options)
    {
        $request = $this->updateWafFirewallVersionRequest($options);

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
                    if ('\Fastly\Model\WafFirewallVersionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafFirewallVersionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafFirewallVersionResponse';
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
                        '\Fastly\Model\WafFirewallVersionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateWafFirewallVersionAsync
     *
     * Update a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateWafFirewallVersionAsync($options)
    {
        return $this->updateWafFirewallVersionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateWafFirewallVersionAsyncWithHttpInfo
     *
     * Update a firewall version
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateWafFirewallVersionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafFirewallVersionResponse';
        $request = $this->updateWafFirewallVersionRequest($options);

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
     * Create request for operation 'updateWafFirewallVersion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $firewall_id (required)
     * @param  int $firewall_version_number (required)
     * @param  \Fastly\Model\WafFirewallVersion $waf_firewall_version (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateWafFirewallVersionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;
        $waf_firewall_version = array_key_exists('waf_firewall_version', $options) ? $options['waf_firewall_version'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling updateWafFirewallVersion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling updateWafFirewallVersion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.api+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.api+json'],
                ['application/vnd.api+json']
            );
        }

        // for model (json/xml)
        if (isset($waf_firewall_version)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($waf_firewall_version));
            } else {
                $httpBody = $waf_firewall_version;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Fastly-Key');
        if ($apiKey !== null) {
            $headers['Fastly-Key'] = $apiKey;
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
            'PATCH',
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
