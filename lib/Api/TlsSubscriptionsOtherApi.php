<?php
/**
 * TlsSubscriptionsOtherApi
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
 * TlsSubscriptionsOtherApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TlsSubscriptionsOtherApi
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
     * Operation deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id tls_subscription_id (required)
     * @param  string $globalsign_email_challenge_id globalsign_email_challenge_id (required)
     * @param  string $tls_authorization_id tls_authorization_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId($options)
    {
        $this->deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdWithHttpInfo($options);
    }

    /**
     * Operation deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdWithHttpInfo
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $globalsign_email_challenge_id (required)
     * @param  string $tls_authorization_id (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdWithHttpInfo($options)
    {
        $request = $this->deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdRequest($options);

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
     * Operation deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdAsync
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $globalsign_email_challenge_id (required)
     * @param  string $tls_authorization_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdAsync($options)
    {
        return $this->deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdAsyncWithHttpInfo
     *
     * Delete a GlobalSign email challenge
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $globalsign_email_challenge_id (required)
     * @param  string $tls_authorization_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdRequest($options);

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
     * Create request for operation 'deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $globalsign_email_challenge_id (required)
     * @param  string $tls_authorization_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeIdRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;
        $globalsign_email_challenge_id = array_key_exists('globalsign_email_challenge_id', $options) ? $options['globalsign_email_challenge_id'] : null;
        $tls_authorization_id = array_key_exists('tls_authorization_id', $options) ? $options['tls_authorization_id'] : null;

        // verify the required parameter 'tls_subscription_id' is set
        if ($tls_subscription_id === null || (is_array($tls_subscription_id) && count($tls_subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_subscription_id when calling deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId'
            );
        }
        // verify the required parameter 'globalsign_email_challenge_id' is set
        if ($globalsign_email_challenge_id === null || (is_array($globalsign_email_challenge_id) && count($globalsign_email_challenge_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $globalsign_email_challenge_id when calling deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId'
            );
        }
        // verify the required parameter 'tls_authorization_id' is set
        if ($tls_authorization_id === null || (is_array($tls_authorization_id) && count($tls_authorization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_authorization_id when calling deleteTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesGlobalsignEmailChallengeId'
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
        if ($globalsign_email_challenge_id !== null) {
            $resourcePath = str_replace(
                '{' . 'globalsign_email_challenge_id' . '}',
                ObjectSerializer::toPathValue($globalsign_email_challenge_id),
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
     * Operation postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id tls_subscription_id (required)
     * @param  string $tls_authorization_id tls_authorization_id (required)
     * @param  object $body body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges($options)
    {
        list($response) = $this->postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesWithHttpInfo
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $tls_authorization_id (required)
     * @param  object $body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesWithHttpInfo($options)
    {
        $request = $this->postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesRequest($options);

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
     * Operation postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesAsync
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $tls_authorization_id (required)
     * @param  object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesAsync($options)
    {
        return $this->postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesAsyncWithHttpInfo
     *
     * Creates a GlobalSign email challenge.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $tls_authorization_id (required)
     * @param  object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesAsyncWithHttpInfo($options)
    {
        $returnType = 'object';
        $request = $this->postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesRequest($options);

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
     * Create request for operation 'postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $tls_subscription_id (required)
     * @param  string $tls_authorization_id (required)
     * @param  object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallengesRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_subscription_id = array_key_exists('tls_subscription_id', $options) ? $options['tls_subscription_id'] : null;
        $tls_authorization_id = array_key_exists('tls_authorization_id', $options) ? $options['tls_authorization_id'] : null;
        $body = array_key_exists('body', $options) ? $options['body'] : null;

        // verify the required parameter 'tls_subscription_id' is set
        if ($tls_subscription_id === null || (is_array($tls_subscription_id) && count($tls_subscription_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_subscription_id when calling postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges'
            );
        }
        // verify the required parameter 'tls_authorization_id' is set
        if ($tls_authorization_id === null || (is_array($tls_authorization_id) && count($tls_authorization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tls_authorization_id when calling postTlsSubscriptionsTlsSubscriptionIdAuthorizationsTlsAuthorizationIdGlobalsignEmailChallenges'
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
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
