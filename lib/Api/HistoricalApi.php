<?php
/**
 * HistoricalApi
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
 * HistoricalApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class HistoricalApi
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
     * Operation getHistStats
     *
     * Get historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalStatsByServiceResponse
     */
    public function getHistStats($options)
    {
        list($response) = $this->getHistStatsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getHistStatsWithHttpInfo
     *
     * Get historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalStatsByServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistStatsWithHttpInfo($options)
    {
        $request = $this->getHistStatsRequest($options);

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
                    if ('\Fastly\Model\HistoricalStatsByServiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalStatsByServiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalStatsByServiceResponse';
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
                        '\Fastly\Model\HistoricalStatsByServiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistStatsAsync
     *
     * Get historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsAsync($options)
    {
        return $this->getHistStatsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistStatsAsyncWithHttpInfo
     *
     * Get historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalStatsByServiceResponse';
        $request = $this->getHistStatsRequest($options);

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
     * Create request for operation 'getHistStats'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHistStatsRequest($options)
    {
        // unbox the parameters from the associative array
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : 'now';
        $by = array_key_exists('by', $options) ? $options['by'] : 'day';
        $region = array_key_exists('region', $options) ? $options['region'] : null;


        $resourcePath = '/stats';
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
        if ($by !== null) {
            if('form' === 'form' && is_array($by)) {
                foreach($by as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['by'] = ObjectSerializer::toString($by);
            }
        }
        // query params
        if ($region !== null) {
            if('form' === 'form' && is_array($region)) {
                foreach($region as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['region'] = ObjectSerializer::toString($region);
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
     * Operation getHistStatsAggregated
     *
     * Get aggregated historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalStatsAggregatedResponse
     */
    public function getHistStatsAggregated($options)
    {
        list($response) = $this->getHistStatsAggregatedWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getHistStatsAggregatedWithHttpInfo
     *
     * Get aggregated historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalStatsAggregatedResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistStatsAggregatedWithHttpInfo($options)
    {
        $request = $this->getHistStatsAggregatedRequest($options);

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
                    if ('\Fastly\Model\HistoricalStatsAggregatedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalStatsAggregatedResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalStatsAggregatedResponse';
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
                        '\Fastly\Model\HistoricalStatsAggregatedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistStatsAggregatedAsync
     *
     * Get aggregated historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsAggregatedAsync($options)
    {
        return $this->getHistStatsAggregatedAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistStatsAggregatedAsyncWithHttpInfo
     *
     * Get aggregated historical stats
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsAggregatedAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalStatsAggregatedResponse';
        $request = $this->getHistStatsAggregatedRequest($options);

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
     * Create request for operation 'getHistStatsAggregated'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHistStatsAggregatedRequest($options)
    {
        // unbox the parameters from the associative array
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : 'now';
        $by = array_key_exists('by', $options) ? $options['by'] : 'day';
        $region = array_key_exists('region', $options) ? $options['region'] : null;


        $resourcePath = '/stats/aggregate';
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
        if ($by !== null) {
            if('form' === 'form' && is_array($by)) {
                foreach($by as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['by'] = ObjectSerializer::toString($by);
            }
        }
        // query params
        if ($region !== null) {
            if('form' === 'form' && is_array($region)) {
                foreach($region as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['region'] = ObjectSerializer::toString($region);
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
     * Operation getHistStatsField
     *
     * Get historical stats for a single field
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalStatsByServiceResponse
     */
    public function getHistStatsField($options)
    {
        list($response) = $this->getHistStatsFieldWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getHistStatsFieldWithHttpInfo
     *
     * Get historical stats for a single field
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalStatsByServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistStatsFieldWithHttpInfo($options)
    {
        $request = $this->getHistStatsFieldRequest($options);

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
                    if ('\Fastly\Model\HistoricalStatsByServiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalStatsByServiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalStatsByServiceResponse';
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
                        '\Fastly\Model\HistoricalStatsByServiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistStatsFieldAsync
     *
     * Get historical stats for a single field
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsFieldAsync($options)
    {
        return $this->getHistStatsFieldAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistStatsFieldAsyncWithHttpInfo
     *
     * Get historical stats for a single field
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsFieldAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalStatsByServiceResponse';
        $request = $this->getHistStatsFieldRequest($options);

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
     * Create request for operation 'getHistStatsField'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHistStatsFieldRequest($options)
    {
        // unbox the parameters from the associative array
        $field = array_key_exists('field', $options) ? $options['field'] : null;
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : 'now';
        $by = array_key_exists('by', $options) ? $options['by'] : 'day';
        $region = array_key_exists('region', $options) ? $options['region'] : null;

        // verify the required parameter 'field' is set
        if ($field === null || (is_array($field) && count($field) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field when calling getHistStatsField'
            );
        }

        $resourcePath = '/stats/field/{field}';
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
        if ($by !== null) {
            if('form' === 'form' && is_array($by)) {
                foreach($by as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['by'] = ObjectSerializer::toString($by);
            }
        }
        // query params
        if ($region !== null) {
            if('form' === 'form' && is_array($region)) {
                foreach($region as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['region'] = ObjectSerializer::toString($region);
            }
        }


        // path params
        if ($field !== null) {
            $resourcePath = str_replace(
                '{' . 'field' . '}',
                ObjectSerializer::toPathValue($field),
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
     * Operation getHistStatsService
     *
     * Get historical stats for a single service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalStatsAggregatedResponse
     */
    public function getHistStatsService($options)
    {
        list($response) = $this->getHistStatsServiceWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getHistStatsServiceWithHttpInfo
     *
     * Get historical stats for a single service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalStatsAggregatedResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistStatsServiceWithHttpInfo($options)
    {
        $request = $this->getHistStatsServiceRequest($options);

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
                    if ('\Fastly\Model\HistoricalStatsAggregatedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalStatsAggregatedResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalStatsAggregatedResponse';
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
                        '\Fastly\Model\HistoricalStatsAggregatedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistStatsServiceAsync
     *
     * Get historical stats for a single service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsServiceAsync($options)
    {
        return $this->getHistStatsServiceAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistStatsServiceAsyncWithHttpInfo
     *
     * Get historical stats for a single service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsServiceAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalStatsAggregatedResponse';
        $request = $this->getHistStatsServiceRequest($options);

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
     * Create request for operation 'getHistStatsService'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHistStatsServiceRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : 'now';
        $by = array_key_exists('by', $options) ? $options['by'] : 'day';
        $region = array_key_exists('region', $options) ? $options['region'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getHistStatsService'
            );
        }

        $resourcePath = '/stats/service/{service_id}';
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
        if ($by !== null) {
            if('form' === 'form' && is_array($by)) {
                foreach($by as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['by'] = ObjectSerializer::toString($by);
            }
        }
        // query params
        if ($region !== null) {
            if('form' === 'form' && is_array($region)) {
                foreach($region as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['region'] = ObjectSerializer::toString($region);
            }
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
     * Operation getHistStatsServiceField
     *
     * Get historical stats for a single service/field combination
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalStatsAggregatedResponse
     */
    public function getHistStatsServiceField($options)
    {
        list($response) = $this->getHistStatsServiceFieldWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getHistStatsServiceFieldWithHttpInfo
     *
     * Get historical stats for a single service/field combination
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalStatsAggregatedResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHistStatsServiceFieldWithHttpInfo($options)
    {
        $request = $this->getHistStatsServiceFieldRequest($options);

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
                    if ('\Fastly\Model\HistoricalStatsAggregatedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalStatsAggregatedResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalStatsAggregatedResponse';
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
                        '\Fastly\Model\HistoricalStatsAggregatedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHistStatsServiceFieldAsync
     *
     * Get historical stats for a single service/field combination
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsServiceFieldAsync($options)
    {
        return $this->getHistStatsServiceFieldAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHistStatsServiceFieldAsyncWithHttpInfo
     *
     * Get historical stats for a single service/field combination
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHistStatsServiceFieldAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalStatsAggregatedResponse';
        $request = $this->getHistStatsServiceFieldRequest($options);

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
     * Create request for operation 'getHistStatsServiceField'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  string $field Name of the stats field. (required)
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     * @param  string $by Duration of sample windows. One of:   * &#x60;hour&#x60; - Group data by hour.   * &#x60;minute&#x60; - Group data by minute.   * &#x60;day&#x60; - Group data by day. (optional, default to 'day')
     * @param  string $region Limit query to a specific geographic region. One of:   * &#x60;usa&#x60; - North America.   * &#x60;europe&#x60; - Europe.   * &#x60;anzac&#x60; - Australia and New Zealand.   * &#x60;asia&#x60; - Asia.   * &#x60;asia_india&#x60; - India.   * &#x60;asia_southkorea&#x60; - South Korea.   * &#x60;africa_std&#x60; - Africa.   * &#x60;southamerica_std&#x60; - South America. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHistStatsServiceFieldRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $field = array_key_exists('field', $options) ? $options['field'] : null;
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : 'now';
        $by = array_key_exists('by', $options) ? $options['by'] : 'day';
        $region = array_key_exists('region', $options) ? $options['region'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getHistStatsServiceField'
            );
        }
        // verify the required parameter 'field' is set
        if ($field === null || (is_array($field) && count($field) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field when calling getHistStatsServiceField'
            );
        }

        $resourcePath = '/stats/service/{service_id}/field/{field}';
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
        if ($by !== null) {
            if('form' === 'form' && is_array($by)) {
                foreach($by as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['by'] = ObjectSerializer::toString($by);
            }
        }
        // query params
        if ($region !== null) {
            if('form' === 'form' && is_array($region)) {
                foreach($region as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['region'] = ObjectSerializer::toString($region);
            }
        }


        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
                $resourcePath
            );
        }
        // path params
        if ($field !== null) {
            $resourcePath = str_replace(
                '{' . 'field' . '}',
                ObjectSerializer::toPathValue($field),
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
     * Operation getRegions
     *
     * Get region codes
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalRegionsResponse
     */
    public function getRegions($options)
    {
        list($response) = $this->getRegionsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getRegionsWithHttpInfo
     *
     * Get region codes
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalRegionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRegionsWithHttpInfo($options)
    {
        $request = $this->getRegionsRequest($options);

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
                    if ('\Fastly\Model\HistoricalRegionsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalRegionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalRegionsResponse';
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
                        '\Fastly\Model\HistoricalRegionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getRegionsAsync
     *
     * Get region codes
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
    public function getRegionsAsync($options)
    {
        return $this->getRegionsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRegionsAsyncWithHttpInfo
     *
     * Get region codes
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
    public function getRegionsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalRegionsResponse';
        $request = $this->getRegionsRequest($options);

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
     * Create request for operation 'getRegions'
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
    public function getRegionsRequest($options)
    {
        // unbox the parameters from the associative array


        $resourcePath = '/stats/regions';
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
     * Operation getUsage
     *
     * Get usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalUsageAggregatedResponse
     */
    public function getUsage($options)
    {
        list($response) = $this->getUsageWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getUsageWithHttpInfo
     *
     * Get usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalUsageAggregatedResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsageWithHttpInfo($options)
    {
        $request = $this->getUsageRequest($options);

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
                    if ('\Fastly\Model\HistoricalUsageAggregatedResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalUsageAggregatedResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalUsageAggregatedResponse';
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
                        '\Fastly\Model\HistoricalUsageAggregatedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUsageAsync
     *
     * Get usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageAsync($options)
    {
        return $this->getUsageAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsageAsyncWithHttpInfo
     *
     * Get usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalUsageAggregatedResponse';
        $request = $this->getUsageRequest($options);

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
     * Create request for operation 'getUsage'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUsageRequest($options)
    {
        // unbox the parameters from the associative array
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : 'now';


        $resourcePath = '/stats/usage';
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
     * Operation getUsageMonth
     *
     * Get month-to-date usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $year 4-digit year. (optional)
     * @param  string $month 2-digit month. (optional)
     * @param  bool $billable_units If &#x60;true&#x60;, return results as billable units. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalUsageMonthResponse
     */
    public function getUsageMonth($options)
    {
        list($response) = $this->getUsageMonthWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getUsageMonthWithHttpInfo
     *
     * Get month-to-date usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $year 4-digit year. (optional)
     * @param  string $month 2-digit month. (optional)
     * @param  bool $billable_units If &#x60;true&#x60;, return results as billable units. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalUsageMonthResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsageMonthWithHttpInfo($options)
    {
        $request = $this->getUsageMonthRequest($options);

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
                    if ('\Fastly\Model\HistoricalUsageMonthResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalUsageMonthResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalUsageMonthResponse';
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
                        '\Fastly\Model\HistoricalUsageMonthResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUsageMonthAsync
     *
     * Get month-to-date usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $year 4-digit year. (optional)
     * @param  string $month 2-digit month. (optional)
     * @param  bool $billable_units If &#x60;true&#x60;, return results as billable units. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageMonthAsync($options)
    {
        return $this->getUsageMonthAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsageMonthAsyncWithHttpInfo
     *
     * Get month-to-date usage statistics
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $year 4-digit year. (optional)
     * @param  string $month 2-digit month. (optional)
     * @param  bool $billable_units If &#x60;true&#x60;, return results as billable units. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageMonthAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalUsageMonthResponse';
        $request = $this->getUsageMonthRequest($options);

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
     * Create request for operation 'getUsageMonth'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $year 4-digit year. (optional)
     * @param  string $month 2-digit month. (optional)
     * @param  bool $billable_units If &#x60;true&#x60;, return results as billable units. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUsageMonthRequest($options)
    {
        // unbox the parameters from the associative array
        $year = array_key_exists('year', $options) ? $options['year'] : null;
        $month = array_key_exists('month', $options) ? $options['month'] : null;
        $billable_units = array_key_exists('billable_units', $options) ? $options['billable_units'] : null;


        $resourcePath = '/stats/usage_by_month';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($year !== null) {
            if('form' === 'form' && is_array($year)) {
                foreach($year as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['year'] = ObjectSerializer::toString($year);
            }
        }
        // query params
        if ($month !== null) {
            if('form' === 'form' && is_array($month)) {
                foreach($month as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['month'] = ObjectSerializer::toString($month);
            }
        }
        // query params
        if ($billable_units !== null) {
            if('form' === 'form' && is_array($billable_units)) {
                foreach($billable_units as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['billable_units'] = ObjectSerializer::toString($billable_units);
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
     * Operation getUsageService
     *
     * Get usage statistics per service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HistoricalUsageServiceResponse
     */
    public function getUsageService($options)
    {
        list($response) = $this->getUsageServiceWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getUsageServiceWithHttpInfo
     *
     * Get usage statistics per service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HistoricalUsageServiceResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsageServiceWithHttpInfo($options)
    {
        $request = $this->getUsageServiceRequest($options);

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
                    if ('\Fastly\Model\HistoricalUsageServiceResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HistoricalUsageServiceResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HistoricalUsageServiceResponse';
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
                        '\Fastly\Model\HistoricalUsageServiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUsageServiceAsync
     *
     * Get usage statistics per service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageServiceAsync($options)
    {
        return $this->getUsageServiceAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsageServiceAsyncWithHttpInfo
     *
     * Get usage statistics per service
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsageServiceAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HistoricalUsageServiceResponse';
        $request = $this->getUsageServiceRequest($options);

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
     * Create request for operation 'getUsageService'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $from Timestamp that defines the start of the window for which to fetch statistics, including the timestamp itself. Accepts Unix timestamps, or any form of input parsable by the [Chronic Ruby library](https://github.com/mojombo/chronic), such as &#39;yesterday&#39;, or &#39;two weeks ago&#39;. Default varies based on the value of &#x60;by&#x60;. (optional)
     * @param  string $to Timestamp that defines the end of the window for which to fetch statistics. Accepts the same formats as &#x60;from&#x60;. (optional, default to 'now')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUsageServiceRequest($options)
    {
        // unbox the parameters from the associative array
        $from = array_key_exists('from', $options) ? $options['from'] : null;
        $to = array_key_exists('to', $options) ? $options['to'] : 'now';


        $resourcePath = '/stats/usage_by_service';
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
