<?php
/**
 * BillingUsageMetricsApi
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
 * BillingUsageMetricsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class BillingUsageMetricsApi
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
     * Operation getServiceLevelUsage
     *
     * Retrieve service-level usage metrics for services with non-zero usage units.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $product_id The product identifier for the metrics returned (e.g., &#x60;cdn_usage&#x60;). This should be used along with &#x60;usage_type_name&#x60;. (optional)
     * @param  string $service The service identifier for the metrics being requested. (optional)
     * @param  string $usage_type_name The usage type name for the metrics returned (e.g., &#x60;North America Requests&#x60;). This should be used along with &#x60;product_id&#x60;. (optional)
     * @param  string $start_month start_month (optional)
     * @param  string $end_month end_month (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\Serviceusagemetrics|\Fastly\Model\Error|\Fastly\Model\Error|\Fastly\Model\Error
     */
    public function getServiceLevelUsage($options)
    {
        list($response) = $this->getServiceLevelUsageWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getServiceLevelUsageWithHttpInfo
     *
     * Retrieve service-level usage metrics for services with non-zero usage units.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $product_id The product identifier for the metrics returned (e.g., &#x60;cdn_usage&#x60;). This should be used along with &#x60;usage_type_name&#x60;. (optional)
     * @param  string $service The service identifier for the metrics being requested. (optional)
     * @param  string $usage_type_name The usage type name for the metrics returned (e.g., &#x60;North America Requests&#x60;). This should be used along with &#x60;product_id&#x60;. (optional)
     * @param  string $start_month (optional)
     * @param  string $end_month (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\Serviceusagemetrics|\Fastly\Model\Error|\Fastly\Model\Error|\Fastly\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getServiceLevelUsageWithHttpInfo($options)
    {
        $request = $this->getServiceLevelUsageRequest($options);

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
                    if ('\Fastly\Model\Serviceusagemetrics' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Serviceusagemetrics', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Fastly\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Fastly\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Fastly\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\Serviceusagemetrics';
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
                        '\Fastly\Model\Serviceusagemetrics',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getServiceLevelUsageAsync
     *
     * Retrieve service-level usage metrics for services with non-zero usage units.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $product_id The product identifier for the metrics returned (e.g., &#x60;cdn_usage&#x60;). This should be used along with &#x60;usage_type_name&#x60;. (optional)
     * @param  string $service The service identifier for the metrics being requested. (optional)
     * @param  string $usage_type_name The usage type name for the metrics returned (e.g., &#x60;North America Requests&#x60;). This should be used along with &#x60;product_id&#x60;. (optional)
     * @param  string $start_month (optional)
     * @param  string $end_month (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServiceLevelUsageAsync($options)
    {
        return $this->getServiceLevelUsageAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getServiceLevelUsageAsyncWithHttpInfo
     *
     * Retrieve service-level usage metrics for services with non-zero usage units.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $product_id The product identifier for the metrics returned (e.g., &#x60;cdn_usage&#x60;). This should be used along with &#x60;usage_type_name&#x60;. (optional)
     * @param  string $service The service identifier for the metrics being requested. (optional)
     * @param  string $usage_type_name The usage type name for the metrics returned (e.g., &#x60;North America Requests&#x60;). This should be used along with &#x60;product_id&#x60;. (optional)
     * @param  string $start_month (optional)
     * @param  string $end_month (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServiceLevelUsageAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\Serviceusagemetrics';
        $request = $this->getServiceLevelUsageRequest($options);

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
     * Create request for operation 'getServiceLevelUsage'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $product_id The product identifier for the metrics returned (e.g., &#x60;cdn_usage&#x60;). This should be used along with &#x60;usage_type_name&#x60;. (optional)
     * @param  string $service The service identifier for the metrics being requested. (optional)
     * @param  string $usage_type_name The usage type name for the metrics returned (e.g., &#x60;North America Requests&#x60;). This should be used along with &#x60;product_id&#x60;. (optional)
     * @param  string $start_month (optional)
     * @param  string $end_month (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getServiceLevelUsageRequest($options)
    {
        // unbox the parameters from the associative array
        $product_id = array_key_exists('product_id', $options) ? $options['product_id'] : null;
        $service = array_key_exists('service', $options) ? $options['service'] : null;
        $usage_type_name = array_key_exists('usage_type_name', $options) ? $options['usage_type_name'] : null;
        $start_month = array_key_exists('start_month', $options) ? $options['start_month'] : null;
        $end_month = array_key_exists('end_month', $options) ? $options['end_month'] : null;
        $limit = array_key_exists('limit', $options) ? $options['limit'] : '1000';
        $cursor = array_key_exists('cursor', $options) ? $options['cursor'] : null;

        if ($start_month !== null && !preg_match("/^[0-9]{4}-[0-9]{2}$/", $start_month)) {
            throw new \InvalidArgumentException("invalid value for \"start_month\" when calling BillingUsageMetricsApi.getServiceLevelUsage, must conform to the pattern /^[0-9]{4}-[0-9]{2}$/.");
        }

        if ($end_month !== null && !preg_match("/^[0-9]{4}-[0-9]{2}$/", $end_month)) {
            throw new \InvalidArgumentException("invalid value for \"end_month\" when calling BillingUsageMetricsApi.getServiceLevelUsage, must conform to the pattern /^[0-9]{4}-[0-9]{2}$/.");
        }


        $resourcePath = '/billing/v3/service-usage-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($product_id !== null) {
            if('form' === 'form' && is_array($product_id)) {
                foreach($product_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['product_id'] = ObjectSerializer::toString($product_id);
            }
        }
        // query params
        if ($service !== null) {
            if('form' === 'form' && is_array($service)) {
                foreach($service as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['service'] = ObjectSerializer::toString($service);
            }
        }
        // query params
        if ($usage_type_name !== null) {
            if('form' === 'form' && is_array($usage_type_name)) {
                foreach($usage_type_name as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['usage_type_name'] = ObjectSerializer::toString($usage_type_name);
            }
        }
        // query params
        if ($start_month !== null) {
            if('form' === 'form' && is_array($start_month)) {
                foreach($start_month as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['start_month'] = ObjectSerializer::toString($start_month);
            }
        }
        // query params
        if ($end_month !== null) {
            if('form' === 'form' && is_array($end_month)) {
                foreach($end_month as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['end_month'] = ObjectSerializer::toString($end_month);
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
     * Operation getUsageMetrics
     *
     * Get monthly usage metrics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $start_month start_month (required)
     * @param  string $end_month end_month (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\Usagemetric|\Fastly\Model\Error|\Fastly\Model\Error|\Fastly\Model\Error
     */
    public function getUsageMetrics($options)
    {
        list($response) = $this->getUsageMetricsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getUsageMetricsWithHttpInfo
     *
     * Get monthly usage metrics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $start_month (required)
     * @param  string $end_month (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\Usagemetric|\Fastly\Model\Error|\Fastly\Model\Error|\Fastly\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsageMetricsWithHttpInfo($options)
    {
        $request = $this->getUsageMetricsRequest($options);

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
                    if ('\Fastly\Model\Usagemetric' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Usagemetric', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Fastly\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Fastly\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Fastly\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\Usagemetric';
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
                        '\Fastly\Model\Usagemetric',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fastly\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUsageMetricsAsync
     *
     * Get monthly usage metrics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $start_month (required)
     * @param  string $end_month (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageMetricsAsync($options)
    {
        return $this->getUsageMetricsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsageMetricsAsyncWithHttpInfo
     *
     * Get monthly usage metrics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $start_month (required)
     * @param  string $end_month (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageMetricsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\Usagemetric';
        $request = $this->getUsageMetricsRequest($options);

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
     * Create request for operation 'getUsageMetrics'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $start_month (required)
     * @param  string $end_month (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUsageMetricsRequest($options)
    {
        // unbox the parameters from the associative array
        $start_month = array_key_exists('start_month', $options) ? $options['start_month'] : null;
        $end_month = array_key_exists('end_month', $options) ? $options['end_month'] : null;

        // verify the required parameter 'start_month' is set
        if ($start_month === null || (is_array($start_month) && count($start_month) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_month when calling getUsageMetrics'
            );
        }
        if (!preg_match("/^[0-9]{4}-[0-9]{2}$/", $start_month)) {
            throw new \InvalidArgumentException("invalid value for \"start_month\" when calling BillingUsageMetricsApi.getUsageMetrics, must conform to the pattern /^[0-9]{4}-[0-9]{2}$/.");
        }

        // verify the required parameter 'end_month' is set
        if ($end_month === null || (is_array($end_month) && count($end_month) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_month when calling getUsageMetrics'
            );
        }
        if (!preg_match("/^[0-9]{4}-[0-9]{2}$/", $end_month)) {
            throw new \InvalidArgumentException("invalid value for \"end_month\" when calling BillingUsageMetricsApi.getUsageMetrics, must conform to the pattern /^[0-9]{4}-[0-9]{2}$/.");
        }


        $resourcePath = '/billing/v3/usage-metrics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_month !== null) {
            if('form' === 'form' && is_array($start_month)) {
                foreach($start_month as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['start_month'] = ObjectSerializer::toString($start_month);
            }
        }
        // query params
        if ($end_month !== null) {
            if('form' === 'form' && is_array($end_month)) {
                foreach($end_month as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['end_month'] = ObjectSerializer::toString($end_month);
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
