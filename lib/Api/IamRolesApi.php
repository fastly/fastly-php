<?php
/**
 * IamRolesApi
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
 * IamRolesApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class IamRolesApi
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
     * Operation deleteARole
     *
     * Delete a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteARole($options)
    {
        $this->deleteARoleWithHttpInfo($options);
    }

    /**
     * Operation deleteARoleWithHttpInfo
     *
     * Delete a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteARoleWithHttpInfo($options)
    {
        $request = $this->deleteARoleRequest($options);

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
     * Operation deleteARoleAsync
     *
     * Delete a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteARoleAsync($options)
    {
        return $this->deleteARoleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteARoleAsyncWithHttpInfo
     *
     * Delete a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteARoleAsyncWithHttpInfo($options)
    {
        $returnType = '';
        $request = $this->deleteARoleRequest($options);

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
     * Create request for operation 'deleteARole'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteARoleRequest($options)
    {
        // unbox the parameters from the associative array
        $role_id = array_key_exists('role_id', $options) ? $options['role_id'] : null;

        // verify the required parameter 'role_id' is set
        if ($role_id === null || (is_array($role_id) && count($role_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $role_id when calling deleteARole'
            );
        }

        $resourcePath = '/roles/{role_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($role_id !== null) {
            $resourcePath = str_replace(
                '{' . 'role_id' . '}',
                ObjectSerializer::toPathValue($role_id),
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getARole
     *
     * Get a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function getARole($options)
    {
        list($response) = $this->getARoleWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getARoleWithHttpInfo
     *
     * Get a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getARoleWithHttpInfo($options)
    {
        $request = $this->getARoleRequest($options);

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getARoleAsync
     *
     * Get a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getARoleAsync($options)
    {
        return $this->getARoleAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getARoleAsyncWithHttpInfo
     *
     * Get a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getARoleAsyncWithHttpInfo($options)
    {
        $returnType = 'object';
        $request = $this->getARoleRequest($options);

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
     * Create request for operation 'getARole'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getARoleRequest($options)
    {
        // unbox the parameters from the associative array
        $role_id = array_key_exists('role_id', $options) ? $options['role_id'] : null;

        // verify the required parameter 'role_id' is set
        if ($role_id === null || (is_array($role_id) && count($role_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $role_id when calling getARole'
            );
        }

        $resourcePath = '/roles/{role_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($role_id !== null) {
            $resourcePath = str_replace(
                '{' . 'role_id' . '}',
                ObjectSerializer::toPathValue($role_id),
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listRolePermissions
     *
     * List permissions in a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function listRolePermissions($options)
    {
        list($response) = $this->listRolePermissionsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listRolePermissionsWithHttpInfo
     *
     * List permissions in a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listRolePermissionsWithHttpInfo($options)
    {
        $request = $this->listRolePermissionsRequest($options);

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listRolePermissionsAsync
     *
     * List permissions in a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRolePermissionsAsync($options)
    {
        return $this->listRolePermissionsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listRolePermissionsAsyncWithHttpInfo
     *
     * List permissions in a role
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRolePermissionsAsyncWithHttpInfo($options)
    {
        $returnType = 'object';
        $request = $this->listRolePermissionsRequest($options);

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
     * Create request for operation 'listRolePermissions'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $role_id Alphanumeric string identifying the role. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRolePermissionsRequest($options)
    {
        // unbox the parameters from the associative array
        $role_id = array_key_exists('role_id', $options) ? $options['role_id'] : null;

        // verify the required parameter 'role_id' is set
        if ($role_id === null || (is_array($role_id) && count($role_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $role_id when calling listRolePermissions'
            );
        }

        $resourcePath = '/roles/{role_id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($role_id !== null) {
            $resourcePath = str_replace(
                '{' . 'role_id' . '}',
                ObjectSerializer::toPathValue($role_id),
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listRoles
     *
     * List roles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $per_page Number of records per page. (optional, default to 20)
     * @param  int $page Current page. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function listRoles($options)
    {
        list($response) = $this->listRolesWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listRolesWithHttpInfo
     *
     * List roles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $per_page Number of records per page. (optional, default to 20)
     * @param  int $page Current page. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function listRolesWithHttpInfo($options)
    {
        $request = $this->listRolesRequest($options);

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listRolesAsync
     *
     * List roles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $per_page Number of records per page. (optional, default to 20)
     * @param  int $page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRolesAsync($options)
    {
        return $this->listRolesAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listRolesAsyncWithHttpInfo
     *
     * List roles
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $per_page Number of records per page. (optional, default to 20)
     * @param  int $page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRolesAsyncWithHttpInfo($options)
    {
        $returnType = 'object';
        $request = $this->listRolesRequest($options);

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
     * Create request for operation 'listRoles'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $per_page Number of records per page. (optional, default to 20)
     * @param  int $page Current page. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRolesRequest($options)
    {
        // unbox the parameters from the associative array
        $per_page = array_key_exists('per_page', $options) ? $options['per_page'] : 20;
        $page = array_key_exists('page', $options) ? $options['page'] : null;

        if ($per_page !== null && $per_page > 100) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling IamRolesApi.listRoles, must be smaller than or equal to 100.');
        }
        if ($per_page !== null && $per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling IamRolesApi.listRoles, must be bigger than or equal to 1.');
        }


        $resourcePath = '/roles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($per_page !== null) {
            if('form' === 'form' && is_array($per_page)) {
                foreach($per_page as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['per_page'] = ObjectSerializer::toString($per_page);
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = ObjectSerializer::toString($value);
                }
            }
            else {
                $queryParams['page'] = ObjectSerializer::toString($page);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
