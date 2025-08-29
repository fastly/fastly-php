<?php
/**
 * PoolApi
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
 * PoolApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class PoolApi
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
     * Operation createServerPool
     *
     * Create a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to 0)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id service_id (optional)
     * @param  string $version version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\PoolResponsePost
     */
    public function createServerPool($options)
    {
        list($response) = $this->createServerPoolWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createServerPoolWithHttpInfo
     *
     * Create a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to 0)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\PoolResponsePost, HTTP status code, HTTP response headers (array of strings)
     */
    public function createServerPoolWithHttpInfo($options)
    {
        $request = $this->createServerPoolRequest($options);

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
                    if ('\Fastly\Model\PoolResponsePost' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PoolResponsePost', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PoolResponsePost';
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
                        '\Fastly\Model\PoolResponsePost',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createServerPoolAsync
     *
     * Create a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to 0)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createServerPoolAsync($options)
    {
        return $this->createServerPoolAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createServerPoolAsyncWithHttpInfo
     *
     * Create a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to 0)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createServerPoolAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PoolResponsePost';
        $request = $this->createServerPoolRequest($options);

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
     * Create request for operation 'createServerPool'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to 0)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createServerPoolRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $tls_ca_cert = array_key_exists('tls_ca_cert', $options) ? $options['tls_ca_cert'] : 'null';
        $tls_client_cert = array_key_exists('tls_client_cert', $options) ? $options['tls_client_cert'] : 'null';
        $tls_client_key = array_key_exists('tls_client_key', $options) ? $options['tls_client_key'] : 'null';
        $tls_cert_hostname = array_key_exists('tls_cert_hostname', $options) ? $options['tls_cert_hostname'] : 'null';
        $use_tls = array_key_exists('use_tls', $options) ? $options['use_tls'] : 0;
        $created_at = array_key_exists('created_at', $options) ? $options['created_at'] : null;
        $deleted_at = array_key_exists('deleted_at', $options) ? $options['deleted_at'] : null;
        $updated_at = array_key_exists('updated_at', $options) ? $options['updated_at'] : null;
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version = array_key_exists('version', $options) ? $options['version'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $shield = array_key_exists('shield', $options) ? $options['shield'] : 'null';
        $request_condition = array_key_exists('request_condition', $options) ? $options['request_condition'] : null;
        $tls_ciphers = array_key_exists('tls_ciphers', $options) ? $options['tls_ciphers'] : null;
        $tls_sni_hostname = array_key_exists('tls_sni_hostname', $options) ? $options['tls_sni_hostname'] : null;
        $min_tls_version = array_key_exists('min_tls_version', $options) ? $options['min_tls_version'] : null;
        $max_tls_version = array_key_exists('max_tls_version', $options) ? $options['max_tls_version'] : null;
        $healthcheck = array_key_exists('healthcheck', $options) ? $options['healthcheck'] : null;
        $comment = array_key_exists('comment', $options) ? $options['comment'] : null;
        $type = array_key_exists('type', $options) ? $options['type'] : null;
        $override_host = array_key_exists('override_host', $options) ? $options['override_host'] : 'null';
        $between_bytes_timeout = array_key_exists('between_bytes_timeout', $options) ? $options['between_bytes_timeout'] : 10000;
        $connect_timeout = array_key_exists('connect_timeout', $options) ? $options['connect_timeout'] : null;
        $first_byte_timeout = array_key_exists('first_byte_timeout', $options) ? $options['first_byte_timeout'] : null;
        $max_conn_default = array_key_exists('max_conn_default', $options) ? $options['max_conn_default'] : 200;
        $quorum = array_key_exists('quorum', $options) ? $options['quorum'] : 75;
        $tls_check_cert = array_key_exists('tls_check_cert', $options) ? $options['tls_check_cert'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createServerPool'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createServerPool'
            );
        }
        if ($quorum !== null && $quorum > 100) {
            throw new \InvalidArgumentException('invalid value for "$quorum" when calling PoolApi.createServerPool, must be smaller than or equal to 100.');
        }
        if ($quorum !== null && $quorum < 0) {
            throw new \InvalidArgumentException('invalid value for "$quorum" when calling PoolApi.createServerPool, must be bigger than or equal to 0.');
        }


        $resourcePath = '/service/{service_id}/version/{version_id}/pool';
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
        if ($tls_ca_cert !== null) {
            $formParams['tls_ca_cert'] = ObjectSerializer::toFormValue($tls_ca_cert);
        }
        // form params
        if ($tls_client_cert !== null) {
            $formParams['tls_client_cert'] = ObjectSerializer::toFormValue($tls_client_cert);
        }
        // form params
        if ($tls_client_key !== null) {
            $formParams['tls_client_key'] = ObjectSerializer::toFormValue($tls_client_key);
        }
        // form params
        if ($tls_cert_hostname !== null) {
            $formParams['tls_cert_hostname'] = ObjectSerializer::toFormValue($tls_cert_hostname);
        }
        // form params
        if ($use_tls !== null) {
            $formParams['use_tls'] = ObjectSerializer::toFormValue($use_tls);
        }
        // form params
        if ($created_at !== null) {
            $formParams['created_at'] = ObjectSerializer::toFormValue($created_at);
        }
        // form params
        if ($deleted_at !== null) {
            $formParams['deleted_at'] = ObjectSerializer::toFormValue($deleted_at);
        }
        // form params
        if ($updated_at !== null) {
            $formParams['updated_at'] = ObjectSerializer::toFormValue($updated_at);
        }
        // form params
        if ($service_id !== null) {
            $formParams['service_id'] = ObjectSerializer::toFormValue($service_id);
        }
        // form params
        if ($version !== null) {
            $formParams['version'] = ObjectSerializer::toFormValue($version);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($shield !== null) {
            $formParams['shield'] = ObjectSerializer::toFormValue($shield);
        }
        // form params
        if ($request_condition !== null) {
            $formParams['request_condition'] = ObjectSerializer::toFormValue($request_condition);
        }
        // form params
        if ($tls_ciphers !== null) {
            $formParams['tls_ciphers'] = ObjectSerializer::toFormValue($tls_ciphers);
        }
        // form params
        if ($tls_sni_hostname !== null) {
            $formParams['tls_sni_hostname'] = ObjectSerializer::toFormValue($tls_sni_hostname);
        }
        // form params
        if ($min_tls_version !== null) {
            $formParams['min_tls_version'] = ObjectSerializer::toFormValue($min_tls_version);
        }
        // form params
        if ($max_tls_version !== null) {
            $formParams['max_tls_version'] = ObjectSerializer::toFormValue($max_tls_version);
        }
        // form params
        if ($healthcheck !== null) {
            $formParams['healthcheck'] = ObjectSerializer::toFormValue($healthcheck);
        }
        // form params
        if ($comment !== null) {
            $formParams['comment'] = ObjectSerializer::toFormValue($comment);
        }
        // form params
        if ($type !== null) {
            $formParams['type'] = ObjectSerializer::toFormValue($type);
        }
        // form params
        if ($override_host !== null) {
            $formParams['override_host'] = ObjectSerializer::toFormValue($override_host);
        }
        // form params
        if ($between_bytes_timeout !== null) {
            $formParams['between_bytes_timeout'] = ObjectSerializer::toFormValue($between_bytes_timeout);
        }
        // form params
        if ($connect_timeout !== null) {
            $formParams['connect_timeout'] = ObjectSerializer::toFormValue($connect_timeout);
        }
        // form params
        if ($first_byte_timeout !== null) {
            $formParams['first_byte_timeout'] = ObjectSerializer::toFormValue($first_byte_timeout);
        }
        // form params
        if ($max_conn_default !== null) {
            $formParams['max_conn_default'] = ObjectSerializer::toFormValue($max_conn_default);
        }
        // form params
        if ($quorum !== null) {
            $formParams['quorum'] = ObjectSerializer::toFormValue($quorum);
        }
        // form params
        if ($tls_check_cert !== null) {
            $formParams['tls_check_cert'] = ObjectSerializer::toFormValue($tls_check_cert);
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
     * Operation deleteServerPool
     *
     * Delete a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteServerPool($options)
    {
        list($response) = $this->deleteServerPoolWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteServerPoolWithHttpInfo
     *
     * Delete a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteServerPoolWithHttpInfo($options)
    {
        $request = $this->deleteServerPoolRequest($options);

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
     * Operation deleteServerPoolAsync
     *
     * Delete a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteServerPoolAsync($options)
    {
        return $this->deleteServerPoolAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteServerPoolAsyncWithHttpInfo
     *
     * Delete a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteServerPoolAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteServerPoolRequest($options);

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
     * Create request for operation 'deleteServerPool'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteServerPoolRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $pool_name = array_key_exists('pool_name', $options) ? $options['pool_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling deleteServerPool'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteServerPool'
            );
        }
        // verify the required parameter 'pool_name' is set
        if ($pool_name === null || (is_array($pool_name) && count($pool_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_name when calling deleteServerPool'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/pool/{pool_name}';
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
        if ($pool_name !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_name' . '}',
                ObjectSerializer::toPathValue($pool_name),
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
     * Operation getServerPool
     *
     * Get a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\PoolResponse
     */
    public function getServerPool($options)
    {
        list($response) = $this->getServerPoolWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getServerPoolWithHttpInfo
     *
     * Get a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\PoolResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getServerPoolWithHttpInfo($options)
    {
        $request = $this->getServerPoolRequest($options);

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
                    if ('\Fastly\Model\PoolResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PoolResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PoolResponse';
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
                        '\Fastly\Model\PoolResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getServerPoolAsync
     *
     * Get a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServerPoolAsync($options)
    {
        return $this->getServerPoolAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getServerPoolAsyncWithHttpInfo
     *
     * Get a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getServerPoolAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PoolResponse';
        $request = $this->getServerPoolRequest($options);

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
     * Create request for operation 'getServerPool'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getServerPoolRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $pool_name = array_key_exists('pool_name', $options) ? $options['pool_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getServerPool'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getServerPool'
            );
        }
        // verify the required parameter 'pool_name' is set
        if ($pool_name === null || (is_array($pool_name) && count($pool_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_name when calling getServerPool'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/pool/{pool_name}';
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
        if ($pool_name !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_name' . '}',
                ObjectSerializer::toPathValue($pool_name),
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
     * Operation listServerPools
     *
     * List server pools
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
     * @return \Fastly\Model\PoolResponse[]
     */
    public function listServerPools($options)
    {
        list($response) = $this->listServerPoolsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listServerPoolsWithHttpInfo
     *
     * List server pools
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
     * @return array of \Fastly\Model\PoolResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listServerPoolsWithHttpInfo($options)
    {
        $request = $this->listServerPoolsRequest($options);

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
                    if ('\Fastly\Model\PoolResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PoolResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PoolResponse[]';
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
                        '\Fastly\Model\PoolResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listServerPoolsAsync
     *
     * List server pools
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
    public function listServerPoolsAsync($options)
    {
        return $this->listServerPoolsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listServerPoolsAsyncWithHttpInfo
     *
     * List server pools
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
    public function listServerPoolsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PoolResponse[]';
        $request = $this->listServerPoolsRequest($options);

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
     * Create request for operation 'listServerPools'
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
    public function listServerPoolsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listServerPools'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listServerPools'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/pool';
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
     * Operation updateServerPool
     *
     * Update a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to self::USE_TLS_no_tls)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id service_id (optional)
     * @param  string $version version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\PoolResponse
     */
    public function updateServerPool($options)
    {
        list($response) = $this->updateServerPoolWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateServerPoolWithHttpInfo
     *
     * Update a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to self::USE_TLS_no_tls)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\PoolResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateServerPoolWithHttpInfo($options)
    {
        $request = $this->updateServerPoolRequest($options);

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
                    if ('\Fastly\Model\PoolResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\PoolResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\PoolResponse';
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
                        '\Fastly\Model\PoolResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateServerPoolAsync
     *
     * Update a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to self::USE_TLS_no_tls)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateServerPoolAsync($options)
    {
        return $this->updateServerPoolAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateServerPoolAsyncWithHttpInfo
     *
     * Update a server pool
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to self::USE_TLS_no_tls)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateServerPoolAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\PoolResponse';
        $request = $this->updateServerPoolRequest($options);

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
     * Create request for operation 'updateServerPool'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $pool_name Name for the Pool. (required)
     * @param  string $tls_ca_cert A secure certificate to authenticate a server with. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_cert The client certificate used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_client_key The client private key used to make authenticated requests. Must be in PEM format. (optional, default to 'null')
     * @param  string $tls_cert_hostname The hostname used to verify a server&#39;s certificate. It can either be the Common Name (CN) or a Subject Alternative Name (SAN). (optional, default to 'null')
     * @param  int $use_tls Whether to use TLS. (optional, default to self::USE_TLS_no_tls)
     * @param  \DateTime $created_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $deleted_at Date and time in ISO 8601 format. (optional)
     * @param  \DateTime $updated_at Date and time in ISO 8601 format. (optional)
     * @param  string $service_id (optional)
     * @param  string $version (optional)
     * @param  string $name Name for the Pool. (optional)
     * @param  string $shield Selected POP to serve as a shield for the servers. Defaults to &#x60;null&#x60; meaning no origin shielding if not set. Refer to the [POPs API endpoint](https://www.fastly.com/documentation/reference/api/utils/pops/) to get a list of available POPs used for shielding. (optional, default to 'null')
     * @param  string $request_condition Condition which, if met, will select this configuration during a request. Optional. (optional)
     * @param  string $tls_ciphers List of OpenSSL ciphers (see the [openssl.org manpages](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) for details). Optional. (optional)
     * @param  string $tls_sni_hostname SNI hostname. Optional. (optional)
     * @param  int $min_tls_version Minimum allowed TLS version on connections to this server. Optional. (optional)
     * @param  int $max_tls_version Maximum allowed TLS version on connections to this server. Optional. (optional)
     * @param  string $healthcheck Name of the healthcheck to use with this pool. Can be empty and could be reused across multiple backend and pools. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  string $type What type of load balance group to use. (optional)
     * @param  string $override_host The hostname to [override the Host header](https://www.fastly.com/documentation/guides/full-site-delivery/domains-and-origins/specifying-an-override-host/). Defaults to &#x60;null&#x60; meaning no override of the Host header will occur. This setting can also be added to a Server definition. If the field is set on a Server definition it will override the Pool setting. (optional, default to 'null')
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional, default to 10000)
     * @param  int $connect_timeout How long to wait for a timeout in milliseconds. Optional. (optional)
     * @param  int $first_byte_timeout How long to wait for the first byte in milliseconds. Optional. (optional)
     * @param  int $max_conn_default Maximum number of connections. Optional. (optional, default to 200)
     * @param  int $quorum Percentage of capacity (&#x60;0-100&#x60;) that needs to be operationally available for a pool to be considered up. (optional, default to 75)
     * @param  int $tls_check_cert Be strict on checking TLS certs. Optional. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateServerPoolRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $pool_name = array_key_exists('pool_name', $options) ? $options['pool_name'] : null;
        $tls_ca_cert = array_key_exists('tls_ca_cert', $options) ? $options['tls_ca_cert'] : 'null';
        $tls_client_cert = array_key_exists('tls_client_cert', $options) ? $options['tls_client_cert'] : 'null';
        $tls_client_key = array_key_exists('tls_client_key', $options) ? $options['tls_client_key'] : 'null';
        $tls_cert_hostname = array_key_exists('tls_cert_hostname', $options) ? $options['tls_cert_hostname'] : 'null';
        $use_tls = array_key_exists('use_tls', $options) ? $options['use_tls'] : self::USE_TLS_no_tls;
        $created_at = array_key_exists('created_at', $options) ? $options['created_at'] : null;
        $deleted_at = array_key_exists('deleted_at', $options) ? $options['deleted_at'] : null;
        $updated_at = array_key_exists('updated_at', $options) ? $options['updated_at'] : null;
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version = array_key_exists('version', $options) ? $options['version'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $shield = array_key_exists('shield', $options) ? $options['shield'] : 'null';
        $request_condition = array_key_exists('request_condition', $options) ? $options['request_condition'] : null;
        $tls_ciphers = array_key_exists('tls_ciphers', $options) ? $options['tls_ciphers'] : null;
        $tls_sni_hostname = array_key_exists('tls_sni_hostname', $options) ? $options['tls_sni_hostname'] : null;
        $min_tls_version = array_key_exists('min_tls_version', $options) ? $options['min_tls_version'] : null;
        $max_tls_version = array_key_exists('max_tls_version', $options) ? $options['max_tls_version'] : null;
        $healthcheck = array_key_exists('healthcheck', $options) ? $options['healthcheck'] : null;
        $comment = array_key_exists('comment', $options) ? $options['comment'] : null;
        $type = array_key_exists('type', $options) ? $options['type'] : null;
        $override_host = array_key_exists('override_host', $options) ? $options['override_host'] : 'null';
        $between_bytes_timeout = array_key_exists('between_bytes_timeout', $options) ? $options['between_bytes_timeout'] : 10000;
        $connect_timeout = array_key_exists('connect_timeout', $options) ? $options['connect_timeout'] : null;
        $first_byte_timeout = array_key_exists('first_byte_timeout', $options) ? $options['first_byte_timeout'] : null;
        $max_conn_default = array_key_exists('max_conn_default', $options) ? $options['max_conn_default'] : 200;
        $quorum = array_key_exists('quorum', $options) ? $options['quorum'] : 75;
        $tls_check_cert = array_key_exists('tls_check_cert', $options) ? $options['tls_check_cert'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateServerPool'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateServerPool'
            );
        }
        // verify the required parameter 'pool_name' is set
        if ($pool_name === null || (is_array($pool_name) && count($pool_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pool_name when calling updateServerPool'
            );
        }
        if ($quorum !== null && $quorum > 100) {
            throw new \InvalidArgumentException('invalid value for "$quorum" when calling PoolApi.updateServerPool, must be smaller than or equal to 100.');
        }
        if ($quorum !== null && $quorum < 0) {
            throw new \InvalidArgumentException('invalid value for "$quorum" when calling PoolApi.updateServerPool, must be bigger than or equal to 0.');
        }


        $resourcePath = '/service/{service_id}/version/{version_id}/pool/{pool_name}';
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
        if ($pool_name !== null) {
            $resourcePath = str_replace(
                '{' . 'pool_name' . '}',
                ObjectSerializer::toPathValue($pool_name),
                $resourcePath
            );
        }

        // form params
        if ($tls_ca_cert !== null) {
            $formParams['tls_ca_cert'] = ObjectSerializer::toFormValue($tls_ca_cert);
        }
        // form params
        if ($tls_client_cert !== null) {
            $formParams['tls_client_cert'] = ObjectSerializer::toFormValue($tls_client_cert);
        }
        // form params
        if ($tls_client_key !== null) {
            $formParams['tls_client_key'] = ObjectSerializer::toFormValue($tls_client_key);
        }
        // form params
        if ($tls_cert_hostname !== null) {
            $formParams['tls_cert_hostname'] = ObjectSerializer::toFormValue($tls_cert_hostname);
        }
        // form params
        if ($use_tls !== null) {
            $formParams['use_tls'] = ObjectSerializer::toFormValue($use_tls);
        }
        // form params
        if ($created_at !== null) {
            $formParams['created_at'] = ObjectSerializer::toFormValue($created_at);
        }
        // form params
        if ($deleted_at !== null) {
            $formParams['deleted_at'] = ObjectSerializer::toFormValue($deleted_at);
        }
        // form params
        if ($updated_at !== null) {
            $formParams['updated_at'] = ObjectSerializer::toFormValue($updated_at);
        }
        // form params
        if ($service_id !== null) {
            $formParams['service_id'] = ObjectSerializer::toFormValue($service_id);
        }
        // form params
        if ($version !== null) {
            $formParams['version'] = ObjectSerializer::toFormValue($version);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($shield !== null) {
            $formParams['shield'] = ObjectSerializer::toFormValue($shield);
        }
        // form params
        if ($request_condition !== null) {
            $formParams['request_condition'] = ObjectSerializer::toFormValue($request_condition);
        }
        // form params
        if ($tls_ciphers !== null) {
            $formParams['tls_ciphers'] = ObjectSerializer::toFormValue($tls_ciphers);
        }
        // form params
        if ($tls_sni_hostname !== null) {
            $formParams['tls_sni_hostname'] = ObjectSerializer::toFormValue($tls_sni_hostname);
        }
        // form params
        if ($min_tls_version !== null) {
            $formParams['min_tls_version'] = ObjectSerializer::toFormValue($min_tls_version);
        }
        // form params
        if ($max_tls_version !== null) {
            $formParams['max_tls_version'] = ObjectSerializer::toFormValue($max_tls_version);
        }
        // form params
        if ($healthcheck !== null) {
            $formParams['healthcheck'] = ObjectSerializer::toFormValue($healthcheck);
        }
        // form params
        if ($comment !== null) {
            $formParams['comment'] = ObjectSerializer::toFormValue($comment);
        }
        // form params
        if ($type !== null) {
            $formParams['type'] = ObjectSerializer::toFormValue($type);
        }
        // form params
        if ($override_host !== null) {
            $formParams['override_host'] = ObjectSerializer::toFormValue($override_host);
        }
        // form params
        if ($between_bytes_timeout !== null) {
            $formParams['between_bytes_timeout'] = ObjectSerializer::toFormValue($between_bytes_timeout);
        }
        // form params
        if ($connect_timeout !== null) {
            $formParams['connect_timeout'] = ObjectSerializer::toFormValue($connect_timeout);
        }
        // form params
        if ($first_byte_timeout !== null) {
            $formParams['first_byte_timeout'] = ObjectSerializer::toFormValue($first_byte_timeout);
        }
        // form params
        if ($max_conn_default !== null) {
            $formParams['max_conn_default'] = ObjectSerializer::toFormValue($max_conn_default);
        }
        // form params
        if ($quorum !== null) {
            $formParams['quorum'] = ObjectSerializer::toFormValue($quorum);
        }
        // form params
        if ($tls_check_cert !== null) {
            $formParams['tls_check_cert'] = ObjectSerializer::toFormValue($tls_check_cert);
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
