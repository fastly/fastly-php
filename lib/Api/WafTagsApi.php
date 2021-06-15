<?php
/**
 * WafTagsApi
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
 * WafTagsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class WafTagsApi
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
     * Operation listWafTags
     *
     * List tags
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_name Limit the returned tags to a specific name. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional. (optional, default to 'waf_rules')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafTagsResponse
     */
    public function listWafTags($options)
    {
        list($response) = $this->listWafTagsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listWafTagsWithHttpInfo
     *
     * List tags
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_name Limit the returned tags to a specific name. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional. (optional, default to 'waf_rules')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafTagsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWafTagsWithHttpInfo($options)
    {
        $request = $this->listWafTagsRequest($options);

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
                    if ('\Fastly\Model\WafTagsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafTagsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafTagsResponse';
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
                        '\Fastly\Model\WafTagsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listWafTagsAsync
     *
     * List tags
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_name Limit the returned tags to a specific name. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional. (optional, default to 'waf_rules')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWafTagsAsync($options)
    {
        return $this->listWafTagsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listWafTagsAsyncWithHttpInfo
     *
     * List tags
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_name Limit the returned tags to a specific name. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional. (optional, default to 'waf_rules')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listWafTagsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafTagsResponse';
        $request = $this->listWafTagsRequest($options);

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
     * Create request for operation 'listWafTags'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $filter_name Limit the returned tags to a specific name. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional. (optional, default to 'waf_rules')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listWafTagsRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_name = array_key_exists('filter_name', $options) ? $options['filter_name'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;
        $include = array_key_exists('include', $options) ? $options['include'] : 'waf_rules';

        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafTagsApi.listWafTags, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafTagsApi.listWafTags, must be bigger than or equal to 1.');
        }


        $resourcePath = '/waf/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_name !== null) {
            if('form' === 'form' && is_array($filter_name)) {
                foreach($filter_name as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter[name]'] = $filter_name;
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
