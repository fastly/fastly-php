<?php

namespace Fastly;

use Psr\Http\Message\ResponseInterface;

/**
 * @author Gonzalo Vilaseca <gonzalo.vilaseca@reiss.com>
 */
interface FastlyInterface {
    /**
     * Send http request
     *
     * @param string $method
     * @param string $uri
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function send($method, $uri, array $options = []);

    /**
     * @param string $url
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function purge($url, array $options = []);

    /**
     * @param string $service
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function purgeAll($service, array $options = []);

    /**
     * @param string $service
     * @param string $key
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function purgeKey($service, $key, array $options = []);
}