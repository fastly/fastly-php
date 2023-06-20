<?php
/**
 * CustomerApi
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
 * CustomerApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class CustomerApi
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
     * Operation deleteCustomer
     *
     * Delete a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteCustomer($options)
    {
        list($response) = $this->deleteCustomerWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteCustomerWithHttpInfo
     *
     * Delete a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomerWithHttpInfo($options)
    {
        $request = $this->deleteCustomerRequest($options);

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
     * Operation deleteCustomerAsync
     *
     * Delete a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCustomerAsync($options)
    {
        return $this->deleteCustomerAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteCustomerAsyncWithHttpInfo
     *
     * Delete a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCustomerAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteCustomerRequest($options);

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
     * Create request for operation 'deleteCustomer'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteCustomerRequest($options)
    {
        // unbox the parameters from the associative array
        $customer_id = array_key_exists('customer_id', $options) ? $options['customer_id'] : null;

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null || (is_array($customer_id) && count($customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling deleteCustomer'
            );
        }

        $resourcePath = '/customer/{customer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'customer_id' . '}',
                ObjectSerializer::toPathValue($customer_id),
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
     * Operation getCustomer
     *
     * Get a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\CustomerResponse
     */
    public function getCustomer($options)
    {
        list($response) = $this->getCustomerWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getCustomerWithHttpInfo
     *
     * Get a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\CustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerWithHttpInfo($options)
    {
        $request = $this->getCustomerRequest($options);

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
                    if ('\Fastly\Model\CustomerResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\CustomerResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\CustomerResponse';
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
                        '\Fastly\Model\CustomerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerAsync
     *
     * Get a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsync($options)
    {
        return $this->getCustomerAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerAsyncWithHttpInfo
     *
     * Get a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\CustomerResponse';
        $request = $this->getCustomerRequest($options);

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
     * Create request for operation 'getCustomer'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCustomerRequest($options)
    {
        // unbox the parameters from the associative array
        $customer_id = array_key_exists('customer_id', $options) ? $options['customer_id'] : null;

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null || (is_array($customer_id) && count($customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling getCustomer'
            );
        }

        $resourcePath = '/customer/{customer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'customer_id' . '}',
                ObjectSerializer::toPathValue($customer_id),
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
     * Operation getLoggedInCustomer
     *
     * Get the logged in customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\CustomerResponse
     */
    public function getLoggedInCustomer($options)
    {
        list($response) = $this->getLoggedInCustomerWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getLoggedInCustomerWithHttpInfo
     *
     * Get the logged in customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\CustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLoggedInCustomerWithHttpInfo($options)
    {
        $request = $this->getLoggedInCustomerRequest($options);

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
                    if ('\Fastly\Model\CustomerResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\CustomerResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\CustomerResponse';
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
                        '\Fastly\Model\CustomerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLoggedInCustomerAsync
     *
     * Get the logged in customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLoggedInCustomerAsync($options)
    {
        return $this->getLoggedInCustomerAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLoggedInCustomerAsyncWithHttpInfo
     *
     * Get the logged in customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLoggedInCustomerAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\CustomerResponse';
        $request = $this->getLoggedInCustomerRequest($options);

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
     * Create request for operation 'getLoggedInCustomer'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLoggedInCustomerRequest($options)
    {
        // unbox the parameters from the associative array


        $resourcePath = '/current_customer';
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
     * Operation listUsers
     *
     * List users
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\SchemasUserResponse[]
     */
    public function listUsers($options)
    {
        list($response) = $this->listUsersWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listUsersWithHttpInfo
     *
     * List users
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\SchemasUserResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listUsersWithHttpInfo($options)
    {
        $request = $this->listUsersRequest($options);

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
                    if ('\Fastly\Model\SchemasUserResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\SchemasUserResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\SchemasUserResponse[]';
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
                        '\Fastly\Model\SchemasUserResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listUsersAsync
     *
     * List users
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listUsersAsync($options)
    {
        return $this->listUsersAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listUsersAsyncWithHttpInfo
     *
     * List users
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listUsersAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\SchemasUserResponse[]';
        $request = $this->listUsersRequest($options);

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
     * Create request for operation 'listUsers'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listUsersRequest($options)
    {
        // unbox the parameters from the associative array
        $customer_id = array_key_exists('customer_id', $options) ? $options['customer_id'] : null;

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null || (is_array($customer_id) && count($customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling listUsers'
            );
        }

        $resourcePath = '/customer/{customer_id}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'customer_id' . '}',
                ObjectSerializer::toPathValue($customer_id),
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
     * Operation updateCustomer
     *
     * Update a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     * @param  string $billing_contact_id The alphanumeric string representing the primary billing contact. (optional)
     * @param  string $billing_network_type Customer&#39;s current network revenue type. (optional)
     * @param  string $billing_ref Used for adding purchased orders to customer&#39;s account. (optional)
     * @param  bool $can_configure_wordpress Whether this customer can view or edit wordpress. (optional)
     * @param  bool $can_reset_passwords Whether this customer can reset passwords. (optional)
     * @param  bool $can_upload_vcl Whether this customer can upload VCL. (optional)
     * @param  bool $force_2fa Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. (optional)
     * @param  bool $force_sso Specifies whether SSO is forced or not forced on the customer account. (optional)
     * @param  bool $has_account_panel Specifies whether the account has access or does not have access to the account panel. (optional)
     * @param  bool $has_improved_events Specifies whether the account has access or does not have access to the improved events. (optional)
     * @param  bool $has_improved_ssl_config Whether this customer can view or edit the SSL config. (optional)
     * @param  bool $has_openstack_logging Specifies whether the account has enabled or not enabled openstack logging. (optional)
     * @param  bool $has_pci Specifies whether the account can edit PCI for a service. (optional)
     * @param  bool $has_pci_passwords Specifies whether PCI passwords are required for the account. (optional)
     * @param  string $ip_whitelist The range of IP addresses authorized to access the customer account. (optional)
     * @param  string $legal_contact_id The alphanumeric string identifying the account&#39;s legal contact. (optional)
     * @param  string $name The name of the customer, generally the company name. (optional)
     * @param  string $owner_id The alphanumeric string identifying the account owner. (optional)
     * @param  string $phone_number The phone number associated with the account. (optional)
     * @param  string $postal_address The postal address associated with the account. (optional)
     * @param  string $pricing_plan The pricing plan this customer is under. (optional)
     * @param  string $pricing_plan_id The alphanumeric string identifying the pricing plan. (optional)
     * @param  string $security_contact_id The alphanumeric string identifying the account&#39;s security contact. (optional)
     * @param  string $technical_contact_id The alphanumeric string identifying the account&#39;s technical contact. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\CustomerResponse
     */
    public function updateCustomer($options)
    {
        list($response) = $this->updateCustomerWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateCustomerWithHttpInfo
     *
     * Update a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     * @param  string $billing_contact_id The alphanumeric string representing the primary billing contact. (optional)
     * @param  string $billing_network_type Customer&#39;s current network revenue type. (optional)
     * @param  string $billing_ref Used for adding purchased orders to customer&#39;s account. (optional)
     * @param  bool $can_configure_wordpress Whether this customer can view or edit wordpress. (optional)
     * @param  bool $can_reset_passwords Whether this customer can reset passwords. (optional)
     * @param  bool $can_upload_vcl Whether this customer can upload VCL. (optional)
     * @param  bool $force_2fa Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. (optional)
     * @param  bool $force_sso Specifies whether SSO is forced or not forced on the customer account. (optional)
     * @param  bool $has_account_panel Specifies whether the account has access or does not have access to the account panel. (optional)
     * @param  bool $has_improved_events Specifies whether the account has access or does not have access to the improved events. (optional)
     * @param  bool $has_improved_ssl_config Whether this customer can view or edit the SSL config. (optional)
     * @param  bool $has_openstack_logging Specifies whether the account has enabled or not enabled openstack logging. (optional)
     * @param  bool $has_pci Specifies whether the account can edit PCI for a service. (optional)
     * @param  bool $has_pci_passwords Specifies whether PCI passwords are required for the account. (optional)
     * @param  string $ip_whitelist The range of IP addresses authorized to access the customer account. (optional)
     * @param  string $legal_contact_id The alphanumeric string identifying the account&#39;s legal contact. (optional)
     * @param  string $name The name of the customer, generally the company name. (optional)
     * @param  string $owner_id The alphanumeric string identifying the account owner. (optional)
     * @param  string $phone_number The phone number associated with the account. (optional)
     * @param  string $postal_address The postal address associated with the account. (optional)
     * @param  string $pricing_plan The pricing plan this customer is under. (optional)
     * @param  string $pricing_plan_id The alphanumeric string identifying the pricing plan. (optional)
     * @param  string $security_contact_id The alphanumeric string identifying the account&#39;s security contact. (optional)
     * @param  string $technical_contact_id The alphanumeric string identifying the account&#39;s technical contact. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\CustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCustomerWithHttpInfo($options)
    {
        $request = $this->updateCustomerRequest($options);

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
                    if ('\Fastly\Model\CustomerResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\CustomerResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\CustomerResponse';
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
                        '\Fastly\Model\CustomerResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateCustomerAsync
     *
     * Update a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     * @param  string $billing_contact_id The alphanumeric string representing the primary billing contact. (optional)
     * @param  string $billing_network_type Customer&#39;s current network revenue type. (optional)
     * @param  string $billing_ref Used for adding purchased orders to customer&#39;s account. (optional)
     * @param  bool $can_configure_wordpress Whether this customer can view or edit wordpress. (optional)
     * @param  bool $can_reset_passwords Whether this customer can reset passwords. (optional)
     * @param  bool $can_upload_vcl Whether this customer can upload VCL. (optional)
     * @param  bool $force_2fa Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. (optional)
     * @param  bool $force_sso Specifies whether SSO is forced or not forced on the customer account. (optional)
     * @param  bool $has_account_panel Specifies whether the account has access or does not have access to the account panel. (optional)
     * @param  bool $has_improved_events Specifies whether the account has access or does not have access to the improved events. (optional)
     * @param  bool $has_improved_ssl_config Whether this customer can view or edit the SSL config. (optional)
     * @param  bool $has_openstack_logging Specifies whether the account has enabled or not enabled openstack logging. (optional)
     * @param  bool $has_pci Specifies whether the account can edit PCI for a service. (optional)
     * @param  bool $has_pci_passwords Specifies whether PCI passwords are required for the account. (optional)
     * @param  string $ip_whitelist The range of IP addresses authorized to access the customer account. (optional)
     * @param  string $legal_contact_id The alphanumeric string identifying the account&#39;s legal contact. (optional)
     * @param  string $name The name of the customer, generally the company name. (optional)
     * @param  string $owner_id The alphanumeric string identifying the account owner. (optional)
     * @param  string $phone_number The phone number associated with the account. (optional)
     * @param  string $postal_address The postal address associated with the account. (optional)
     * @param  string $pricing_plan The pricing plan this customer is under. (optional)
     * @param  string $pricing_plan_id The alphanumeric string identifying the pricing plan. (optional)
     * @param  string $security_contact_id The alphanumeric string identifying the account&#39;s security contact. (optional)
     * @param  string $technical_contact_id The alphanumeric string identifying the account&#39;s technical contact. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCustomerAsync($options)
    {
        return $this->updateCustomerAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateCustomerAsyncWithHttpInfo
     *
     * Update a customer
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     * @param  string $billing_contact_id The alphanumeric string representing the primary billing contact. (optional)
     * @param  string $billing_network_type Customer&#39;s current network revenue type. (optional)
     * @param  string $billing_ref Used for adding purchased orders to customer&#39;s account. (optional)
     * @param  bool $can_configure_wordpress Whether this customer can view or edit wordpress. (optional)
     * @param  bool $can_reset_passwords Whether this customer can reset passwords. (optional)
     * @param  bool $can_upload_vcl Whether this customer can upload VCL. (optional)
     * @param  bool $force_2fa Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. (optional)
     * @param  bool $force_sso Specifies whether SSO is forced or not forced on the customer account. (optional)
     * @param  bool $has_account_panel Specifies whether the account has access or does not have access to the account panel. (optional)
     * @param  bool $has_improved_events Specifies whether the account has access or does not have access to the improved events. (optional)
     * @param  bool $has_improved_ssl_config Whether this customer can view or edit the SSL config. (optional)
     * @param  bool $has_openstack_logging Specifies whether the account has enabled or not enabled openstack logging. (optional)
     * @param  bool $has_pci Specifies whether the account can edit PCI for a service. (optional)
     * @param  bool $has_pci_passwords Specifies whether PCI passwords are required for the account. (optional)
     * @param  string $ip_whitelist The range of IP addresses authorized to access the customer account. (optional)
     * @param  string $legal_contact_id The alphanumeric string identifying the account&#39;s legal contact. (optional)
     * @param  string $name The name of the customer, generally the company name. (optional)
     * @param  string $owner_id The alphanumeric string identifying the account owner. (optional)
     * @param  string $phone_number The phone number associated with the account. (optional)
     * @param  string $postal_address The postal address associated with the account. (optional)
     * @param  string $pricing_plan The pricing plan this customer is under. (optional)
     * @param  string $pricing_plan_id The alphanumeric string identifying the pricing plan. (optional)
     * @param  string $security_contact_id The alphanumeric string identifying the account&#39;s security contact. (optional)
     * @param  string $technical_contact_id The alphanumeric string identifying the account&#39;s technical contact. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCustomerAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\CustomerResponse';
        $request = $this->updateCustomerRequest($options);

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
     * Create request for operation 'updateCustomer'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $customer_id Alphanumeric string identifying the customer. (required)
     * @param  string $billing_contact_id The alphanumeric string representing the primary billing contact. (optional)
     * @param  string $billing_network_type Customer&#39;s current network revenue type. (optional)
     * @param  string $billing_ref Used for adding purchased orders to customer&#39;s account. (optional)
     * @param  bool $can_configure_wordpress Whether this customer can view or edit wordpress. (optional)
     * @param  bool $can_reset_passwords Whether this customer can reset passwords. (optional)
     * @param  bool $can_upload_vcl Whether this customer can upload VCL. (optional)
     * @param  bool $force_2fa Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled. (optional)
     * @param  bool $force_sso Specifies whether SSO is forced or not forced on the customer account. (optional)
     * @param  bool $has_account_panel Specifies whether the account has access or does not have access to the account panel. (optional)
     * @param  bool $has_improved_events Specifies whether the account has access or does not have access to the improved events. (optional)
     * @param  bool $has_improved_ssl_config Whether this customer can view or edit the SSL config. (optional)
     * @param  bool $has_openstack_logging Specifies whether the account has enabled or not enabled openstack logging. (optional)
     * @param  bool $has_pci Specifies whether the account can edit PCI for a service. (optional)
     * @param  bool $has_pci_passwords Specifies whether PCI passwords are required for the account. (optional)
     * @param  string $ip_whitelist The range of IP addresses authorized to access the customer account. (optional)
     * @param  string $legal_contact_id The alphanumeric string identifying the account&#39;s legal contact. (optional)
     * @param  string $name The name of the customer, generally the company name. (optional)
     * @param  string $owner_id The alphanumeric string identifying the account owner. (optional)
     * @param  string $phone_number The phone number associated with the account. (optional)
     * @param  string $postal_address The postal address associated with the account. (optional)
     * @param  string $pricing_plan The pricing plan this customer is under. (optional)
     * @param  string $pricing_plan_id The alphanumeric string identifying the pricing plan. (optional)
     * @param  string $security_contact_id The alphanumeric string identifying the account&#39;s security contact. (optional)
     * @param  string $technical_contact_id The alphanumeric string identifying the account&#39;s technical contact. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateCustomerRequest($options)
    {
        // unbox the parameters from the associative array
        $customer_id = array_key_exists('customer_id', $options) ? $options['customer_id'] : null;
        $billing_contact_id = array_key_exists('billing_contact_id', $options) ? $options['billing_contact_id'] : null;
        $billing_network_type = array_key_exists('billing_network_type', $options) ? $options['billing_network_type'] : null;
        $billing_ref = array_key_exists('billing_ref', $options) ? $options['billing_ref'] : null;
        $can_configure_wordpress = array_key_exists('can_configure_wordpress', $options) ? $options['can_configure_wordpress'] : null;
        $can_reset_passwords = array_key_exists('can_reset_passwords', $options) ? $options['can_reset_passwords'] : null;
        $can_upload_vcl = array_key_exists('can_upload_vcl', $options) ? $options['can_upload_vcl'] : null;
        $force_2fa = array_key_exists('force_2fa', $options) ? $options['force_2fa'] : null;
        $force_sso = array_key_exists('force_sso', $options) ? $options['force_sso'] : null;
        $has_account_panel = array_key_exists('has_account_panel', $options) ? $options['has_account_panel'] : null;
        $has_improved_events = array_key_exists('has_improved_events', $options) ? $options['has_improved_events'] : null;
        $has_improved_ssl_config = array_key_exists('has_improved_ssl_config', $options) ? $options['has_improved_ssl_config'] : null;
        $has_openstack_logging = array_key_exists('has_openstack_logging', $options) ? $options['has_openstack_logging'] : null;
        $has_pci = array_key_exists('has_pci', $options) ? $options['has_pci'] : null;
        $has_pci_passwords = array_key_exists('has_pci_passwords', $options) ? $options['has_pci_passwords'] : null;
        $ip_whitelist = array_key_exists('ip_whitelist', $options) ? $options['ip_whitelist'] : null;
        $legal_contact_id = array_key_exists('legal_contact_id', $options) ? $options['legal_contact_id'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $owner_id = array_key_exists('owner_id', $options) ? $options['owner_id'] : null;
        $phone_number = array_key_exists('phone_number', $options) ? $options['phone_number'] : null;
        $postal_address = array_key_exists('postal_address', $options) ? $options['postal_address'] : null;
        $pricing_plan = array_key_exists('pricing_plan', $options) ? $options['pricing_plan'] : null;
        $pricing_plan_id = array_key_exists('pricing_plan_id', $options) ? $options['pricing_plan_id'] : null;
        $security_contact_id = array_key_exists('security_contact_id', $options) ? $options['security_contact_id'] : null;
        $technical_contact_id = array_key_exists('technical_contact_id', $options) ? $options['technical_contact_id'] : null;

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null || (is_array($customer_id) && count($customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling updateCustomer'
            );
        }

        $resourcePath = '/customer/{customer_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'customer_id' . '}',
                ObjectSerializer::toPathValue($customer_id),
                $resourcePath
            );
        }

        // form params
        if ($billing_contact_id !== null) {
            $formParams['billing_contact_id'] = ObjectSerializer::toFormValue($billing_contact_id);
        }
        // form params
        if ($billing_network_type !== null) {
            $formParams['billing_network_type'] = ObjectSerializer::toFormValue($billing_network_type);
        }
        // form params
        if ($billing_ref !== null) {
            $formParams['billing_ref'] = ObjectSerializer::toFormValue($billing_ref);
        }
        // form params
        if ($can_configure_wordpress !== null) {
            $formParams['can_configure_wordpress'] = ObjectSerializer::toFormValue($can_configure_wordpress);
        }
        // form params
        if ($can_reset_passwords !== null) {
            $formParams['can_reset_passwords'] = ObjectSerializer::toFormValue($can_reset_passwords);
        }
        // form params
        if ($can_upload_vcl !== null) {
            $formParams['can_upload_vcl'] = ObjectSerializer::toFormValue($can_upload_vcl);
        }
        // form params
        if ($force_2fa !== null) {
            $formParams['force_2fa'] = ObjectSerializer::toFormValue($force_2fa);
        }
        // form params
        if ($force_sso !== null) {
            $formParams['force_sso'] = ObjectSerializer::toFormValue($force_sso);
        }
        // form params
        if ($has_account_panel !== null) {
            $formParams['has_account_panel'] = ObjectSerializer::toFormValue($has_account_panel);
        }
        // form params
        if ($has_improved_events !== null) {
            $formParams['has_improved_events'] = ObjectSerializer::toFormValue($has_improved_events);
        }
        // form params
        if ($has_improved_ssl_config !== null) {
            $formParams['has_improved_ssl_config'] = ObjectSerializer::toFormValue($has_improved_ssl_config);
        }
        // form params
        if ($has_openstack_logging !== null) {
            $formParams['has_openstack_logging'] = ObjectSerializer::toFormValue($has_openstack_logging);
        }
        // form params
        if ($has_pci !== null) {
            $formParams['has_pci'] = ObjectSerializer::toFormValue($has_pci);
        }
        // form params
        if ($has_pci_passwords !== null) {
            $formParams['has_pci_passwords'] = ObjectSerializer::toFormValue($has_pci_passwords);
        }
        // form params
        if ($ip_whitelist !== null) {
            $formParams['ip_whitelist'] = ObjectSerializer::toFormValue($ip_whitelist);
        }
        // form params
        if ($legal_contact_id !== null) {
            $formParams['legal_contact_id'] = ObjectSerializer::toFormValue($legal_contact_id);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($owner_id !== null) {
            $formParams['owner_id'] = ObjectSerializer::toFormValue($owner_id);
        }
        // form params
        if ($phone_number !== null) {
            $formParams['phone_number'] = ObjectSerializer::toFormValue($phone_number);
        }
        // form params
        if ($postal_address !== null) {
            $formParams['postal_address'] = ObjectSerializer::toFormValue($postal_address);
        }
        // form params
        if ($pricing_plan !== null) {
            $formParams['pricing_plan'] = ObjectSerializer::toFormValue($pricing_plan);
        }
        // form params
        if ($pricing_plan_id !== null) {
            $formParams['pricing_plan_id'] = ObjectSerializer::toFormValue($pricing_plan_id);
        }
        // form params
        if ($security_contact_id !== null) {
            $formParams['security_contact_id'] = ObjectSerializer::toFormValue($security_contact_id);
        }
        // form params
        if ($technical_contact_id !== null) {
            $formParams['technical_contact_id'] = ObjectSerializer::toFormValue($technical_contact_id);
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
