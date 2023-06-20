<?php
/**
 * WafExclusionsApi
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
 * WafExclusionsApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class WafExclusionsApi
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
     * Operation createWafRuleExclusion
     *
     * Create a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion waf_exclusion (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafExclusionResponse
     * @deprecated
     */
    public function createWafRuleExclusion($options)
    {
        list($response) = $this->createWafRuleExclusionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createWafRuleExclusionWithHttpInfo
     *
     * Create a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafExclusionResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function createWafRuleExclusionWithHttpInfo($options)
    {
        $request = $this->createWafRuleExclusionRequest($options);

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
                    if ('\Fastly\Model\WafExclusionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafExclusionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafExclusionResponse';
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
                        '\Fastly\Model\WafExclusionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createWafRuleExclusionAsync
     *
     * Create a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function createWafRuleExclusionAsync($options)
    {
        return $this->createWafRuleExclusionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createWafRuleExclusionAsyncWithHttpInfo
     *
     * Create a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function createWafRuleExclusionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafExclusionResponse';
        $request = $this->createWafRuleExclusionRequest($options);

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
     * Create request for operation 'createWafRuleExclusion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function createWafRuleExclusionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;
        $waf_exclusion = array_key_exists('waf_exclusion', $options) ? $options['waf_exclusion'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling createWafRuleExclusion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling createWafRuleExclusion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
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
        if (isset($waf_exclusion)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($waf_exclusion));
            } else {
                $httpBody = $waf_exclusion;
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
     * Operation deleteWafRuleExclusion
     *
     * Delete a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     * @deprecated
     */
    public function deleteWafRuleExclusion($options)
    {
        $this->deleteWafRuleExclusionWithHttpInfo($options);
    }

    /**
     * Operation deleteWafRuleExclusionWithHttpInfo
     *
     * Delete a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function deleteWafRuleExclusionWithHttpInfo($options)
    {
        $request = $this->deleteWafRuleExclusionRequest($options);

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
     * Operation deleteWafRuleExclusionAsync
     *
     * Delete a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function deleteWafRuleExclusionAsync($options)
    {
        return $this->deleteWafRuleExclusionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteWafRuleExclusionAsyncWithHttpInfo
     *
     * Delete a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function deleteWafRuleExclusionAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteWafRuleExclusionRequest($options);

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
     * Create request for operation 'deleteWafRuleExclusion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function deleteWafRuleExclusionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;
        $exclusion_number = array_key_exists('exclusion_number', $options) ? $options['exclusion_number'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling deleteWafRuleExclusion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling deleteWafRuleExclusion'
            );
        }
        // verify the required parameter 'exclusion_number' is set
        if ($exclusion_number === null || (is_array($exclusion_number) && count($exclusion_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $exclusion_number when calling deleteWafRuleExclusion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
                $resourcePath
            );
        }
        // path params
        if ($exclusion_number !== null) {
            $resourcePath = str_replace(
                '{' . 'exclusion_number' . '}',
                ObjectSerializer::toPathValue($exclusion_number),
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
     * Operation getWafRuleExclusion
     *
     * Get a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafExclusionResponse
     * @deprecated
     */
    public function getWafRuleExclusion($options)
    {
        list($response) = $this->getWafRuleExclusionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getWafRuleExclusionWithHttpInfo
     *
     * Get a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafExclusionResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function getWafRuleExclusionWithHttpInfo($options)
    {
        $request = $this->getWafRuleExclusionRequest($options);

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
                    if ('\Fastly\Model\WafExclusionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafExclusionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafExclusionResponse';
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
                        '\Fastly\Model\WafExclusionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getWafRuleExclusionAsync
     *
     * Get a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function getWafRuleExclusionAsync($options)
    {
        return $this->getWafRuleExclusionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWafRuleExclusionAsyncWithHttpInfo
     *
     * Get a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function getWafRuleExclusionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafExclusionResponse';
        $request = $this->getWafRuleExclusionRequest($options);

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
     * Create request for operation 'getWafRuleExclusion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function getWafRuleExclusionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;
        $exclusion_number = array_key_exists('exclusion_number', $options) ? $options['exclusion_number'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling getWafRuleExclusion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling getWafRuleExclusion'
            );
        }
        // verify the required parameter 'exclusion_number' is set
        if ($exclusion_number === null || (is_array($exclusion_number) && count($exclusion_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $exclusion_number when calling getWafRuleExclusion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
                $resourcePath
            );
        }
        // path params
        if ($exclusion_number !== null) {
            $resourcePath = str_replace(
                '{' . 'exclusion_number' . '}',
                ObjectSerializer::toPathValue($exclusion_number),
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
     * Operation listWafRuleExclusions
     *
     * List WAF rule exclusions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_exclusion_type Filters the results based on this exclusion type. (optional)
     * @param  string $filter_name Filters the results based on name. (optional)
     * @param  int $filter_waf_rules_modsec_rule_id Filters the results based on this ModSecurity rule ID. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rules&#x60; and &#x60;waf_rule_revisions&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafExclusionsResponse
     * @deprecated
     */
    public function listWafRuleExclusions($options)
    {
        list($response) = $this->listWafRuleExclusionsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listWafRuleExclusionsWithHttpInfo
     *
     * List WAF rule exclusions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_exclusion_type Filters the results based on this exclusion type. (optional)
     * @param  string $filter_name Filters the results based on name. (optional)
     * @param  int $filter_waf_rules_modsec_rule_id Filters the results based on this ModSecurity rule ID. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rules&#x60; and &#x60;waf_rule_revisions&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafExclusionsResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function listWafRuleExclusionsWithHttpInfo($options)
    {
        $request = $this->listWafRuleExclusionsRequest($options);

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
                    if ('\Fastly\Model\WafExclusionsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafExclusionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafExclusionsResponse';
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
                        '\Fastly\Model\WafExclusionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listWafRuleExclusionsAsync
     *
     * List WAF rule exclusions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_exclusion_type Filters the results based on this exclusion type. (optional)
     * @param  string $filter_name Filters the results based on name. (optional)
     * @param  int $filter_waf_rules_modsec_rule_id Filters the results based on this ModSecurity rule ID. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rules&#x60; and &#x60;waf_rule_revisions&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function listWafRuleExclusionsAsync($options)
    {
        return $this->listWafRuleExclusionsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listWafRuleExclusionsAsyncWithHttpInfo
     *
     * List WAF rule exclusions
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_exclusion_type Filters the results based on this exclusion type. (optional)
     * @param  string $filter_name Filters the results based on name. (optional)
     * @param  int $filter_waf_rules_modsec_rule_id Filters the results based on this ModSecurity rule ID. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rules&#x60; and &#x60;waf_rule_revisions&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function listWafRuleExclusionsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafExclusionsResponse';
        $request = $this->listWafRuleExclusionsRequest($options);

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
     * Create request for operation 'listWafRuleExclusions'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_exclusion_type Filters the results based on this exclusion type. (optional)
     * @param  string $filter_name Filters the results based on name. (optional)
     * @param  int $filter_waf_rules_modsec_rule_id Filters the results based on this ModSecurity rule ID. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rules&#x60; and &#x60;waf_rule_revisions&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function listWafRuleExclusionsRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_exclusion_type = array_key_exists('filter_exclusion_type', $options) ? $options['filter_exclusion_type'] : null;
        $filter_name = array_key_exists('filter_name', $options) ? $options['filter_name'] : null;
        $filter_waf_rules_modsec_rule_id = array_key_exists('filter_waf_rules_modsec_rule_id', $options) ? $options['filter_waf_rules_modsec_rule_id'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;

        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafExclusionsApi.listWafRuleExclusions, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafExclusionsApi.listWafRuleExclusions, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling listWafRuleExclusions'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling listWafRuleExclusions'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_exclusion_type !== null) {
            if('form' === 'form' && is_array($filter_exclusion_type)) {
                foreach($filter_exclusion_type as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[exclusion_type]'] = ObjectSerializer::toString($filter_exclusion_type);
            }
        }
        // query params
        if ($filter_name !== null) {
            if('form' === 'form' && is_array($filter_name)) {
                foreach($filter_name as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[name]'] = ObjectSerializer::toString($filter_name);
            }
        }
        // query params
        if ($filter_waf_rules_modsec_rule_id !== null) {
            if('form' === 'form' && is_array($filter_waf_rules_modsec_rule_id)) {
                foreach($filter_waf_rules_modsec_rule_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[waf_rules.modsec_rule_id]'] = ObjectSerializer::toString($filter_waf_rules_modsec_rule_id);
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
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
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
     * Operation updateWafRuleExclusion
     *
     * Update a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion waf_exclusion (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafExclusionResponse
     * @deprecated
     */
    public function updateWafRuleExclusion($options)
    {
        list($response) = $this->updateWafRuleExclusionWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateWafRuleExclusionWithHttpInfo
     *
     * Update a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafExclusionResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function updateWafRuleExclusionWithHttpInfo($options)
    {
        $request = $this->updateWafRuleExclusionRequest($options);

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
                case 201:
                    if ('\Fastly\Model\WafExclusionResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafExclusionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafExclusionResponse';
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
                        '\Fastly\Model\WafExclusionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateWafRuleExclusionAsync
     *
     * Update a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function updateWafRuleExclusionAsync($options)
    {
        return $this->updateWafRuleExclusionAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateWafRuleExclusionAsyncWithHttpInfo
     *
     * Update a WAF rule exclusion
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function updateWafRuleExclusionAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafExclusionResponse';
        $request = $this->updateWafRuleExclusionRequest($options);

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
     * Create request for operation 'updateWafRuleExclusion'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $firewall_version_number Integer identifying a WAF firewall version. (required)
     * @param  int $exclusion_number A numeric ID identifying a WAF exclusion. (required)
     * @param  \Fastly\Model\WafExclusion $waf_exclusion (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function updateWafRuleExclusionRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $firewall_version_number = array_key_exists('firewall_version_number', $options) ? $options['firewall_version_number'] : null;
        $exclusion_number = array_key_exists('exclusion_number', $options) ? $options['exclusion_number'] : null;
        $waf_exclusion = array_key_exists('waf_exclusion', $options) ? $options['waf_exclusion'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling updateWafRuleExclusion'
            );
        }
        // verify the required parameter 'firewall_version_number' is set
        if ($firewall_version_number === null || (is_array($firewall_version_number) && count($firewall_version_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_version_number when calling updateWafRuleExclusion'
            );
        }
        // verify the required parameter 'exclusion_number' is set
        if ($exclusion_number === null || (is_array($exclusion_number) && count($exclusion_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $exclusion_number when calling updateWafRuleExclusion'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($firewall_version_number !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_version_number' . '}',
                ObjectSerializer::toPathValue($firewall_version_number),
                $resourcePath
            );
        }
        // path params
        if ($exclusion_number !== null) {
            $resourcePath = str_replace(
                '{' . 'exclusion_number' . '}',
                ObjectSerializer::toPathValue($exclusion_number),
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
        if (isset($waf_exclusion)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($waf_exclusion));
            } else {
                $httpBody = $waf_exclusion;
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
