<?php
/**
 * TlsBulkCertificatesApi
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
 * TlsBulkCertificatesApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TlsBulkCertificatesApi
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
     * Operation deleteBulkTlsCert
     *
     * Delete a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteBulkTlsCert($options)
    {
        $this->deleteBulkTlsCertWithHttpInfo($options);
    }

    /**
     * Operation deleteBulkTlsCertWithHttpInfo
     *
     * Delete a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBulkTlsCertWithHttpInfo($options)
    {
        $request = $this->deleteBulkTlsCertRequest($options);

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
     * Operation deleteBulkTlsCertAsync
     *
     * Delete a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBulkTlsCertAsync($options)
    {
        return $this->deleteBulkTlsCertAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteBulkTlsCertAsyncWithHttpInfo
     *
     * Delete a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBulkTlsCertAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteBulkTlsCertRequest($options);

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
     * Create request for operation 'deleteBulkTlsCert'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteBulkTlsCertRequest($options)
    {
        // unbox the parameters from the associative array
        $certificate_id = array_key_exists('certificate_id', $options) ? $options['certificate_id'] : null;

        // verify the required parameter 'certificate_id' is set
        if ($certificate_id === null || (is_array($certificate_id) && count($certificate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $certificate_id when calling deleteBulkTlsCert'
            );
        }

        $resourcePath = '/tls/bulk/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($certificate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'certificate_id' . '}',
                ObjectSerializer::toPathValue($certificate_id),
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
     * Operation getTlsBulkCert
     *
     * Get a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsBulkCertificateResponse
     */
    public function getTlsBulkCert($options)
    {
        list($response) = $this->getTlsBulkCertWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getTlsBulkCertWithHttpInfo
     *
     * Get a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsBulkCertificateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTlsBulkCertWithHttpInfo($options)
    {
        $request = $this->getTlsBulkCertRequest($options);

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
                    if ('\Fastly\Model\TlsBulkCertificateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsBulkCertificateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsBulkCertificateResponse';
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
                        '\Fastly\Model\TlsBulkCertificateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTlsBulkCertAsync
     *
     * Get a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTlsBulkCertAsync($options)
    {
        return $this->getTlsBulkCertAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTlsBulkCertAsyncWithHttpInfo
     *
     * Get a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTlsBulkCertAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsBulkCertificateResponse';
        $request = $this->getTlsBulkCertRequest($options);

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
     * Create request for operation 'getTlsBulkCert'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTlsBulkCertRequest($options)
    {
        // unbox the parameters from the associative array
        $certificate_id = array_key_exists('certificate_id', $options) ? $options['certificate_id'] : null;

        // verify the required parameter 'certificate_id' is set
        if ($certificate_id === null || (is_array($certificate_id) && count($certificate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $certificate_id when calling getTlsBulkCert'
            );
        }

        $resourcePath = '/tls/bulk/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($certificate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'certificate_id' . '}',
                ObjectSerializer::toPathValue($certificate_id),
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
     * Operation listTlsBulkCerts
     *
     * List certificates
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_tls_domain_id_match Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsBulkCertificatesResponse
     */
    public function listTlsBulkCerts($options)
    {
        list($response) = $this->listTlsBulkCertsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listTlsBulkCertsWithHttpInfo
     *
     * List certificates
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_tls_domain_id_match Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsBulkCertificatesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTlsBulkCertsWithHttpInfo($options)
    {
        $request = $this->listTlsBulkCertsRequest($options);

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
                    if ('\Fastly\Model\TlsBulkCertificatesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsBulkCertificatesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsBulkCertificatesResponse';
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
                        '\Fastly\Model\TlsBulkCertificatesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listTlsBulkCertsAsync
     *
     * List certificates
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_tls_domain_id_match Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTlsBulkCertsAsync($options)
    {
        return $this->listTlsBulkCertsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listTlsBulkCertsAsyncWithHttpInfo
     *
     * List certificates
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_tls_domain_id_match Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listTlsBulkCertsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsBulkCertificatesResponse';
        $request = $this->listTlsBulkCertsRequest($options);

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
     * Create request for operation 'listTlsBulkCerts'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_tls_domain_id_match Filter certificates by their matching, fully-qualified domain name. Returns all partial matches. Must provide a value longer than 3 characters. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listTlsBulkCertsRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_tls_domain_id_match = array_key_exists('filter_tls_domain_id_match', $options) ? $options['filter_tls_domain_id_match'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : 'created_at';

        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling TlsBulkCertificatesApi.listTlsBulkCerts, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling TlsBulkCertificatesApi.listTlsBulkCerts, must be bigger than or equal to 1.');
        }


        $resourcePath = '/tls/bulk/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_tls_domain_id_match !== null) {
            if('form' === 'form' && is_array($filter_tls_domain_id_match)) {
                foreach($filter_tls_domain_id_match as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[tls_domain.id][match]'] = $filter_tls_domain_id_match;
            }
        }
        // query params
        if ($page_number !== null) {
            if('form' === 'form' && is_array($page_number)) {
                foreach($page_number as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page[number]'] = $page_number;
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page[size]'] = $page_size;
            }
        }
        // query params
        if ($sort !== null) {
            if('form' === 'form' && is_array($sort)) {
                foreach($sort as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sort'] = $sort;
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
     * Operation updateBulkTlsCert
     *
     * Update a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate tls_bulk_certificate (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsBulkCertificateResponse
     */
    public function updateBulkTlsCert($options)
    {
        list($response) = $this->updateBulkTlsCertWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateBulkTlsCertWithHttpInfo
     *
     * Update a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsBulkCertificateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBulkTlsCertWithHttpInfo($options)
    {
        $request = $this->updateBulkTlsCertRequest($options);

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
                    if ('\Fastly\Model\TlsBulkCertificateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsBulkCertificateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsBulkCertificateResponse';
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
                        '\Fastly\Model\TlsBulkCertificateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateBulkTlsCertAsync
     *
     * Update a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBulkTlsCertAsync($options)
    {
        return $this->updateBulkTlsCertAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateBulkTlsCertAsyncWithHttpInfo
     *
     * Update a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBulkTlsCertAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsBulkCertificateResponse';
        $request = $this->updateBulkTlsCertRequest($options);

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
     * Create request for operation 'updateBulkTlsCert'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $certificate_id Alphanumeric string identifying a TLS bulk certificate. (required)
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateBulkTlsCertRequest($options)
    {
        // unbox the parameters from the associative array
        $certificate_id = array_key_exists('certificate_id', $options) ? $options['certificate_id'] : null;
        $tls_bulk_certificate = array_key_exists('tls_bulk_certificate', $options) ? $options['tls_bulk_certificate'] : null;

        // verify the required parameter 'certificate_id' is set
        if ($certificate_id === null || (is_array($certificate_id) && count($certificate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $certificate_id when calling updateBulkTlsCert'
            );
        }

        $resourcePath = '/tls/bulk/certificates/{certificate_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($certificate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'certificate_id' . '}',
                ObjectSerializer::toPathValue($certificate_id),
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
        if (isset($tls_bulk_certificate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($tls_bulk_certificate));
            } else {
                $httpBody = $tls_bulk_certificate;
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
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation uploadTlsBulkCert
     *
     * Upload a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate tls_bulk_certificate (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\TlsBulkCertificateResponse
     */
    public function uploadTlsBulkCert($options)
    {
        list($response) = $this->uploadTlsBulkCertWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation uploadTlsBulkCertWithHttpInfo
     *
     * Upload a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\TlsBulkCertificateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadTlsBulkCertWithHttpInfo($options)
    {
        $request = $this->uploadTlsBulkCertRequest($options);

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
                    if ('\Fastly\Model\TlsBulkCertificateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\TlsBulkCertificateResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\TlsBulkCertificateResponse';
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
                        '\Fastly\Model\TlsBulkCertificateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadTlsBulkCertAsync
     *
     * Upload a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadTlsBulkCertAsync($options)
    {
        return $this->uploadTlsBulkCertAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadTlsBulkCertAsyncWithHttpInfo
     *
     * Upload a certificate
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadTlsBulkCertAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\TlsBulkCertificateResponse';
        $request = $this->uploadTlsBulkCertRequest($options);

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
     * Create request for operation 'uploadTlsBulkCert'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  \Fastly\Model\TlsBulkCertificate $tls_bulk_certificate (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uploadTlsBulkCertRequest($options)
    {
        // unbox the parameters from the associative array
        $tls_bulk_certificate = array_key_exists('tls_bulk_certificate', $options) ? $options['tls_bulk_certificate'] : null;


        $resourcePath = '/tls/bulk/certificates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
        if (isset($tls_bulk_certificate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($tls_bulk_certificate));
            } else {
                $httpBody = $tls_bulk_certificate;
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
