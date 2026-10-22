<?php
/**
 * BotRequestsMetricsApi
 * PHP version 8.0
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
 * BotRequestsMetricsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class BotRequestsMetricsApi
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
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
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
     * Operation getBotRequestMetricsServiceHistorical
     *
     * Get per-service historical time series metrics for bot requests broken down by bot-type.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $granularity Duration of sample windows. (required)
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $to A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $group_by Field to group by in the query. For example, &#x60;group_by&#x3D;bot_id&#x60; will return entries grouped by &#x60;timestamp&#x60; and &#x60;bot_id&#x60;. (optional)
     * @param  string $datacenter Limit query to one or more specific POPs. Values should be comma-separated. (optional)
     * @param  string $bot Filter results based by Bot ID. (optional)
     * @param  string $region Limit query to one or more specific geographic regions. Values should be comma-separated. (optional)
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  string $metric One or more metrics to retrieve. Multiple values should be comma-separated. (optional)
     * @param  string $metric_set The metric set to retrieve. (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\BotRequestMetricsResponse
     */
    public function getBotRequestMetricsServiceHistorical($options)
    {
        list($response) = $this->getBotRequestMetricsServiceHistoricalWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getBotRequestMetricsServiceHistoricalWithHttpInfo
     *
     * Get per-service historical time series metrics for bot requests broken down by bot-type.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $granularity Duration of sample windows. (required)
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $to A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $group_by Field to group by in the query. For example, &#x60;group_by&#x3D;bot_id&#x60; will return entries grouped by &#x60;timestamp&#x60; and &#x60;bot_id&#x60;. (optional)
     * @param  string $datacenter Limit query to one or more specific POPs. Values should be comma-separated. (optional)
     * @param  string $bot Filter results based by Bot ID. (optional)
     * @param  string $region Limit query to one or more specific geographic regions. Values should be comma-separated. (optional)
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  string $metric One or more metrics to retrieve. Multiple values should be comma-separated. (optional)
     * @param  string $metric_set The metric set to retrieve. (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\BotRequestMetricsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBotRequestMetricsServiceHistoricalWithHttpInfo($options)
    {
        $request = $this->getBotRequestMetricsServiceHistoricalRequest($options);

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
                    if ('\Fastly\Model\BotRequestMetricsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\BotRequestMetricsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\BotRequestMetricsResponse';
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
                        '\Fastly\Model\BotRequestMetricsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBotRequestMetricsServiceHistoricalAsync
     *
     * Get per-service historical time series metrics for bot requests broken down by bot-type.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $granularity Duration of sample windows. (required)
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $to A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $group_by Field to group by in the query. For example, &#x60;group_by&#x3D;bot_id&#x60; will return entries grouped by &#x60;timestamp&#x60; and &#x60;bot_id&#x60;. (optional)
     * @param  string $datacenter Limit query to one or more specific POPs. Values should be comma-separated. (optional)
     * @param  string $bot Filter results based by Bot ID. (optional)
     * @param  string $region Limit query to one or more specific geographic regions. Values should be comma-separated. (optional)
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  string $metric One or more metrics to retrieve. Multiple values should be comma-separated. (optional)
     * @param  string $metric_set The metric set to retrieve. (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBotRequestMetricsServiceHistoricalAsync($options)
    {
        return $this->getBotRequestMetricsServiceHistoricalAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBotRequestMetricsServiceHistoricalAsyncWithHttpInfo
     *
     * Get per-service historical time series metrics for bot requests broken down by bot-type.
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $granularity Duration of sample windows. (required)
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $to A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $group_by Field to group by in the query. For example, &#x60;group_by&#x3D;bot_id&#x60; will return entries grouped by &#x60;timestamp&#x60; and &#x60;bot_id&#x60;. (optional)
     * @param  string $datacenter Limit query to one or more specific POPs. Values should be comma-separated. (optional)
     * @param  string $bot Filter results based by Bot ID. (optional)
     * @param  string $region Limit query to one or more specific geographic regions. Values should be comma-separated. (optional)
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  string $metric One or more metrics to retrieve. Multiple values should be comma-separated. (optional)
     * @param  string $metric_set The metric set to retrieve. (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBotRequestMetricsServiceHistoricalAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\BotRequestMetricsResponse';
        $request = $this->getBotRequestMetricsServiceHistoricalRequest($options);

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
     * Create request for operation 'getBotRequestMetricsServiceHistorical'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $granularity Duration of sample windows. (required)
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from A valid RFC-8339-formatted date and time indicating the inclusive start of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $to A valid RFC-8339-formatted date and time indicating the exclusive end of the query time range. If not provided, a default is chosen based on the provided &#x60;granularity&#x60; value. (optional)
     * @param  string $group_by Field to group by in the query. For example, &#x60;group_by&#x3D;bot_id&#x60; will return entries grouped by &#x60;timestamp&#x60; and &#x60;bot_id&#x60;. (optional)
     * @param  string $datacenter Limit query to one or more specific POPs. Values should be comma-separated. (optional)
     * @param  string $bot Filter results based by Bot ID. (optional)
     * @param  string $region Limit query to one or more specific geographic regions. Values should be comma-separated. (optional)
     * @param  string $cursor Cursor value from the &#x60;next_cursor&#x60; field of a previous response, used to retrieve the next page. To request the first page, this should be empty. (optional)
     * @param  string $metric One or more metrics to retrieve. Multiple values should be comma-separated. (optional)
     * @param  string $metric_set The metric set to retrieve. (optional)
     * @param  string $limit Number of results per page. The maximum is 10000. (optional, default to '1000')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBotRequestMetricsServiceHistoricalRequest($options)
    {
        // unbox the parameters from the associative array
        $granularity = array_key_exists('granularity', $options) ? $options['granularity'] : null;
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : null;
        $group_by = array_key_exists('group_by', $options) ? $options['group_by'] : null;
        $datacenter = array_key_exists('datacenter', $options) ? $options['datacenter'] : null;
        $bot = array_key_exists('bot', $options) ? $options['bot'] : null;
        $region = array_key_exists('region', $options) ? $options['region'] : null;
        $cursor = array_key_exists('cursor', $options) ? $options['cursor'] : null;
        $metric = array_key_exists('metric', $options) ? $options['metric'] : null;
        $metric_set = array_key_exists('metric_set', $options) ? $options['metric_set'] : null;
        $limit = array_key_exists('limit', $options) ? $options['limit'] : '1000';

        // verify the required parameter 'granularity' is set
        if ($granularity === null || (is_array($granularity) && count($granularity) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granularity when calling getBotRequestMetricsServiceHistorical'
            );
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getBotRequestMetricsServiceHistorical'
            );
        }

        $resourcePath = '/metrics/bots/entities/{service_id}/{granularity}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($from !== null) {
            if('form' === 'form' && is_array($from)) {
                foreach($from as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['from'] = ObjectSerializer::toString($from);
            }
        }
        // query params
        if ($to !== null) {
            if('form' === 'form' && is_array($to)) {
                foreach($to as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['to'] = ObjectSerializer::toString($to);
            }
        }
        // query params
        if ($group_by !== null) {
            if('form' === 'form' && is_array($group_by)) {
                foreach($group_by as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['group_by'] = ObjectSerializer::toString($group_by);
            }
        }
        // query params
        if (is_array($datacenter)) {
            $datacenter = ObjectSerializer::serializeCollection($datacenter, 'form', true);
        }
        if ($datacenter !== null) {
            $queryParams['datacenter'] = ObjectSerializer::toString($datacenter);
        }
        // query params
        if ($bot !== null) {
            if('form' === 'form' && is_array($bot)) {
                foreach($bot as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['bot'] = ObjectSerializer::toString($bot);
            }
        }
        // query params
        if (is_array($region)) {
            $region = ObjectSerializer::serializeCollection($region, 'form', true);
        }
        if ($region !== null) {
            $queryParams['region'] = ObjectSerializer::toString($region);
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
        if ($metric !== null) {
            if('form' === 'form' && is_array($metric)) {
                foreach($metric as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['metric'] = ObjectSerializer::toString($metric);
            }
        }
        // query params
        if ($metric_set !== null) {
            if('form' === 'form' && is_array($metric_set)) {
                foreach($metric_set as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['metric_set'] = ObjectSerializer::toString($metric_set);
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
        if ($granularity !== null) {
            $resourcePath = str_replace(
                '{' . 'granularity' . '}',
                ObjectSerializer::toPathValue($granularity),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
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
