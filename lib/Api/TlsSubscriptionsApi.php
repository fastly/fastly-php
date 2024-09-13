<?php
/**
 * TlsSubscriptionsApi
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
     * Operation createGlobalsignEmailChallenge
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  array<string,object> $request_body request_body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function createGlobalsignEmailChallenge($options)
    {
        list($response) = $this->createGlobalsignEmailChallengeWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createGlobalsignEmailChallengeWithHttpInfo
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGlobalsignEmailChallengeWithHttpInfo($options)
    {
        $request = $this->createGlobalsignEmailChallengeRequest($options);

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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
     * Operation createGlobalsignEmailChallengeAsync
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGlobalsignEmailChallengeAsync($options)
    {
        return $this->createGlobalsignEmailChallengeAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createGlobalsignEmailChallengeAsyncWithHttpInfo
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createGlobalsignEmailChallengeAsyncWithHttpInfo($options)
    {
        $returnType = 'object';
        $request = $this->createGlobalsignEmailChallengeRequest($options);

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
     * Create request for operation 'createGlobalsignEmailChallenge'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createGlobalsignEmailChallengeRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;
        $tls_authorization_id = array_key_exists('tls_authorization_id', $options) ? $options['tls_authorization_id'] : null;
        $request_body = array_key_exists('request_body', $options) ? $options['request_body'] : null;

        // verify the required parameter 'tls_subscription_id' is set
        if ($tls_subscription_id === null || (is_array($tls_subscription_id) && count($tls_subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_subscription_id when calling createGlobalsignEmailChallenge'
            );
        }
        // verify the required parameter 'tls_authorization_id' is set
        if ($tls_authorization_id === null || (is_array($tls_authorization_id) && count($tls_authorization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_authorization_id when calling createGlobalsignEmailChallenge'
            );
        }

        $resourcePath = '/tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges';
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
        // path params
        if ($tls_authorization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tls_authorization_id' . '}',
                ObjectSerializer::toPathValue($tls_authorization_id),
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
                ['application/vnd.api+json']
            );
        }

        // for model (json/xml)
        if (isset($request_body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($request_body));
            } else {
                $httpBody = $request_body;
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
     * Operation createTlsSub
     *
     * Create a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
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
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
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
                    if ('\Fastly\Model\TlsSubscriptionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionResponse';
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
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
     * Create request for operation 'createTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
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
            $queryParams['force'] = ObjectSerializer::toString($force);
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
     * Operation deleteGlobalsignEmailChallenge
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $globalsign_email_challenge_id Alphanumeric string identifying a GlobalSign email challenge. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteGlobalsignEmailChallenge($options)
    {
        $this->deleteGlobalsignEmailChallengeWithHttpInfo($options);
    }

    /**
     * Operation deleteGlobalsignEmailChallengeWithHttpInfo
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $globalsign_email_challenge_id Alphanumeric string identifying a GlobalSign email challenge. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGlobalsignEmailChallengeWithHttpInfo($options)
    {
        $request = $this->deleteGlobalsignEmailChallengeRequest($options);

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
     * Operation deleteGlobalsignEmailChallengeAsync
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $globalsign_email_challenge_id Alphanumeric string identifying a GlobalSign email challenge. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGlobalsignEmailChallengeAsync($options)
    {
        return $this->deleteGlobalsignEmailChallengeAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGlobalsignEmailChallengeAsyncWithHttpInfo
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $globalsign_email_challenge_id Alphanumeric string identifying a GlobalSign email challenge. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteGlobalsignEmailChallengeAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteGlobalsignEmailChallengeRequest($options);

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
     * Create request for operation 'deleteGlobalsignEmailChallenge'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $tls_authorization_id Alphanumeric string identifying a TLS subscription. (required)
     * @param  string $globalsign_email_challenge_id Alphanumeric string identifying a GlobalSign email challenge. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteGlobalsignEmailChallengeRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;
        $tls_authorization_id = array_key_exists('tls_authorization_id', $options) ? $options['tls_authorization_id'] : null;
        $globalsign_email_challenge_id = array_key_exists('globalsign_email_challenge_id', $options) ? $options['globalsign_email_challenge_id'] : null;

        // verify the required parameter 'tls_subscription_id' is set
        if ($tls_subscription_id === null || (is_array($tls_subscription_id) && count($tls_subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_subscription_id when calling deleteGlobalsignEmailChallenge'
            );
        }
        // verify the required parameter 'tls_authorization_id' is set
        if ($tls_authorization_id === null || (is_array($tls_authorization_id) && count($tls_authorization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_authorization_id when calling deleteGlobalsignEmailChallenge'
            );
        }
        // verify the required parameter 'globalsign_email_challenge_id' is set
        if ($globalsign_email_challenge_id === null || (is_array($globalsign_email_challenge_id) && count($globalsign_email_challenge_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $globalsign_email_challenge_id when calling deleteGlobalsignEmailChallenge'
            );
        }

        $resourcePath = '/tls/subscriptions/{tls_subscription_id}/authorizations/{tls_authorization_id}/globalsign_email_challenges/{globalsign_email_challenge_id}';
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
        // path params
        if ($tls_authorization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tls_authorization_id' . '}',
                ObjectSerializer::toPathValue($tls_authorization_id),
                $resourcePath
            );
        }
        // path params
        if ($globalsign_email_challenge_id !== null) {
            $resourcePath = str_replace(
                '{' . 'globalsign_email_challenge_id' . '}',
                ObjectSerializer::toPathValue($globalsign_email_challenge_id),
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
     * Operation deleteTlsSub
     *
     * Delete a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * Operation deleteTlsSubAsync
     *
     * Delete a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * Operation getTlsSub
     *
     * Get a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
                    if ('\Fastly\Model\TlsSubscriptionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionResponse';
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * Create request for operation 'getTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTlsSubRequest($options)
    {
        // unbox the parameters from the associative array
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;

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
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['include'] = ObjectSerializer::toString($include);
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
     * Operation listTlsSubs
     *
     * List TLS subscriptions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;issued&#x60;, &#x60;renewing&#x60;, and &#x60;failed&#x60;. Accepts parameters: &#x60;not&#x60; (e.g., &#x60;filter[state][not]&#x3D;renewing&#x60;). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  bool $filter_has_active_order Limit the returned subscriptions to those that have currently active orders. Permitted values: &#x60;true&#x60;. (optional)
     * @param  string $filter_certificate_authority Limit the returned subscriptions to a specific certification authority. Values may include &#x60;certainly&#x60;, &#x60;lets-encrypt&#x60;, or &#x60;globalsign&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
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
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;issued&#x60;, &#x60;renewing&#x60;, and &#x60;failed&#x60;. Accepts parameters: &#x60;not&#x60; (e.g., &#x60;filter[state][not]&#x3D;renewing&#x60;). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  bool $filter_has_active_order Limit the returned subscriptions to those that have currently active orders. Permitted values: &#x60;true&#x60;. (optional)
     * @param  string $filter_certificate_authority Limit the returned subscriptions to a specific certification authority. Values may include &#x60;certainly&#x60;, &#x60;lets-encrypt&#x60;, or &#x60;globalsign&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
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
                    if ('\Fastly\Model\TlsSubscriptionsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionsResponse';
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;issued&#x60;, &#x60;renewing&#x60;, and &#x60;failed&#x60;. Accepts parameters: &#x60;not&#x60; (e.g., &#x60;filter[state][not]&#x3D;renewing&#x60;). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  bool $filter_has_active_order Limit the returned subscriptions to those that have currently active orders. Permitted values: &#x60;true&#x60;. (optional)
     * @param  string $filter_certificate_authority Limit the returned subscriptions to a specific certification authority. Values may include &#x60;certainly&#x60;, &#x60;lets-encrypt&#x60;, or &#x60;globalsign&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;issued&#x60;, &#x60;renewing&#x60;, and &#x60;failed&#x60;. Accepts parameters: &#x60;not&#x60; (e.g., &#x60;filter[state][not]&#x3D;renewing&#x60;). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  bool $filter_has_active_order Limit the returned subscriptions to those that have currently active orders. Permitted values: &#x60;true&#x60;. (optional)
     * @param  string $filter_certificate_authority Limit the returned subscriptions to a specific certification authority. Values may include &#x60;certainly&#x60;, &#x60;lets-encrypt&#x60;, or &#x60;globalsign&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
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
     * Create request for operation 'listTlsSubs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_state Limit the returned subscriptions by state. Valid values are &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;issued&#x60;, &#x60;renewing&#x60;, and &#x60;failed&#x60;. Accepts parameters: &#x60;not&#x60; (e.g., &#x60;filter[state][not]&#x3D;renewing&#x60;). (optional)
     * @param  string $filter_tls_domains_id Limit the returned subscriptions to those that include the specific domain. (optional)
     * @param  bool $filter_has_active_order Limit the returned subscriptions to those that have currently active orders. Permitted values: &#x60;true&#x60;. (optional)
     * @param  string $filter_certificate_authority Limit the returned subscriptions to a specific certification authority. Values may include &#x60;certainly&#x60;, &#x60;lets-encrypt&#x60;, or &#x60;globalsign&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to '-created_at')
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, &#x60;tls_authorizations.self_managed_http_challenge&#x60;, and &#x60;tls_certificates&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTlsSubsRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_state = array_key_exists('filter_state', $options) ? $options['filter_state'] : null;
        $filter_tls_domains_id = array_key_exists('filter_tls_domains_id', $options) ? $options['filter_tls_domains_id'] : null;
        $filter_has_active_order = array_key_exists('filter_has_active_order', $options) ? $options['filter_has_active_order'] : null;
        $filter_certificate_authority = array_key_exists('filter_certificate_authority', $options) ? $options['filter_certificate_authority'] : null;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : '-created_at';
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;

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
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[state]'] = ObjectSerializer::toString($filter_state);
            }
        }
        // query params
        if ($filter_tls_domains_id !== null) {
            if('form' === 'form' && is_array($filter_tls_domains_id)) {
                foreach($filter_tls_domains_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[tls_domains.id]'] = ObjectSerializer::toString($filter_tls_domains_id);
            }
        }
        // query params
        if ($filter_has_active_order !== null) {
            if('form' === 'form' && is_array($filter_has_active_order)) {
                foreach($filter_has_active_order as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[has_active_order]'] = ObjectSerializer::toString($filter_has_active_order);
            }
        }
        // query params
        if ($filter_certificate_authority !== null) {
            if('form' === 'form' && is_array($filter_certificate_authority)) {
                foreach($filter_certificate_authority as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[certificate_authority]'] = ObjectSerializer::toString($filter_certificate_authority);
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
        if ($include !== null) {
            if('form' === 'form' && is_array($include)) {
                foreach($include as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['include'] = ObjectSerializer::toString($include);
            }
        }
        // query params
        if ($page_number !== null) {
            if('form' === 'form' && is_array($page_number)) {
                foreach($page_number as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['page[number]'] = ObjectSerializer::toString($page_number);
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['page[size]'] = ObjectSerializer::toString($page_size);
            }
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
     * Operation patchTlsSub
     *
     * Update a TLS subscription
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
                    if ('\Fastly\Model\TlsSubscriptionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsSubscriptionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsSubscriptionResponse';
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
     * Create request for operation 'patchTlsSub'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $tls_subscription_id Alphanumeric string identifying a TLS subscription. (required)
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
            $queryParams['force'] = ObjectSerializer::toString($force);
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
