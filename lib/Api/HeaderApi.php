<?php
/**
 * HeaderApi
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
 * HeaderApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class HeaderApi
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
     * Operation createHeaderObject
     *
     * Create a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HeaderResponse
     */
    public function createHeaderObject($options)
    {
        list($response) = $this->createHeaderObjectWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createHeaderObjectWithHttpInfo
     *
     * Create a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HeaderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createHeaderObjectWithHttpInfo($options)
    {
        $request = $this->createHeaderObjectRequest($options);

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
                case 200:
                    if ('\Fastly\Model\HeaderResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HeaderResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HeaderResponse';
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
                        '\Fastly\Model\HeaderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createHeaderObjectAsync
     *
     * Create a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createHeaderObjectAsync($options)
    {
        return $this->createHeaderObjectAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createHeaderObjectAsyncWithHttpInfo
     *
     * Create a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createHeaderObjectAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HeaderResponse';
        $request = $this->createHeaderObjectRequest($options);

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
     * Create request for operation 'createHeaderObject'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createHeaderObjectRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $action = array_key_exists('action', $options) ? $options['action'] : null;
        $cache_condition = array_key_exists('cache_condition', $options) ? $options['cache_condition'] : null;
        $dst = array_key_exists('dst', $options) ? $options['dst'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $regex = array_key_exists('regex', $options) ? $options['regex'] : null;
        $request_condition = array_key_exists('request_condition', $options) ? $options['request_condition'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $src = array_key_exists('src', $options) ? $options['src'] : null;
        $substitution = array_key_exists('substitution', $options) ? $options['substitution'] : null;
        $type = array_key_exists('type', $options) ? $options['type'] : null;
        $ignore_if_set = array_key_exists('ignore_if_set', $options) ? $options['ignore_if_set'] : null;
        $priority = array_key_exists('priority', $options) ? $options['priority'] : '100';

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createHeaderObject'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createHeaderObject'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/header';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
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

        // form params
        if ($action !== null) {
            $formParams['action'] = ObjectSerializer::toFormValue($action);
        }
        // form params
        if ($cache_condition !== null) {
            $formParams['cache_condition'] = ObjectSerializer::toFormValue($cache_condition);
        }
        // form params
        if ($dst !== null) {
            $formParams['dst'] = ObjectSerializer::toFormValue($dst);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($regex !== null) {
            $formParams['regex'] = ObjectSerializer::toFormValue($regex);
        }
        // form params
        if ($request_condition !== null) {
            $formParams['request_condition'] = ObjectSerializer::toFormValue($request_condition);
        }
        // form params
        if ($response_condition !== null) {
            $formParams['response_condition'] = ObjectSerializer::toFormValue($response_condition);
        }
        // form params
        if ($src !== null) {
            $formParams['src'] = ObjectSerializer::toFormValue($src);
        }
        // form params
        if ($substitution !== null) {
            $formParams['substitution'] = ObjectSerializer::toFormValue($substitution);
        }
        // form params
        if ($type !== null) {
            $formParams['type'] = ObjectSerializer::toFormValue($type);
        }
        // form params
        if ($ignore_if_set !== null) {
            $formParams['ignore_if_set'] = ObjectSerializer::toFormValue($ignore_if_set);
        }
        // form params
        if ($priority !== null) {
            $formParams['priority'] = ObjectSerializer::toFormValue($priority);
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteHeaderObject
     *
     * Delete a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteHeaderObject($options)
    {
        list($response) = $this->deleteHeaderObjectWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteHeaderObjectWithHttpInfo
     *
     * Delete a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteHeaderObjectWithHttpInfo($options)
    {
        $request = $this->deleteHeaderObjectRequest($options);

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
     * Operation deleteHeaderObjectAsync
     *
     * Delete a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteHeaderObjectAsync($options)
    {
        return $this->deleteHeaderObjectAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteHeaderObjectAsyncWithHttpInfo
     *
     * Delete a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteHeaderObjectAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteHeaderObjectRequest($options);

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
     * Create request for operation 'deleteHeaderObject'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteHeaderObjectRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $header_name = array_key_exists('header_name', $options) ? $options['header_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling deleteHeaderObject'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteHeaderObject'
            );
        }
        // verify the required parameter 'header_name' is set
        if ($header_name === null || (is_array($header_name) && count($header_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $header_name when calling deleteHeaderObject'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/header/{header_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
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
        if ($header_name !== null) {
            $resourcePath = str_replace(
                '{' . 'header_name' . '}',
                ObjectSerializer::toPathValue($header_name),
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
     * Operation getHeaderObject
     *
     * Get a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HeaderResponse
     */
    public function getHeaderObject($options)
    {
        list($response) = $this->getHeaderObjectWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getHeaderObjectWithHttpInfo
     *
     * Get a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HeaderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHeaderObjectWithHttpInfo($options)
    {
        $request = $this->getHeaderObjectRequest($options);

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
                    if ('\Fastly\Model\HeaderResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HeaderResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HeaderResponse';
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
                        '\Fastly\Model\HeaderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getHeaderObjectAsync
     *
     * Get a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHeaderObjectAsync($options)
    {
        return $this->getHeaderObjectAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getHeaderObjectAsyncWithHttpInfo
     *
     * Get a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getHeaderObjectAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HeaderResponse';
        $request = $this->getHeaderObjectRequest($options);

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
     * Create request for operation 'getHeaderObject'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getHeaderObjectRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $header_name = array_key_exists('header_name', $options) ? $options['header_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getHeaderObject'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getHeaderObject'
            );
        }
        // verify the required parameter 'header_name' is set
        if ($header_name === null || (is_array($header_name) && count($header_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $header_name when calling getHeaderObject'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/header/{header_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
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
        if ($header_name !== null) {
            $resourcePath = str_replace(
                '{' . 'header_name' . '}',
                ObjectSerializer::toPathValue($header_name),
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
     * Operation listHeaderObjects
     *
     * List Header objects
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HeaderResponse[]
     */
    public function listHeaderObjects($options)
    {
        list($response) = $this->listHeaderObjectsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listHeaderObjectsWithHttpInfo
     *
     * List Header objects
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HeaderResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listHeaderObjectsWithHttpInfo($options)
    {
        $request = $this->listHeaderObjectsRequest($options);

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
                    if ('\Fastly\Model\HeaderResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HeaderResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HeaderResponse[]';
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
                        '\Fastly\Model\HeaderResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listHeaderObjectsAsync
     *
     * List Header objects
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listHeaderObjectsAsync($options)
    {
        return $this->listHeaderObjectsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listHeaderObjectsAsyncWithHttpInfo
     *
     * List Header objects
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listHeaderObjectsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HeaderResponse[]';
        $request = $this->listHeaderObjectsRequest($options);

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
     * Create request for operation 'listHeaderObjects'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listHeaderObjectsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listHeaderObjects'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listHeaderObjects'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/header';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
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
     * Operation updateHeaderObject
     *
     * Update a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\HeaderResponse
     */
    public function updateHeaderObject($options)
    {
        list($response) = $this->updateHeaderObjectWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateHeaderObjectWithHttpInfo
     *
     * Update a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\HeaderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateHeaderObjectWithHttpInfo($options)
    {
        $request = $this->updateHeaderObjectRequest($options);

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
                    if ('\Fastly\Model\HeaderResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\HeaderResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\HeaderResponse';
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
                        '\Fastly\Model\HeaderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateHeaderObjectAsync
     *
     * Update a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateHeaderObjectAsync($options)
    {
        return $this->updateHeaderObjectAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateHeaderObjectAsyncWithHttpInfo
     *
     * Update a Header object
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateHeaderObjectAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\HeaderResponse';
        $request = $this->updateHeaderObjectRequest($options);

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
     * Create request for operation 'updateHeaderObject'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $header_name A handle to refer to this Header object. (required)
     * @param  string $action Accepts a string value. (optional)
     * @param  string $cache_condition Name of the cache condition controlling when this configuration applies. (optional)
     * @param  string $dst Header to set. (optional)
     * @param  string $name A handle to refer to this Header object. (optional)
     * @param  string $regex Regular expression to use. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $response_condition Optional name of a response condition to apply. (optional)
     * @param  string $src Variable to be used as a source for the header content. Does not apply to &#x60;delete&#x60; action. (optional)
     * @param  string $substitution Value to substitute in place of regular expression. Only applies to &#x60;regex&#x60; and &#x60;regex_repeat&#x60; actions. (optional)
     * @param  string $type Accepts a string value. (optional)
     * @param  string $ignore_if_set Don&#39;t add the header if it is added already. Only applies to &#39;set&#39; action. Numerical value (\\\&quot;0\\\&quot; &#x3D; false, \\\&quot;1\\\&quot; &#x3D; true) (optional)
     * @param  string $priority Priority determines execution order. Lower numbers execute first. (optional, default to '100')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateHeaderObjectRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $header_name = array_key_exists('header_name', $options) ? $options['header_name'] : null;
        $action = array_key_exists('action', $options) ? $options['action'] : null;
        $cache_condition = array_key_exists('cache_condition', $options) ? $options['cache_condition'] : null;
        $dst = array_key_exists('dst', $options) ? $options['dst'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $regex = array_key_exists('regex', $options) ? $options['regex'] : null;
        $request_condition = array_key_exists('request_condition', $options) ? $options['request_condition'] : null;
        $response_condition = array_key_exists('response_condition', $options) ? $options['response_condition'] : null;
        $src = array_key_exists('src', $options) ? $options['src'] : null;
        $substitution = array_key_exists('substitution', $options) ? $options['substitution'] : null;
        $type = array_key_exists('type', $options) ? $options['type'] : null;
        $ignore_if_set = array_key_exists('ignore_if_set', $options) ? $options['ignore_if_set'] : null;
        $priority = array_key_exists('priority', $options) ? $options['priority'] : '100';

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateHeaderObject'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateHeaderObject'
            );
        }
        // verify the required parameter 'header_name' is set
        if ($header_name === null || (is_array($header_name) && count($header_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $header_name when calling updateHeaderObject'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/header/{header_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                '{' . 'service_id' . '}',
                ObjectSerializer::toPathValue($service_id),
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
        if ($header_name !== null) {
            $resourcePath = str_replace(
                '{' . 'header_name' . '}',
                ObjectSerializer::toPathValue($header_name),
                $resourcePath
            );
        }

        // form params
        if ($action !== null) {
            $formParams['action'] = ObjectSerializer::toFormValue($action);
        }
        // form params
        if ($cache_condition !== null) {
            $formParams['cache_condition'] = ObjectSerializer::toFormValue($cache_condition);
        }
        // form params
        if ($dst !== null) {
            $formParams['dst'] = ObjectSerializer::toFormValue($dst);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($regex !== null) {
            $formParams['regex'] = ObjectSerializer::toFormValue($regex);
        }
        // form params
        if ($request_condition !== null) {
            $formParams['request_condition'] = ObjectSerializer::toFormValue($request_condition);
        }
        // form params
        if ($response_condition !== null) {
            $formParams['response_condition'] = ObjectSerializer::toFormValue($response_condition);
        }
        // form params
        if ($src !== null) {
            $formParams['src'] = ObjectSerializer::toFormValue($src);
        }
        // form params
        if ($substitution !== null) {
            $formParams['substitution'] = ObjectSerializer::toFormValue($substitution);
        }
        // form params
        if ($type !== null) {
            $formParams['type'] = ObjectSerializer::toFormValue($type);
        }
        // form params
        if ($ignore_if_set !== null) {
            $formParams['ignore_if_set'] = ObjectSerializer::toFormValue($ignore_if_set);
        }
        // form params
        if ($priority !== null) {
            $formParams['priority'] = ObjectSerializer::toFormValue($priority);
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
