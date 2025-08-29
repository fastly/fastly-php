<?php
/**
 * BackendApi
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
 * BackendApi Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */
class BackendApi
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
     * Operation createBackend
     *
     * Create a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\BackendResponse
     */
    public function createBackend($options)
    {
        list($response) = $this->createBackendWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation createBackendWithHttpInfo
     *
     * Create a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\BackendResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createBackendWithHttpInfo($options)
    {
        $request = $this->createBackendRequest($options);

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
                    if ('\Fastly\Model\BackendResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\BackendResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\BackendResponse';
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
                        '\Fastly\Model\BackendResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createBackendAsync
     *
     * Create a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBackendAsync($options)
    {
        return $this->createBackendAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createBackendAsyncWithHttpInfo
     *
     * Create a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createBackendAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\BackendResponse';
        $request = $this->createBackendRequest($options);

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
     * Create request for operation 'createBackend'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createBackendRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $address = array_key_exists('address', $options) ? $options['address'] : null;
        $auto_loadbalance = array_key_exists('auto_loadbalance', $options) ? $options['auto_loadbalance'] : null;
        $between_bytes_timeout = array_key_exists('between_bytes_timeout', $options) ? $options['between_bytes_timeout'] : null;
        $client_cert = array_key_exists('client_cert', $options) ? $options['client_cert'] : null;
        $comment = array_key_exists('comment', $options) ? $options['comment'] : null;
        $connect_timeout = array_key_exists('connect_timeout', $options) ? $options['connect_timeout'] : null;
        $first_byte_timeout = array_key_exists('first_byte_timeout', $options) ? $options['first_byte_timeout'] : null;
        $healthcheck = array_key_exists('healthcheck', $options) ? $options['healthcheck'] : null;
        $hostname = array_key_exists('hostname', $options) ? $options['hostname'] : null;
        $ipv4 = array_key_exists('ipv4', $options) ? $options['ipv4'] : null;
        $ipv6 = array_key_exists('ipv6', $options) ? $options['ipv6'] : null;
        $keepalive_time = array_key_exists('keepalive_time', $options) ? $options['keepalive_time'] : null;
        $max_conn = array_key_exists('max_conn', $options) ? $options['max_conn'] : null;
        $max_tls_version = array_key_exists('max_tls_version', $options) ? $options['max_tls_version'] : null;
        $min_tls_version = array_key_exists('min_tls_version', $options) ? $options['min_tls_version'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $override_host = array_key_exists('override_host', $options) ? $options['override_host'] : null;
        $port = array_key_exists('port', $options) ? $options['port'] : null;
        $prefer_ipv6 = array_key_exists('prefer_ipv6', $options) ? $options['prefer_ipv6'] : null;
        $request_condition = array_key_exists('request_condition', $options) ? $options['request_condition'] : null;
        $share_key = array_key_exists('share_key', $options) ? $options['share_key'] : null;
        $shield = array_key_exists('shield', $options) ? $options['shield'] : null;
        $ssl_ca_cert = array_key_exists('ssl_ca_cert', $options) ? $options['ssl_ca_cert'] : null;
        $ssl_cert_hostname = array_key_exists('ssl_cert_hostname', $options) ? $options['ssl_cert_hostname'] : null;
        $ssl_check_cert = array_key_exists('ssl_check_cert', $options) ? $options['ssl_check_cert'] : true;
        $ssl_ciphers = array_key_exists('ssl_ciphers', $options) ? $options['ssl_ciphers'] : null;
        $ssl_client_cert = array_key_exists('ssl_client_cert', $options) ? $options['ssl_client_cert'] : null;
        $ssl_client_key = array_key_exists('ssl_client_key', $options) ? $options['ssl_client_key'] : null;
        $ssl_hostname = array_key_exists('ssl_hostname', $options) ? $options['ssl_hostname'] : null;
        $ssl_sni_hostname = array_key_exists('ssl_sni_hostname', $options) ? $options['ssl_sni_hostname'] : null;
        $tcp_keepalive_enable = array_key_exists('tcp_keepalive_enable', $options) ? $options['tcp_keepalive_enable'] : null;
        $tcp_keepalive_interval = array_key_exists('tcp_keepalive_interval', $options) ? $options['tcp_keepalive_interval'] : 10;
        $tcp_keepalive_probes = array_key_exists('tcp_keepalive_probes', $options) ? $options['tcp_keepalive_probes'] : 3;
        $tcp_keepalive_time = array_key_exists('tcp_keepalive_time', $options) ? $options['tcp_keepalive_time'] : 300;
        $use_ssl = array_key_exists('use_ssl', $options) ? $options['use_ssl'] : null;
        $weight = array_key_exists('weight', $options) ? $options['weight'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling createBackend'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling createBackend'
            );
        }
        if ($share_key !== null && !preg_match("/^[A-Za-z0-9]+$/", $share_key)) {
            throw new \InvalidArgumentException("invalid value for \"share_key\" when calling BackendApi.createBackend, must conform to the pattern /^[A-Za-z0-9]+$/.");
        }


        $resourcePath = '/service/{service_id}/version/{version_id}/backend';
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
        if ($address !== null) {
            $formParams['address'] = ObjectSerializer::toFormValue($address);
        }
        // form params
        if ($auto_loadbalance !== null) {
            $formParams['auto_loadbalance'] = ObjectSerializer::toFormValue($auto_loadbalance);
        }
        // form params
        if ($between_bytes_timeout !== null) {
            $formParams['between_bytes_timeout'] = ObjectSerializer::toFormValue($between_bytes_timeout);
        }
        // form params
        if ($client_cert !== null) {
            $formParams['client_cert'] = ObjectSerializer::toFormValue($client_cert);
        }
        // form params
        if ($comment !== null) {
            $formParams['comment'] = ObjectSerializer::toFormValue($comment);
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
        if ($healthcheck !== null) {
            $formParams['healthcheck'] = ObjectSerializer::toFormValue($healthcheck);
        }
        // form params
        if ($hostname !== null) {
            $formParams['hostname'] = ObjectSerializer::toFormValue($hostname);
        }
        // form params
        if ($ipv4 !== null) {
            $formParams['ipv4'] = ObjectSerializer::toFormValue($ipv4);
        }
        // form params
        if ($ipv6 !== null) {
            $formParams['ipv6'] = ObjectSerializer::toFormValue($ipv6);
        }
        // form params
        if ($keepalive_time !== null) {
            $formParams['keepalive_time'] = ObjectSerializer::toFormValue($keepalive_time);
        }
        // form params
        if ($max_conn !== null) {
            $formParams['max_conn'] = ObjectSerializer::toFormValue($max_conn);
        }
        // form params
        if ($max_tls_version !== null) {
            $formParams['max_tls_version'] = ObjectSerializer::toFormValue($max_tls_version);
        }
        // form params
        if ($min_tls_version !== null) {
            $formParams['min_tls_version'] = ObjectSerializer::toFormValue($min_tls_version);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($override_host !== null) {
            $formParams['override_host'] = ObjectSerializer::toFormValue($override_host);
        }
        // form params
        if ($port !== null) {
            $formParams['port'] = ObjectSerializer::toFormValue($port);
        }
        // form params
        if ($prefer_ipv6 !== null) {
            $formParams['prefer_ipv6'] = ObjectSerializer::toFormValue($prefer_ipv6);
        }
        // form params
        if ($request_condition !== null) {
            $formParams['request_condition'] = ObjectSerializer::toFormValue($request_condition);
        }
        // form params
        if ($share_key !== null) {
            $formParams['share_key'] = ObjectSerializer::toFormValue($share_key);
        }
        // form params
        if ($shield !== null) {
            $formParams['shield'] = ObjectSerializer::toFormValue($shield);
        }
        // form params
        if ($ssl_ca_cert !== null) {
            $formParams['ssl_ca_cert'] = ObjectSerializer::toFormValue($ssl_ca_cert);
        }
        // form params
        if ($ssl_cert_hostname !== null) {
            $formParams['ssl_cert_hostname'] = ObjectSerializer::toFormValue($ssl_cert_hostname);
        }
        // form params
        if ($ssl_check_cert !== null) {
            $formParams['ssl_check_cert'] = ObjectSerializer::toFormValue($ssl_check_cert);
        }
        // form params
        if ($ssl_ciphers !== null) {
            $formParams['ssl_ciphers'] = ObjectSerializer::toFormValue($ssl_ciphers);
        }
        // form params
        if ($ssl_client_cert !== null) {
            $formParams['ssl_client_cert'] = ObjectSerializer::toFormValue($ssl_client_cert);
        }
        // form params
        if ($ssl_client_key !== null) {
            $formParams['ssl_client_key'] = ObjectSerializer::toFormValue($ssl_client_key);
        }
        // form params
        if ($ssl_hostname !== null) {
            $formParams['ssl_hostname'] = ObjectSerializer::toFormValue($ssl_hostname);
        }
        // form params
        if ($ssl_sni_hostname !== null) {
            $formParams['ssl_sni_hostname'] = ObjectSerializer::toFormValue($ssl_sni_hostname);
        }
        // form params
        if ($tcp_keepalive_enable !== null) {
            $formParams['tcp_keepalive_enable'] = ObjectSerializer::toFormValue($tcp_keepalive_enable);
        }
        // form params
        if ($tcp_keepalive_interval !== null) {
            $formParams['tcp_keepalive_interval'] = ObjectSerializer::toFormValue($tcp_keepalive_interval);
        }
        // form params
        if ($tcp_keepalive_probes !== null) {
            $formParams['tcp_keepalive_probes'] = ObjectSerializer::toFormValue($tcp_keepalive_probes);
        }
        // form params
        if ($tcp_keepalive_time !== null) {
            $formParams['tcp_keepalive_time'] = ObjectSerializer::toFormValue($tcp_keepalive_time);
        }
        // form params
        if ($use_ssl !== null) {
            $formParams['use_ssl'] = ObjectSerializer::toFormValue($use_ssl);
        }
        // form params
        if ($weight !== null) {
            $formParams['weight'] = ObjectSerializer::toFormValue($weight);
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
     * Operation deleteBackend
     *
     * Delete a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\InlineResponse200
     */
    public function deleteBackend($options)
    {
        list($response) = $this->deleteBackendWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation deleteBackendWithHttpInfo
     *
     * Delete a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBackendWithHttpInfo($options)
    {
        $request = $this->deleteBackendRequest($options);

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
     * Operation deleteBackendAsync
     *
     * Delete a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBackendAsync($options)
    {
        return $this->deleteBackendAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteBackendAsyncWithHttpInfo
     *
     * Delete a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBackendAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\InlineResponse200';
        $request = $this->deleteBackendRequest($options);

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
     * Create request for operation 'deleteBackend'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteBackendRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $backend_name = array_key_exists('backend_name', $options) ? $options['backend_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling deleteBackend'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling deleteBackend'
            );
        }
        // verify the required parameter 'backend_name' is set
        if ($backend_name === null || (is_array($backend_name) && count($backend_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $backend_name when calling deleteBackend'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/backend/{backend_name}';
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
        if ($backend_name !== null) {
            $resourcePath = str_replace(
                '{' . 'backend_name' . '}',
                ObjectSerializer::toPathValue($backend_name),
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
     * Operation getBackend
     *
     * Describe a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\BackendResponse
     */
    public function getBackend($options)
    {
        list($response) = $this->getBackendWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getBackendWithHttpInfo
     *
     * Describe a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\BackendResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBackendWithHttpInfo($options)
    {
        $request = $this->getBackendRequest($options);

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
                    if ('\Fastly\Model\BackendResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\BackendResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\BackendResponse';
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
                        '\Fastly\Model\BackendResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBackendAsync
     *
     * Describe a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBackendAsync($options)
    {
        return $this->getBackendAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBackendAsyncWithHttpInfo
     *
     * Describe a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBackendAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\BackendResponse';
        $request = $this->getBackendRequest($options);

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
     * Create request for operation 'getBackend'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBackendRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $backend_name = array_key_exists('backend_name', $options) ? $options['backend_name'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling getBackend'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling getBackend'
            );
        }
        // verify the required parameter 'backend_name' is set
        if ($backend_name === null || (is_array($backend_name) && count($backend_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $backend_name when calling getBackend'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/backend/{backend_name}';
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
        if ($backend_name !== null) {
            $resourcePath = str_replace(
                '{' . 'backend_name' . '}',
                ObjectSerializer::toPathValue($backend_name),
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
     * Operation listBackends
     *
     * List backends
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
     * @return \Fastly\Model\BackendResponse[]
     */
    public function listBackends($options)
    {
        list($response) = $this->listBackendsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation listBackendsWithHttpInfo
     *
     * List backends
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
     * @return array of \Fastly\Model\BackendResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function listBackendsWithHttpInfo($options)
    {
        $request = $this->listBackendsRequest($options);

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
                    if ('\Fastly\Model\BackendResponse[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\BackendResponse[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\BackendResponse[]';
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
                        '\Fastly\Model\BackendResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listBackendsAsync
     *
     * List backends
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
    public function listBackendsAsync($options)
    {
        return $this->listBackendsAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listBackendsAsyncWithHttpInfo
     *
     * List backends
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
    public function listBackendsAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\BackendResponse[]';
        $request = $this->listBackendsRequest($options);

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
     * Create request for operation 'listBackends'
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
    public function listBackendsRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling listBackends'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling listBackends'
            );
        }

        $resourcePath = '/service/{service_id}/version/{version_id}/backend';
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
     * Operation updateBackend
     *
     * Update a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Fastly\Model\BackendResponse
     */
    public function updateBackend($options)
    {
        list($response) = $this->updateBackendWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation updateBackendWithHttpInfo
     *
     * Update a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains Fastly API host(s). Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \Fastly\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Fastly\Model\BackendResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateBackendWithHttpInfo($options)
    {
        $request = $this->updateBackendRequest($options);

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
                    if ('\Fastly\Model\BackendResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fastly\Model\BackendResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Fastly\Model\BackendResponse';
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
                        '\Fastly\Model\BackendResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateBackendAsync
     *
     * Update a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBackendAsync($options)
    {
        return $this->updateBackendAsyncWithHttpInfo($options)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateBackendAsyncWithHttpInfo
     *
     * Update a backend
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateBackendAsyncWithHttpInfo($options)
    {
        $returnType = '\Fastly\Model\BackendResponse';
        $request = $this->updateBackendRequest($options);

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
     * Create request for operation 'updateBackend'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * This operation contains host(s) defined in the OpenAP spec. Use 'hostIndex' to select the host.
     * URL: https://api.fastly.com
     *
     * @param  string $service_id Alphanumeric string identifying the service. (required)
     * @param  int $version_id Integer identifying a service version. (required)
     * @param  string $backend_name The name of the backend. (required)
     * @param  string $address A hostname, IPv4, or IPv6 address for the backend. This is the preferred way to specify the location of your backend. (optional)
     * @param  bool $auto_loadbalance Whether or not this backend should be automatically load balanced. If true, all backends with this setting that don&#39;t have a &#x60;request_condition&#x60; will be selected based on their &#x60;weight&#x60;. (optional)
     * @param  int $between_bytes_timeout Maximum duration in milliseconds that Fastly will wait while receiving no data on a download from a backend. If exceeded, for Delivery services, the response received so far will be considered complete and the fetch will end. For Compute services, timeout expiration is treated as a failure of the backend connection, and an error is generated. May be set at runtime using &#x60;bereq.between_bytes_timeout&#x60;. (optional)
     * @param  string $client_cert Unused. (optional)
     * @param  string $comment A freeform descriptive note. (optional)
     * @param  int $connect_timeout Maximum duration in milliseconds to wait for a connection to this backend to be established. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.connect_timeout&#x60;. (optional)
     * @param  int $first_byte_timeout Maximum duration in milliseconds to wait for the server response to begin after a TCP connection is established and the request has been sent. If exceeded, the connection is aborted and a synthetic &#x60;503&#x60; response will be presented instead. May be set at runtime using &#x60;bereq.first_byte_timeout&#x60;. (optional)
     * @param  string $healthcheck The name of the healthcheck to use with this backend. (optional)
     * @param  string $hostname The hostname of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv4 IPv4 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  string $ipv6 IPv6 address of the backend. May be used as an alternative to &#x60;address&#x60; to set the backend location. (optional)
     * @param  int $keepalive_time How long in seconds to keep a persistent connection to the backend between requests. By default, Varnish keeps connections open as long as it can. (optional)
     * @param  int $max_conn Maximum number of concurrent connections this backend will accept. (optional)
     * @param  string $max_tls_version Maximum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $min_tls_version Minimum allowed TLS version on SSL connections to this backend. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $name The name of the backend. (optional)
     * @param  string $override_host If set, will replace the client-supplied HTTP &#x60;Host&#x60; header on connections to this backend. Applied after VCL has been processed, so this setting will take precedence over changing &#x60;bereq.http.Host&#x60; in VCL. (optional)
     * @param  int $port Port on which the backend server is listening for connections from Fastly. Setting &#x60;port&#x60; to 80 or 443 will also set &#x60;use_ssl&#x60; automatically (to false and true respectively), unless explicitly overridden by setting &#x60;use_ssl&#x60; in the same request. (optional)
     * @param  bool $prefer_ipv6 Prefer IPv6 connections to origins for hostname backends. Default is &#39;false&#39; for Delivery services and &#39;true&#39; for Compute services. (optional)
     * @param  string $request_condition Name of a Condition, which if satisfied, will select this backend during a request. If set, will override any &#x60;auto_loadbalance&#x60; setting. By default, the first backend added to a service is selected for all requests. (optional)
     * @param  string $share_key Value that when shared across backends will enable those backends to share the same health check. (optional)
     * @param  string $shield Identifier of the POP to use as a [shield](https://www.fastly.com/documentation/guides/getting-started/hosts/shielding/). (optional)
     * @param  string $ssl_ca_cert CA certificate attached to origin. (optional)
     * @param  string $ssl_cert_hostname Overrides &#x60;ssl_hostname&#x60;, but only for cert verification. Does not affect SNI at all. (optional)
     * @param  bool $ssl_check_cert Be strict on checking SSL certs. (optional, default to true)
     * @param  string $ssl_ciphers List of [OpenSSL ciphers](https://www.openssl.org/docs/man1.1.1/man1/ciphers.html) to support for connections to this origin. If your backend server is not able to negotiate a connection meeting this constraint, a synthetic &#x60;503&#x60; error response will be generated. (optional)
     * @param  string $ssl_client_cert Client certificate attached to origin. (optional)
     * @param  string $ssl_client_key Client key attached to origin. (optional)
     * @param  string $ssl_hostname Use &#x60;ssl_cert_hostname&#x60; and &#x60;ssl_sni_hostname&#x60; to configure certificate validation. (optional)
     * @param  string $ssl_sni_hostname Overrides &#x60;ssl_hostname&#x60;, but only for SNI in the handshake. Does not affect cert validation at all. (optional)
     * @param  bool $tcp_keepalive_enable Whether to enable TCP keepalives for backend connections. Varnish defaults to using keepalives if this is unspecified. (optional)
     * @param  int $tcp_keepalive_interval Interval in seconds between subsequent keepalive probes. (optional, default to 10)
     * @param  int $tcp_keepalive_probes Number of unacknowledged probes to send before considering the connection dead. (optional, default to 3)
     * @param  int $tcp_keepalive_time Interval in seconds between the last data packet sent and the first keepalive probe. (optional, default to 300)
     * @param  bool $use_ssl Whether or not to require TLS for connections to this backend. (optional)
     * @param  int $weight Weight used to load balance this backend against others. May be any positive integer. If &#x60;auto_loadbalance&#x60; is true, the chance of this backend being selected is equal to its own weight over the sum of all weights for backends that have &#x60;auto_loadbalance&#x60; set to true. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateBackendRequest($options)
    {
        // unbox the parameters from the associative array
        $service_id = array_key_exists('service_id', $options) ? $options['service_id'] : null;
        $version_id = array_key_exists('version_id', $options) ? $options['version_id'] : null;
        $backend_name = array_key_exists('backend_name', $options) ? $options['backend_name'] : null;
        $address = array_key_exists('address', $options) ? $options['address'] : null;
        $auto_loadbalance = array_key_exists('auto_loadbalance', $options) ? $options['auto_loadbalance'] : null;
        $between_bytes_timeout = array_key_exists('between_bytes_timeout', $options) ? $options['between_bytes_timeout'] : null;
        $client_cert = array_key_exists('client_cert', $options) ? $options['client_cert'] : null;
        $comment = array_key_exists('comment', $options) ? $options['comment'] : null;
        $connect_timeout = array_key_exists('connect_timeout', $options) ? $options['connect_timeout'] : null;
        $first_byte_timeout = array_key_exists('first_byte_timeout', $options) ? $options['first_byte_timeout'] : null;
        $healthcheck = array_key_exists('healthcheck', $options) ? $options['healthcheck'] : null;
        $hostname = array_key_exists('hostname', $options) ? $options['hostname'] : null;
        $ipv4 = array_key_exists('ipv4', $options) ? $options['ipv4'] : null;
        $ipv6 = array_key_exists('ipv6', $options) ? $options['ipv6'] : null;
        $keepalive_time = array_key_exists('keepalive_time', $options) ? $options['keepalive_time'] : null;
        $max_conn = array_key_exists('max_conn', $options) ? $options['max_conn'] : null;
        $max_tls_version = array_key_exists('max_tls_version', $options) ? $options['max_tls_version'] : null;
        $min_tls_version = array_key_exists('min_tls_version', $options) ? $options['min_tls_version'] : null;
        $name = array_key_exists('name', $options) ? $options['name'] : null;
        $override_host = array_key_exists('override_host', $options) ? $options['override_host'] : null;
        $port = array_key_exists('port', $options) ? $options['port'] : null;
        $prefer_ipv6 = array_key_exists('prefer_ipv6', $options) ? $options['prefer_ipv6'] : null;
        $request_condition = array_key_exists('request_condition', $options) ? $options['request_condition'] : null;
        $share_key = array_key_exists('share_key', $options) ? $options['share_key'] : null;
        $shield = array_key_exists('shield', $options) ? $options['shield'] : null;
        $ssl_ca_cert = array_key_exists('ssl_ca_cert', $options) ? $options['ssl_ca_cert'] : null;
        $ssl_cert_hostname = array_key_exists('ssl_cert_hostname', $options) ? $options['ssl_cert_hostname'] : null;
        $ssl_check_cert = array_key_exists('ssl_check_cert', $options) ? $options['ssl_check_cert'] : true;
        $ssl_ciphers = array_key_exists('ssl_ciphers', $options) ? $options['ssl_ciphers'] : null;
        $ssl_client_cert = array_key_exists('ssl_client_cert', $options) ? $options['ssl_client_cert'] : null;
        $ssl_client_key = array_key_exists('ssl_client_key', $options) ? $options['ssl_client_key'] : null;
        $ssl_hostname = array_key_exists('ssl_hostname', $options) ? $options['ssl_hostname'] : null;
        $ssl_sni_hostname = array_key_exists('ssl_sni_hostname', $options) ? $options['ssl_sni_hostname'] : null;
        $tcp_keepalive_enable = array_key_exists('tcp_keepalive_enable', $options) ? $options['tcp_keepalive_enable'] : null;
        $tcp_keepalive_interval = array_key_exists('tcp_keepalive_interval', $options) ? $options['tcp_keepalive_interval'] : 10;
        $tcp_keepalive_probes = array_key_exists('tcp_keepalive_probes', $options) ? $options['tcp_keepalive_probes'] : 3;
        $tcp_keepalive_time = array_key_exists('tcp_keepalive_time', $options) ? $options['tcp_keepalive_time'] : 300;
        $use_ssl = array_key_exists('use_ssl', $options) ? $options['use_ssl'] : null;
        $weight = array_key_exists('weight', $options) ? $options['weight'] : null;

        // verify the required parameter 'service_id' is set
        if ($service_id === null || (is_array($service_id) && count($service_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_id when calling updateBackend'
            );
        }
        // verify the required parameter 'version_id' is set
        if ($version_id === null || (is_array($version_id) && count($version_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version_id when calling updateBackend'
            );
        }
        // verify the required parameter 'backend_name' is set
        if ($backend_name === null || (is_array($backend_name) && count($backend_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $backend_name when calling updateBackend'
            );
        }
        if ($share_key !== null && !preg_match("/^[A-Za-z0-9]+$/", $share_key)) {
            throw new \InvalidArgumentException("invalid value for \"share_key\" when calling BackendApi.updateBackend, must conform to the pattern /^[A-Za-z0-9]+$/.");
        }


        $resourcePath = '/service/{service_id}/version/{version_id}/backend/{backend_name}';
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
        if ($backend_name !== null) {
            $resourcePath = str_replace(
                '{' . 'backend_name' . '}',
                ObjectSerializer::toPathValue($backend_name),
                $resourcePath
            );
        }

        // form params
        if ($address !== null) {
            $formParams['address'] = ObjectSerializer::toFormValue($address);
        }
        // form params
        if ($auto_loadbalance !== null) {
            $formParams['auto_loadbalance'] = ObjectSerializer::toFormValue($auto_loadbalance);
        }
        // form params
        if ($between_bytes_timeout !== null) {
            $formParams['between_bytes_timeout'] = ObjectSerializer::toFormValue($between_bytes_timeout);
        }
        // form params
        if ($client_cert !== null) {
            $formParams['client_cert'] = ObjectSerializer::toFormValue($client_cert);
        }
        // form params
        if ($comment !== null) {
            $formParams['comment'] = ObjectSerializer::toFormValue($comment);
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
        if ($healthcheck !== null) {
            $formParams['healthcheck'] = ObjectSerializer::toFormValue($healthcheck);
        }
        // form params
        if ($hostname !== null) {
            $formParams['hostname'] = ObjectSerializer::toFormValue($hostname);
        }
        // form params
        if ($ipv4 !== null) {
            $formParams['ipv4'] = ObjectSerializer::toFormValue($ipv4);
        }
        // form params
        if ($ipv6 !== null) {
            $formParams['ipv6'] = ObjectSerializer::toFormValue($ipv6);
        }
        // form params
        if ($keepalive_time !== null) {
            $formParams['keepalive_time'] = ObjectSerializer::toFormValue($keepalive_time);
        }
        // form params
        if ($max_conn !== null) {
            $formParams['max_conn'] = ObjectSerializer::toFormValue($max_conn);
        }
        // form params
        if ($max_tls_version !== null) {
            $formParams['max_tls_version'] = ObjectSerializer::toFormValue($max_tls_version);
        }
        // form params
        if ($min_tls_version !== null) {
            $formParams['min_tls_version'] = ObjectSerializer::toFormValue($min_tls_version);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = ObjectSerializer::toFormValue($name);
        }
        // form params
        if ($override_host !== null) {
            $formParams['override_host'] = ObjectSerializer::toFormValue($override_host);
        }
        // form params
        if ($port !== null) {
            $formParams['port'] = ObjectSerializer::toFormValue($port);
        }
        // form params
        if ($prefer_ipv6 !== null) {
            $formParams['prefer_ipv6'] = ObjectSerializer::toFormValue($prefer_ipv6);
        }
        // form params
        if ($request_condition !== null) {
            $formParams['request_condition'] = ObjectSerializer::toFormValue($request_condition);
        }
        // form params
        if ($share_key !== null) {
            $formParams['share_key'] = ObjectSerializer::toFormValue($share_key);
        }
        // form params
        if ($shield !== null) {
            $formParams['shield'] = ObjectSerializer::toFormValue($shield);
        }
        // form params
        if ($ssl_ca_cert !== null) {
            $formParams['ssl_ca_cert'] = ObjectSerializer::toFormValue($ssl_ca_cert);
        }
        // form params
        if ($ssl_cert_hostname !== null) {
            $formParams['ssl_cert_hostname'] = ObjectSerializer::toFormValue($ssl_cert_hostname);
        }
        // form params
        if ($ssl_check_cert !== null) {
            $formParams['ssl_check_cert'] = ObjectSerializer::toFormValue($ssl_check_cert);
        }
        // form params
        if ($ssl_ciphers !== null) {
            $formParams['ssl_ciphers'] = ObjectSerializer::toFormValue($ssl_ciphers);
        }
        // form params
        if ($ssl_client_cert !== null) {
            $formParams['ssl_client_cert'] = ObjectSerializer::toFormValue($ssl_client_cert);
        }
        // form params
        if ($ssl_client_key !== null) {
            $formParams['ssl_client_key'] = ObjectSerializer::toFormValue($ssl_client_key);
        }
        // form params
        if ($ssl_hostname !== null) {
            $formParams['ssl_hostname'] = ObjectSerializer::toFormValue($ssl_hostname);
        }
        // form params
        if ($ssl_sni_hostname !== null) {
            $formParams['ssl_sni_hostname'] = ObjectSerializer::toFormValue($ssl_sni_hostname);
        }
        // form params
        if ($tcp_keepalive_enable !== null) {
            $formParams['tcp_keepalive_enable'] = ObjectSerializer::toFormValue($tcp_keepalive_enable);
        }
        // form params
        if ($tcp_keepalive_interval !== null) {
            $formParams['tcp_keepalive_interval'] = ObjectSerializer::toFormValue($tcp_keepalive_interval);
        }
        // form params
        if ($tcp_keepalive_probes !== null) {
            $formParams['tcp_keepalive_probes'] = ObjectSerializer::toFormValue($tcp_keepalive_probes);
        }
        // form params
        if ($tcp_keepalive_time !== null) {
            $formParams['tcp_keepalive_time'] = ObjectSerializer::toFormValue($tcp_keepalive_time);
        }
        // form params
        if ($use_ssl !== null) {
            $formParams['use_ssl'] = ObjectSerializer::toFormValue($use_ssl);
        }
        // form params
        if ($weight !== null) {
            $formParams['weight'] = ObjectSerializer::toFormValue($weight);
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
