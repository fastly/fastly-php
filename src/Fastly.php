<?php

namespace Fastly;

use Fastly\Adapter\AdapterInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Gonzalo Vilaseca <gonzalo.vilaseca@reiss.com>
 */
class Fastly
{
    /**
     * Http adapter
     *
     * @var AdapterInterface
     */
    private $adapter;

    /**
     * Fastly API entry point
     *
     * @var string
     */
    private $entryPoint;

    /**
     * @param AdapterInterface $adapter
     * @param string           $entryPoint
     */
    public function __construct(
        AdapterInterface $adapter,
        $entryPoint = 'https://api.fastly.com'
    )
    {
        $this->adapter    = $adapter;
        $this->entryPoint = $entryPoint;
    }

    /**
     * Send http request
     *
     * @param string $method
     * @param string $uri
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function send($method, $uri, array $options = [])
    {
        // Prepend entrypoint if $uri is not absolute
        if (0 !== strpos($uri, 'http')) {
            $uri = $this->entryPoint . $uri;
        }
        return $this->adapter->send($method, $uri, $options);
    }

    /**
     * @param string $url
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function purge($url, array $options = [])
    {
        return $this->send('PURGE', $url, $options);
    }

    /**
     * @param string $service
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function purgeAll($service, array $options = [])
    {
        $url = '/service/' . urlencode($service) . '/purge_all';

        return $this->send('POST', $url, $options);
    }

    /**
     * @param string $service
     * @param string $key
     * @param array  $options
     *
     * @return ResponseInterface
     */
    public function purgeKey($service, $key, array $options = [])
    {
        $url = '/service/' . urlencode($service) . '/purge/' . $key;

        return $this->send('POST', $url, $options);
    }
}
