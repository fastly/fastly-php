<?php
/**
 * TlsSubscriptionsApi
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
 * TlsSubscriptionsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TlsSubscriptionsApi
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
     * Operation createTlsSub
     *
     * Create a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription tls_subscription (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsSubscriptionResponse
     */
    public function createTlsSub($options)
    {
        list($response) = $this->createTlsSubWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createTlsSubWithHttpInfo
     *
     * Create a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTlsSubWithHttpInfo($options)
    {
        $request = $this->createTlsSubRequest($options);

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
                    if ('\Fastly\Model\TlsSubscriptionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionResponse';
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
                        '\Fastly\Model\TlsSubscriptionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTlsSubAsync
     *
     * Create a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTlsSubAsync($options)
    {
        return $this->createTlsSubAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTlsSubAsyncWithHttpInfo
     *
     * Create a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTlsSubAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsSubscriptionResponse';
        $request = $this->createTlsSubRequest($options);

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
     * Create request for operation 'createTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createTlsSubRequest($options)
    {
        // unbox the parameters from the associative array
        $force = array_key_exists('force', $options) ? $options['force'] : null;
        $tls_subscription = array_key_exists('tls_subscription', $options) ? $options['tls_subscription'] : null;


        $resourcePath = '/tls/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($force)) {
            $force = ObjectSerializer::serializeCollection($force, 'form', true);
        }
        if ($force !== null) {
            $queryParams['force'] = $force;
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
        if (isset($tls_subscription)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($tls_subscription));
            } else {
                $httpBody = $tls_subscription;
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
     * Operation deleteTlsSub
     *
     * Delete a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id tls_subscription_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteTlsSub($options)
    {
        $this->deleteTlsSubWithHttpInfo($options);
    }

    /**
     * Operation deleteTlsSubWithHttpInfo
     *
     * Delete a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTlsSubWithHttpInfo($options)
    {
        $request = $this->deleteTlsSubRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteTlsSubAsync
     *
     * Delete a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTlsSubAsync($options)
    {
        return $this->deleteTlsSubAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteTlsSubAsyncWithHttpInfo
     *
     * Delete a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTlsSubAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteTlsSubRequest($options);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteTlsSubRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;

        // verify the required parameter 'tls_subscription_id' is set
        if ($tls_subscription_id === null || (is_array($tls_subscription_id) && count($tls_subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_subscription_id when calling deleteTlsSub'
            );
        }

        $resourcePath = '/tls/subscriptions/{tls_subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($tls_subscription_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tls_subscription_id' . '}',
                ObjectSerializer::toPathValue($tls_subscription_id),
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTlsSub
     *
     * Get a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id tls_subscription_id (required)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsSubscriptionResponse
     */
    public function getTlsSub($options)
    {
        list($response) = $this->getTlsSubWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getTlsSubWithHttpInfo
     *
     * Get a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTlsSubWithHttpInfo($options)
    {
        $request = $this->getTlsSubRequest($options);

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
                    if ('\Fastly\Model\TlsSubscriptionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionResponse';
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
                        '\Fastly\Model\TlsSubscriptionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTlsSubAsync
     *
     * Get a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTlsSubAsync($options)
    {
        return $this->getTlsSubAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTlsSubAsyncWithHttpInfo
     *
     * Get a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTlsSubAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsSubscriptionResponse';
        $request = $this->getTlsSubRequest($options);

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
     * Create request for operation 'getTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTlsSubRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;
        $include = array_key_exists('include', $options) ? $options['include'] : null;

        // verify the required parameter 'tls_subscription_id' is set
        if ($tls_subscription_id === null || (is_array($tls_subscription_id) && count($tls_subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_subscription_id when calling getTlsSub'
            );
        }

        $resourcePath = '/tls/subscriptions/{tls_subscription_id}';
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
        if ($tls_subscription_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tls_subscription_id' . '}',
                ObjectSerializer::toPathValue($tls_subscription_id),
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
     * Operation listTlsSubs
     *
     * List TLS subscriptions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]&#x3D;renewing). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsSubscriptionsResponse
     */
    public function listTlsSubs($options)
    {
        list($response) = $this->listTlsSubsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listTlsSubsWithHttpInfo
     *
     * List TLS subscriptions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]&#x3D;renewing). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsSubscriptionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTlsSubsWithHttpInfo($options)
    {
        $request = $this->listTlsSubsRequest($options);

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
                    if ('\Fastly\Model\TlsSubscriptionsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionsResponse';
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
                        '\Fastly\Model\TlsSubscriptionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTlsSubsAsync
     *
     * List TLS subscriptions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]&#x3D;renewing). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTlsSubsAsync($options)
    {
        return $this->listTlsSubsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTlsSubsAsyncWithHttpInfo
     *
     * List TLS subscriptions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]&#x3D;renewing). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTlsSubsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsSubscriptionsResponse';
        $request = $this->listTlsSubsRequest($options);

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
     * Create request for operation 'listTlsSubs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are pending, processing, issued, and renewing. Accepts parameters: not (e.g., filter[state][not]&#x3D;renewing). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTlsSubsRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_state = array_key_exists('filter_state', $options) ? $options['filter_state'] : null;
        $filter_tls_domains_id = array_key_exists('filter_tls_domains_id', $options) ? $options['filter_tls_domains_id'] : null;
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : 'created_at';

        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling TlsSubscriptionsApi.listTlsSubs, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling TlsSubscriptionsApi.listTlsSubs, must be bigger than or equal to 1.');
        }


        $resourcePath = '/tls/subscriptions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_state !== null) {
            if('form' === 'form' && is_array($filter_state)) {
                foreach($filter_state as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[state]'] = $filter_state;
            }
        }
        // query params
        if ($filter_tls_domains_id !== null) {
            if('form' === 'form' && is_array($filter_tls_domains_id)) {
                foreach($filter_tls_domains_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[tls_domains.id]'] = $filter_tls_domains_id;
            }
        }
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
        // query params
        if (is_array($sort)) {
            $sort = ObjectSerializer::serializeCollection($sort, 'simple', true);
        }
        if ($sort !== null) {
            $queryParams['sort'] = $sort;
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
     * Operation patchTlsSub
     *
     * Update a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id tls_subscription_id (required)
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription tls_subscription (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsSubscriptionResponse
     */
    public function patchTlsSub($options)
    {
        list($response) = $this->patchTlsSubWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation patchTlsSubWithHttpInfo
     *
     * Update a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchTlsSubWithHttpInfo($options)
    {
        $request = $this->patchTlsSubRequest($options);

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
                    if ('\Fastly\Model\TlsSubscriptionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionResponse';
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
                        '\Fastly\Model\TlsSubscriptionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchTlsSubAsync
     *
     * Update a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchTlsSubAsync($options)
    {
        return $this->patchTlsSubAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchTlsSubAsyncWithHttpInfo
     *
     * Update a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchTlsSubAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsSubscriptionResponse';
        $request = $this->patchTlsSubRequest($options);

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
     * Create request for operation 'patchTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  bool $force A flag that allows you to edit and delete a subscription with active domains. Valid to use on PATCH and DELETE actions. As a warning, removing an active domain from a subscription or forcing the deletion of a subscription may result in breaking TLS termination to that domain. (optional)
     * @param  \Fastly\Model\TlsSubscription $tls_subscription (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchTlsSubRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;
        $force = array_key_exists('force', $options) ? $options['force'] : null;
        $tls_subscription = array_key_exists('tls_subscription', $options) ? $options['tls_subscription'] : null;

        // verify the required parameter 'tls_subscription_id' is set
        if ($tls_subscription_id === null || (is_array($tls_subscription_id) && count($tls_subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_subscription_id when calling patchTlsSub'
            );
        }

        $resourcePath = '/tls/subscriptions/{tls_subscription_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($force)) {
            $force = ObjectSerializer::serializeCollection($force, 'form', true);
        }
        if ($force !== null) {
            $queryParams['force'] = $force;
        }


        // path params
        if ($tls_subscription_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tls_subscription_id' . '}',
                ObjectSerializer::toPathValue($tls_subscription_id),
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
        if (isset($tls_subscription)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($tls_subscription));
            } else {
                $httpBody = $tls_subscription;
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
