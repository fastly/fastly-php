<?php
/**
 * WafActiveRulesApi
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
 * WafActiveRulesApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class WafActiveRulesApi
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
     * Operation bulkDeleteWafActiveRules
     *
     * Delete multiple active rules from a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  array<string,object> $request_body request_body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     * @deprecated
     */
    public function bulkDeleteWafActiveRules($options)
    {
        $this->bulkDeleteWafActiveRulesWithHttpInfo($options);
    }

    /**
     * Operation bulkDeleteWafActiveRulesWithHttpInfo
     *
     * Delete multiple active rules from a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function bulkDeleteWafActiveRulesWithHttpInfo($options)
    {
        $request = $this->bulkDeleteWafActiveRulesRequest($options);

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
     * Operation bulkDeleteWafActiveRulesAsync
     *
     * Delete multiple active rules from a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function bulkDeleteWafActiveRulesAsync($options)
    {
        return $this->bulkDeleteWafActiveRulesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkDeleteWafActiveRulesAsyncWithHttpInfo
     *
     * Delete multiple active rules from a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function bulkDeleteWafActiveRulesAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->bulkDeleteWafActiveRulesRequest($options);

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
     * Create request for operation 'bulkDeleteWafActiveRules'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  array<string,object> $request_body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function bulkDeleteWafActiveRulesRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $request_body = array_key_exists('request_body', $options) ? $options['request_body'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling bulkDeleteWafActiveRules'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling bulkDeleteWafActiveRules'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules';
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
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
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
                ['application/vnd.api+json; ext=bulk']
            );
        }

        // for model (json/xml)
        if (isset($request_body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($request_body));
            } else {
                $httpBody = $request_body;
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bulkUpdateWafActiveRules
     *
     * Update multiple active rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRuleData $body body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     * @deprecated
     */
    public function bulkUpdateWafActiveRules($options)
    {
        $this->bulkUpdateWafActiveRulesWithHttpInfo($options);
    }

    /**
     * Operation bulkUpdateWafActiveRulesWithHttpInfo
     *
     * Update multiple active rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRuleData $body (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function bulkUpdateWafActiveRulesWithHttpInfo($options)
    {
        $request = $this->bulkUpdateWafActiveRulesRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation bulkUpdateWafActiveRulesAsync
     *
     * Update multiple active rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRuleData $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function bulkUpdateWafActiveRulesAsync($options)
    {
        return $this->bulkUpdateWafActiveRulesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkUpdateWafActiveRulesAsyncWithHttpInfo
     *
     * Update multiple active rules
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRuleData $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function bulkUpdateWafActiveRulesAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->bulkUpdateWafActiveRulesRequest($options);

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
     * Create request for operation 'bulkUpdateWafActiveRules'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRuleData $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function bulkUpdateWafActiveRulesRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $body = array_key_exists('body', $options) ? $options['body'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling bulkUpdateWafActiveRules'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling bulkUpdateWafActiveRules'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/bulk';
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
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
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
                ['application/vnd.api+json']
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
     * Operation createWafActiveRule
     *
     * Add a rule to a WAF as an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule waf_active_rule (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafActiveRuleCreationResponse
     * @deprecated
     */
    public function createWafActiveRule($options)
    {
        list($response) = $this->createWafActiveRuleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createWafActiveRuleWithHttpInfo
     *
     * Add a rule to a WAF as an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafActiveRuleCreationResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function createWafActiveRuleWithHttpInfo($options)
    {
        $request = $this->createWafActiveRuleRequest($options);

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
                    if ('\Fastly\Model\WafActiveRuleCreationResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafActiveRuleCreationResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafActiveRuleCreationResponse';
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
                        '\Fastly\Model\WafActiveRuleCreationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createWafActiveRuleAsync
     *
     * Add a rule to a WAF as an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function createWafActiveRuleAsync($options)
    {
        return $this->createWafActiveRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createWafActiveRuleAsyncWithHttpInfo
     *
     * Add a rule to a WAF as an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function createWafActiveRuleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafActiveRuleCreationResponse';
        $request = $this->createWafActiveRuleRequest($options);

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
     * Create request for operation 'createWafActiveRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function createWafActiveRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $waf_active_rule = array_key_exists('waf_active_rule', $options) ? $options['waf_active_rule'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling createWafActiveRule'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createWafActiveRule'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules';
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
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
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
                ['application/vnd.api+json', 'application/vnd.api+json; ext=bulk']
            );
        }

        // for model (json/xml)
        if (isset($waf_active_rule)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($waf_active_rule));
            } else {
                $httpBody = $waf_active_rule;
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
     * Operation createWafActiveRulesTag
     *
     * Create active rules by tag
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_tag_name Name of the tag. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule waf_active_rule (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     * @deprecated
     */
    public function createWafActiveRulesTag($options)
    {
        $this->createWafActiveRulesTagWithHttpInfo($options);
    }

    /**
     * Operation createWafActiveRulesTagWithHttpInfo
     *
     * Create active rules by tag
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_tag_name Name of the tag. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function createWafActiveRulesTagWithHttpInfo($options)
    {
        $request = $this->createWafActiveRulesTagRequest($options);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation createWafActiveRulesTagAsync
     *
     * Create active rules by tag
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_tag_name Name of the tag. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function createWafActiveRulesTagAsync($options)
    {
        return $this->createWafActiveRulesTagAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createWafActiveRulesTagAsyncWithHttpInfo
     *
     * Create active rules by tag
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_tag_name Name of the tag. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function createWafActiveRulesTagAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->createWafActiveRulesTagRequest($options);

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
     * Create request for operation 'createWafActiveRulesTag'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_tag_name Name of the tag. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function createWafActiveRulesTagRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $waf_tag_name = array_key_exists('waf_tag_name', $options) ? $options['waf_tag_name'] : null;
        $waf_active_rule = array_key_exists('waf_active_rule', $options) ? $options['waf_active_rule'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling createWafActiveRulesTag'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createWafActiveRulesTag'
            );
        }
        // verify the required parameter 'waf_tag_name' is set
        if ($waf_tag_name === null || (is_array($waf_tag_name) && count($waf_tag_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $waf_tag_name when calling createWafActiveRulesTag'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/tags/{waf_tag_name}/active-rules';
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
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
                $resourcePath
            );
        }
        // path params
        if ($waf_tag_name !== null) {
            $resourcePath = str_replace(
                '{' . 'waf_tag_name' . '}',
                ObjectSerializer::toPathValue($waf_tag_name),
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
                ['application/vnd.api+json']
            );
        }

        // for model (json/xml)
        if (isset($waf_active_rule)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($waf_active_rule));
            } else {
                $httpBody = $waf_active_rule;
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
     * Operation deleteWafActiveRule
     *
     * Delete an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     * @deprecated
     */
    public function deleteWafActiveRule($options)
    {
        $this->deleteWafActiveRuleWithHttpInfo($options);
    }

    /**
     * Operation deleteWafActiveRuleWithHttpInfo
     *
     * Delete an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function deleteWafActiveRuleWithHttpInfo($options)
    {
        $request = $this->deleteWafActiveRuleRequest($options);

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
     * Operation deleteWafActiveRuleAsync
     *
     * Delete an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function deleteWafActiveRuleAsync($options)
    {
        return $this->deleteWafActiveRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteWafActiveRuleAsyncWithHttpInfo
     *
     * Delete an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function deleteWafActiveRuleAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteWafActiveRuleRequest($options);

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
     * Create request for operation 'deleteWafActiveRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function deleteWafActiveRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $waf_rule_id = array_key_exists('waf_rule_id', $options) ? $options['waf_rule_id'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling deleteWafActiveRule'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteWafActiveRule'
            );
        }
        // verify the required parameter 'waf_rule_id' is set
        if ($waf_rule_id === null || (is_array($waf_rule_id) && count($waf_rule_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $waf_rule_id when calling deleteWafActiveRule'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id}';
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
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
                $resourcePath
            );
        }
        // path params
        if ($waf_rule_id !== null) {
            $resourcePath = str_replace(
                '{' . 'waf_rule_id' . '}',
                ObjectSerializer::toPathValue($waf_rule_id),
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
     * Operation getWafActiveRule
     *
     * Get an active WAF rule object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafActiveRuleResponse
     * @deprecated
     */
    public function getWafActiveRule($options)
    {
        list($response) = $this->getWafActiveRuleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getWafActiveRuleWithHttpInfo
     *
     * Get an active WAF rule object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafActiveRuleResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function getWafActiveRuleWithHttpInfo($options)
    {
        $request = $this->getWafActiveRuleRequest($options);

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
                    if ('\Fastly\Model\WafActiveRuleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafActiveRuleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafActiveRuleResponse';
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
                        '\Fastly\Model\WafActiveRuleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getWafActiveRuleAsync
     *
     * Get an active WAF rule object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function getWafActiveRuleAsync($options)
    {
        return $this->getWafActiveRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getWafActiveRuleAsyncWithHttpInfo
     *
     * Get an active WAF rule object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function getWafActiveRuleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafActiveRuleResponse';
        $request = $this->getWafActiveRuleRequest($options);

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
     * Create request for operation 'getWafActiveRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function getWafActiveRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $waf_rule_id = array_key_exists('waf_rule_id', $options) ? $options['waf_rule_id'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling getWafActiveRule'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getWafActiveRule'
            );
        }
        // verify the required parameter 'waf_rule_id' is set
        if ($waf_rule_id === null || (is_array($waf_rule_id) && count($waf_rule_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $waf_rule_id when calling getWafActiveRule'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
                $resourcePath
            );
        }
        // path params
        if ($waf_rule_id !== null) {
            $resourcePath = str_replace(
                '{' . 'waf_rule_id' . '}',
                ObjectSerializer::toPathValue($waf_rule_id),
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
     * Operation listWafActiveRules
     *
     * List active rules on a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_status Limit results to active rules with the specified status. (optional)
     * @param  string $filter_waf_rule_revision_message Limit results to active rules with the specified message. (optional)
     * @param  string $filter_waf_rule_revision_modsec_rule_id Limit results to active rules that represent the specified ModSecurity modsec_rule_id. (optional)
     * @param  string $filter_outdated Limit results to active rules referencing an outdated rule revision. (optional)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafActiveRulesResponse
     * @deprecated
     */
    public function listWafActiveRules($options)
    {
        list($response) = $this->listWafActiveRulesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listWafActiveRulesWithHttpInfo
     *
     * List active rules on a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_status Limit results to active rules with the specified status. (optional)
     * @param  string $filter_waf_rule_revision_message Limit results to active rules with the specified message. (optional)
     * @param  string $filter_waf_rule_revision_modsec_rule_id Limit results to active rules that represent the specified ModSecurity modsec_rule_id. (optional)
     * @param  string $filter_outdated Limit results to active rules referencing an outdated rule revision. (optional)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafActiveRulesResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function listWafActiveRulesWithHttpInfo($options)
    {
        $request = $this->listWafActiveRulesRequest($options);

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
                    if ('\Fastly\Model\WafActiveRulesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafActiveRulesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafActiveRulesResponse';
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
                        '\Fastly\Model\WafActiveRulesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listWafActiveRulesAsync
     *
     * List active rules on a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_status Limit results to active rules with the specified status. (optional)
     * @param  string $filter_waf_rule_revision_message Limit results to active rules with the specified message. (optional)
     * @param  string $filter_waf_rule_revision_modsec_rule_id Limit results to active rules that represent the specified ModSecurity modsec_rule_id. (optional)
     * @param  string $filter_outdated Limit results to active rules referencing an outdated rule revision. (optional)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function listWafActiveRulesAsync($options)
    {
        return $this->listWafActiveRulesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listWafActiveRulesAsyncWithHttpInfo
     *
     * List active rules on a WAF
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_status Limit results to active rules with the specified status. (optional)
     * @param  string $filter_waf_rule_revision_message Limit results to active rules with the specified message. (optional)
     * @param  string $filter_waf_rule_revision_modsec_rule_id Limit results to active rules that represent the specified ModSecurity modsec_rule_id. (optional)
     * @param  string $filter_outdated Limit results to active rules referencing an outdated rule revision. (optional)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function listWafActiveRulesAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafActiveRulesResponse';
        $request = $this->listWafActiveRulesRequest($options);

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
     * Create request for operation 'listWafActiveRules'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $filter_status Limit results to active rules with the specified status. (optional)
     * @param  string $filter_waf_rule_revision_message Limit results to active rules with the specified message. (optional)
     * @param  string $filter_waf_rule_revision_modsec_rule_id Limit results to active rules that represent the specified ModSecurity modsec_rule_id. (optional)
     * @param  string $filter_outdated Limit results to active rules referencing an outdated rule revision. (optional)
     * @param  string $include Include relationships. Optional, comma-separated values. Permitted values: &#x60;waf_rule_revision&#x60; and &#x60;waf_firewall_version&#x60;. (optional)
     * @param  int $page_number Current page. (optional)
     * @param  int $page_size Number of records per page. (optional, default to 20)
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function listWafActiveRulesRequest($options)
    {
        // unbox the parameters from the associative array
        $filter_status = array_key_exists('filter_status', $options) ? $options['filter_status'] : null;
        $filter_waf_rule_revision_message = array_key_exists('filter_waf_rule_revision_message', $options) ? $options['filter_waf_rule_revision_message'] : null;
        $filter_waf_rule_revision_modsec_rule_id = array_key_exists('filter_waf_rule_revision_modsec_rule_id', $options) ? $options['filter_waf_rule_revision_modsec_rule_id'] : null;
        $filter_outdated = array_key_exists('filter_outdated', $options) ? $options['filter_outdated'] : null;
        $include = array_key_exists('include', $options) ? $options['include'] : null;
        $page_number = array_key_exists('page_number', $options) ? $options['page_number'] : null;
        $page_size = array_key_exists('page_size', $options) ? $options['page_size'] : 20;
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        if ($page_size !== null && $page_size > 100) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafActiveRulesApi.listWafActiveRules, must be smaller than or equal to 100.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling WafActiveRulesApi.listWafActiveRules, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling listWafActiveRules'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listWafActiveRules'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($filter_status !== null) {
            if('form' === 'form' && is_array($filter_status)) {
                foreach($filter_status as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[status]'] = ObjectSerializer::toString($filter_status);
            }
        }
        // query params
        if ($filter_waf_rule_revision_message !== null) {
            if('form' === 'form' && is_array($filter_waf_rule_revision_message)) {
                foreach($filter_waf_rule_revision_message as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[waf_rule_revision][message]'] = ObjectSerializer::toString($filter_waf_rule_revision_message);
            }
        }
        // query params
        if ($filter_waf_rule_revision_modsec_rule_id !== null) {
            if('form' === 'form' && is_array($filter_waf_rule_revision_modsec_rule_id)) {
                foreach($filter_waf_rule_revision_modsec_rule_id as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[waf_rule_revision][modsec_rule_id]'] = ObjectSerializer::toString($filter_waf_rule_revision_modsec_rule_id);
            }
        }
        // query params
        if ($filter_outdated !== null) {
            if('form' === 'form' && is_array($filter_outdated)) {
                foreach($filter_outdated as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['filter[outdated]'] = ObjectSerializer::toString($filter_outdated);
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


        // path params
        if ($firewall_id !== null) {
            $resourcePath = str_replace(
                '{' . 'firewall_id' . '}',
                ObjectSerializer::toPathValue($firewall_id),
                $resourcePath
            );
        }
        // path params
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
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
     * Operation updateWafActiveRule
     *
     * Update an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule waf_active_rule (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\WafActiveRuleResponse
     * @deprecated
     */
    public function updateWafActiveRule($options)
    {
        list($response) = $this->updateWafActiveRuleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateWafActiveRuleWithHttpInfo
     *
     * Update an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\WafActiveRuleResponse, HTTP status code, HTTP response headers (array of strings)
     * @deprecated
     */
    public function updateWafActiveRuleWithHttpInfo($options)
    {
        $request = $this->updateWafActiveRuleRequest($options);

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
                case 200:
                    if ('\Fastly\Model\WafActiveRuleResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\WafActiveRuleResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\WafActiveRuleResponse';
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
                        '\Fastly\Model\WafActiveRuleResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateWafActiveRuleAsync
     *
     * Update an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function updateWafActiveRuleAsync($options)
    {
        return $this->updateWafActiveRuleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateWafActiveRuleAsyncWithHttpInfo
     *
     * Update an active rule
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function updateWafActiveRuleAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\WafActiveRuleResponse';
        $request = $this->updateWafActiveRuleRequest($options);

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
     * Create request for operation 'updateWafActiveRule'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $firewall_id Alphanumeric string identifying a WAF Firewall. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $waf_rule_id Alphanumeric string identifying a WAF rule. (required)
     * @param  \Fastly\Model\WafActiveRule $waf_active_rule (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     * @deprecated
     */
    public function updateWafActiveRuleRequest($options)
    {
        // unbox the parameters from the associative array
        $firewall_id = array_key_exists('firewall_id', $options) ? $options['firewall_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $waf_rule_id = array_key_exists('waf_rule_id', $options) ? $options['waf_rule_id'] : null;
        $waf_active_rule = array_key_exists('waf_active_rule', $options) ? $options['waf_active_rule'] : null;

        // verify the required parameter 'firewall_id' is set
        if ($firewall_id === null || (is_array($firewall_id) && count($firewall_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $firewall_id when calling updateWafActiveRule'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateWafActiveRule'
            );
        }
        // verify the required parameter 'waf_rule_id' is set
        if ($waf_rule_id === null || (is_array($waf_rule_id) && count($waf_rule_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $waf_rule_id when calling updateWafActiveRule'
            );
        }

        $resourcePath = '/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id}';
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
        if ($version_id !== null) {
            $resourcePath = str_replace(
                '{' . 'version_id' . '}',
                ObjectSerializer::toPathValue($version_id),
                $resourcePath
            );
        }
        // path params
        if ($waf_rule_id !== null) {
            $resourcePath = str_replace(
                '{' . 'waf_rule_id' . '}',
                ObjectSerializer::toPathValue($waf_rule_id),
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
        if (isset($waf_active_rule)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($waf_active_rule));
            } else {
                $httpBody = $waf_active_rule;
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
