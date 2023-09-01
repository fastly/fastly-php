<?php
/**
 * EventsApi
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
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class EventsApi
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
     * Operation getEvent
     *
     * Get an event
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $event_id Alphanumeric string identifying an event. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\EventResponse
     */
    public function getEvent($options)
    {
        list($response) = $this->getEventWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getEventWithHttpInfo
     *
     * Get an event
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $event_id Alphanumeric string identifying an event. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\EventResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEventWithHttpInfo($options)
    {
        $request = $this->getEventRequest($options);

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
                    if ('\Fastly\Model\EventResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\EventResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\EventResponse';
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
                        '\Fastly\Model\EventResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEventAsync
     *
     * Get an event
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $event_id Alphanumeric string identifying an event. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventAsync($options)
    {
        return $this->getEventAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEventAsyncWithHttpInfo
     *
     * Get an event
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $event_id Alphanumeric string identifying an event. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\EventResponse';
        $request = $this->getEventRequest($options);

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
     * Create request for operation 'getEvent'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $event_id Alphanumeric string identifying an event. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getEventRequest($options)
    {
        // unbox the parameters from the associative array
        $event_id = array_key_exists('event_id', $options) ? $options['event_id'] : null;

        // verify the required parameter 'event_id' is set
        if ($event_id === null || (is_array($event_id) && count($event_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $event_id when calling getEvent'
            );
        }

        $resourcePath = '/events/{event_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($event_id !== null) {
            $resourcePath = str_replace(
                '{' . 'event_id' . '}',
                ObjectSerializer::toPathValue($event_id),
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
     * Operation listEvents
     *
     * List events
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_customer_id Limit the results returned to a specific customer. (optional)
     * @param  string $filter_event_type Limit the returned events to a specific &#x60;event_type&#x60;. (optional)
     * @param  string $filter_service_id Limit the results returned to a specific service. (optional)
     * @param  string $filter_user_id Limit the results returned to a specific user. (optional)
     * @param  string $filter_token_id Limit the returned events to a specific token. (optional)
     * @param  string $filter_created_at Limit the returned events to a specific time frame. Accepts sub-parameters: lt, lte, gt, gte (e.g., filter[created_at][gt]&#x3D;2022-01-12). (optional)
     * @param  string $filter_created_at_lte Return events on and before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_lt Return events before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gte Return events on and after a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gt Return events after a date and time in ISO 8601 format. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\EventsResponse
     */
    public function listEvents($options)
    {
        list($response) = $this->listEventsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listEventsWithHttpInfo
     *
     * List events
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_customer_id Limit the results returned to a specific customer. (optional)
     * @param  string $filter_event_type Limit the returned events to a specific &#x60;event_type&#x60;. (optional)
     * @param  string $filter_service_id Limit the results returned to a specific service. (optional)
     * @param  string $filter_user_id Limit the results returned to a specific user. (optional)
     * @param  string $filter_token_id Limit the returned events to a specific token. (optional)
     * @param  string $filter_created_at Limit the returned events to a specific time frame. Accepts sub-parameters: lt, lte, gt, gte (e.g., filter[created_at][gt]&#x3D;2022-01-12). (optional)
     * @param  string $filter_created_at_lte Return events on and before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_lt Return events before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gte Return events on and after a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gt Return events after a date and time in ISO 8601 format. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\EventsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listEventsWithHttpInfo($options)
    {
        $request = $this->listEventsRequest($options);

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
                    if ('\Fastly\Model\EventsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\EventsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\EventsResponse';
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
                        '\Fastly\Model\EventsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listEventsAsync
     *
     * List events
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_customer_id Limit the results returned to a specific customer. (optional)
     * @param  string $filter_event_type Limit the returned events to a specific &#x60;event_type&#x60;. (optional)
     * @param  string $filter_service_id Limit the results returned to a specific service. (optional)
     * @param  string $filter_user_id Limit the results returned to a specific user. (optional)
     * @param  string $filter_token_id Limit the returned events to a specific token. (optional)
     * @param  string $filter_created_at Limit the returned events to a specific time frame. Accepts sub-parameters: lt, lte, gt, gte (e.g., filter[created_at][gt]&#x3D;2022-01-12). (optional)
     * @param  string $filter_created_at_lte Return events on and before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_lt Return events before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gte Return events on and after a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gt Return events after a date and time in ISO 8601 format. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEventsAsync($options)
    {
        return $this->listEventsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listEventsAsyncWithHttpInfo
     *
     * List events
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_customer_id Limit the results returned to a specific customer. (optional)
     * @param  string $filter_event_type Limit the returned events to a specific &#x60;event_type&#x60;. (optional)
     * @param  string $filter_service_id Limit the results returned to a specific service. (optional)
     * @param  string $filter_user_id Limit the results returned to a specific user. (optional)
     * @param  string $filter_token_id Limit the returned events to a specific token. (optional)
     * @param  string $filter_created_at Limit the returned events to a specific time frame. Accepts sub-parameters: lt, lte, gt, gte (e.g., filter[created_at][gt]&#x3D;2022-01-12). (optional)
     * @param  string $filter_created_at_lte Return events on and before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_lt Return events before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gte Return events on and after a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gt Return events after a date and time in ISO 8601 format. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listEventsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\EventsResponse';
        $request = $this->listEventsRequest($options);

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
     * Create request for operation 'listEvents'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_customer_id Limit the results returned to a specific customer. (optional)
     * @param  string $filter_event_type Limit the returned events to a specific &#x60;event_type&#x60;. (optional)
     * @param  string $filter_service_id Limit the results returned to a specific service. (optional)
     * @param  string $filter_user_id Limit the results returned to a specific user. (optional)
     * @param  string $filter_token_id Limit the returned events to a specific token. (optional)
     * @param  string $filter_created_at Limit the returned events to a specific time frame. Accepts sub-parameters: lt, lte, gt, gte (e.g., filter[created_at][gt]&#x3D;2022-01-12). (optional)
     * @param  string $filter_created_at_lte Return events on and before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_lt Return events before a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gte Return events on and after a date and time in ISO 8601 format. (optional)
     * @param  string $filter_created_at_gt Return events after a date and time in ISO 8601 format. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $sort The order in which to list the results by creation date. (optional, default to 'created_at')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listEventsRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_customer_id = array_key_exists('filter_customer_id', $options) ? $options['filter_customer_id'] : null;
        $filter_event_type = array_key_exists('filter_event_type', $options) ? $options['filter_event_type'] : null;
        $filter_service_id = array_key_exists('filter_service_id', $options) ? $options['filter_service_id'] : null;
        $filter_user_id = array_key_exists('filter_user_id', $options) ? $options['filter_user_id'] : null;
        $filter_token_id = array_key_exists('filter_token_id', $options) ? $options['filter_token_id'] : null;
        $filter_created_at = array_key_exists('filter_created_at', $options) ? $options['filter_created_at'] : null;
        $filter_created_at_lte = array_key_exists('filter_created_at_lte', $options) ? $options['filter_created_at_lte'] : null;
        $filter_created_at_lt = array_key_exists('filter_created_at_lt', $options) ? $options['filter_created_at_lt'] : null;
        $filter_created_at_gte = array_key_exists('filter_created_at_gte', $options) ? $options['filter_created_at_gte'] : null;
        $filter_created_at_gt = array_key_exists('filter_created_at_gt', $options) ? $options['filter_created_at_gt'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;
        $sort = array_key_exists('sort', $options) ? $options['sort'] : 'created_at';

        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling EventsApi.listEvents, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling EventsApi.listEvents, must be bigger than or equal to 1.');
        }


        $resourcePath = '/events';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_customer_id !== null) {
            if('form' === 'form' && is_array($filter_customer_id)) {
                foreach($filter_customer_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[customer_id]'] = ObjectSerializer::toString($filter_customer_id);
            }
        }
        // query params
        if ($filter_event_type !== null) {
            if('form' === 'form' && is_array($filter_event_type)) {
                foreach($filter_event_type as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[event_type]'] = ObjectSerializer::toString($filter_event_type);
            }
        }
        // query params
        if ($filter_service_id !== null) {
            if('form' === 'form' && is_array($filter_service_id)) {
                foreach($filter_service_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[service_id]'] = ObjectSerializer::toString($filter_service_id);
            }
        }
        // query params
        if ($filter_user_id !== null) {
            if('form' === 'form' && is_array($filter_user_id)) {
                foreach($filter_user_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[user_id]'] = ObjectSerializer::toString($filter_user_id);
            }
        }
        // query params
        if ($filter_token_id !== null) {
            if('form' === 'form' && is_array($filter_token_id)) {
                foreach($filter_token_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[token_id]'] = ObjectSerializer::toString($filter_token_id);
            }
        }
        // query params
        if ($filter_created_at !== null) {
            if('form' === 'form' && is_array($filter_created_at)) {
                foreach($filter_created_at as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[created_at]'] = ObjectSerializer::toString($filter_created_at);
            }
        }
        // query params
        if ($filter_created_at_lte !== null) {
            if('form' === 'form' && is_array($filter_created_at_lte)) {
                foreach($filter_created_at_lte as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[created_at][lte]'] = ObjectSerializer::toString($filter_created_at_lte);
            }
        }
        // query params
        if ($filter_created_at_lt !== null) {
            if('form' === 'form' && is_array($filter_created_at_lt)) {
                foreach($filter_created_at_lt as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[created_at][lt]'] = ObjectSerializer::toString($filter_created_at_lt);
            }
        }
        // query params
        if ($filter_created_at_gte !== null) {
            if('form' === 'form' && is_array($filter_created_at_gte)) {
                foreach($filter_created_at_gte as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[created_at][gte]'] = ObjectSerializer::toString($filter_created_at_gte);
            }
        }
        // query params
        if ($filter_created_at_gt !== null) {
            if('form' === 'form' && is_array($filter_created_at_gt)) {
                foreach($filter_created_at_gt as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[created_at][gt]'] = ObjectSerializer::toString($filter_created_at_gt);
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
