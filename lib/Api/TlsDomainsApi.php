<?php
/**
 * TlsDomainsApi
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
 * TlsDomainsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TlsDomainsApi
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
     * Operation listTlsDomains
     *
     * List TLS domains
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_in_use Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \&quot;in use\&quot;) Permitted values: true, false. (optional)
     * @param  string $filter_tls_certificates_id Optional. Limit the returned domains to those listed in the given TLS certificate&#39;s SAN list. (optional)
     * @param  string $filter_tls_subscriptions_id Optional. Limit the returned domains to those for a given TLS subscription. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;, &#x60;tls_certificates&#x60;, &#x60;tls_subscriptions&#x60;, &#x60;tls_subscriptions.tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, and &#x60;tls_authorizations.self_managed_http_challenge&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to 'id')
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsDomainsResponse
     */
    public function listTlsDomains($options)
    {
        list($response) = $this->listTlsDomainsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listTlsDomainsWithHttpInfo
     *
     * List TLS domains
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_in_use Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \&quot;in use\&quot;) Permitted values: true, false. (optional)
     * @param  string $filter_tls_certificates_id Optional. Limit the returned domains to those listed in the given TLS certificate&#39;s SAN list. (optional)
     * @param  string $filter_tls_subscriptions_id Optional. Limit the returned domains to those for a given TLS subscription. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;, &#x60;tls_certificates&#x60;, &#x60;tls_subscriptions&#x60;, &#x60;tls_subscriptions.tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, and &#x60;tls_authorizations.self_managed_http_challenge&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to 'id')
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsDomainsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTlsDomainsWithHttpInfo($options)
    {
        $request = $this->listTlsDomainsRequest($options);

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
                    if ('\Fastly\Model\TlsDomainsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsDomainsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsDomainsResponse';
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
                        '\Fastly\Model\TlsDomainsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTlsDomainsAsync
     *
     * List TLS domains
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_in_use Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \&quot;in use\&quot;) Permitted values: true, false. (optional)
     * @param  string $filter_tls_certificates_id Optional. Limit the returned domains to those listed in the given TLS certificate&#39;s SAN list. (optional)
     * @param  string $filter_tls_subscriptions_id Optional. Limit the returned domains to those for a given TLS subscription. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;, &#x60;tls_certificates&#x60;, &#x60;tls_subscriptions&#x60;, &#x60;tls_subscriptions.tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, and &#x60;tls_authorizations.self_managed_http_challenge&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to 'id')
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTlsDomainsAsync($options)
    {
        return $this->listTlsDomainsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTlsDomainsAsyncWithHttpInfo
     *
     * List TLS domains
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_in_use Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \&quot;in use\&quot;) Permitted values: true, false. (optional)
     * @param  string $filter_tls_certificates_id Optional. Limit the returned domains to those listed in the given TLS certificate&#39;s SAN list. (optional)
     * @param  string $filter_tls_subscriptions_id Optional. Limit the returned domains to those for a given TLS subscription. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;, &#x60;tls_certificates&#x60;, &#x60;tls_subscriptions&#x60;, &#x60;tls_subscriptions.tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, and &#x60;tls_authorizations.self_managed_http_challenge&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to 'id')
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTlsDomainsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsDomainsResponse';
        $request = $this->listTlsDomainsRequest($options);

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
     * Create request for operation 'listTlsDomains'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_in_use Optional. Limit the returned domains to those currently using Fastly to terminate TLS with SNI (that is, domains considered \&quot;in use\&quot;) Permitted values: true, false. (optional)
     * @param  string $filter_tls_certificates_id Optional. Limit the returned domains to those listed in the given TLS certificate&#39;s SAN list. (optional)
     * @param  string $filter_tls_subscriptions_id Optional. Limit the returned domains to those for a given TLS subscription. (optional)
     * @param  string $include Include related objects. Optional, comma-separated values. Permitted values: &#x60;tls_activations&#x60;, &#x60;tls_certificates&#x60;, &#x60;tls_subscriptions&#x60;, &#x60;tls_subscriptions.tls_authorizations&#x60;, &#x60;tls_authorizations.globalsign_email_challenge&#x60;, and &#x60;tls_authorizations.self_managed_http_challenge&#x60;. (optional)
     * @param  string $sort The order in which to list the results. (optional, default to 'id')
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTlsDomainsRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_in_use = array_key_exists('filter_in_use', $options) ? $options['filter_in_use'] : null;
        $filter_tls_certificates_id = array_key_exists('filter_tls_certificates_id', $options) ? $options['filter_tls_certificates_id'] : null;
        $filter_tls_subscriptions_id = array_key_exists('filter_tls_subscriptions_id', $options) ? $options['filter_tls_subscriptions_id'] : null;
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : 'id';
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;

        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling TlsDomainsApi.listTlsDomains, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling TlsDomainsApi.listTlsDomains, must be bigger than or equal to 1.');
        }


        $resourcePath = '/tls/domains';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_in_use !== null) {
            if('form' === 'form' && is_array($filter_in_use)) {
                foreach($filter_in_use as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[in_use]'] = ObjectSerializer::toString($filter_in_use);
            }
        }
        // query params
        if ($filter_tls_certificates_id !== null) {
            if('form' === 'form' && is_array($filter_tls_certificates_id)) {
                foreach($filter_tls_certificates_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[tls_certificates.id]'] = ObjectSerializer::toString($filter_tls_certificates_id);
            }
        }
        // query params
        if ($filter_tls_subscriptions_id !== null) {
            if('form' === 'form' && is_array($filter_tls_subscriptions_id)) {
                foreach($filter_tls_subscriptions_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[tls_subscriptions.id]'] = ObjectSerializer::toString($filter_tls_subscriptions_id);
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
