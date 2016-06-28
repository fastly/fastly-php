<?php

namespace Fastly;

use Fastly\Adapter\AdapterInterface;

/**
 * @author Gonzalo Vilaseca <gonzalo.vilaseca@reiss.com>
 */
class Fastly implements FastlyInterface
{
    const VERSION = '0.3.0';
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
    ) {
        $this->adapter    = $adapter;
        $this->entryPoint = $entryPoint;
    }

    /*
     * {@inheritdoc}
     */
    public function send($method, $uri, array $options = [])
    {
        // Prepend entrypoint if $uri is not absolute
        if (0 !== strpos($uri, 'http')) {
            $uri = $this->entryPoint . $uri;
        }
        return $this->adapter->send($method, $uri, $options);
    }

    /*
     * {@inheritdoc}
     */
    public function purge($url, array $options = [])
    {
        return $this->send('PURGE', $url, $options);
    }

    /*
     * {@inheritdoc}
     */
    public function purgeAll($service, array $options = [])
    {
        $url = '/service/' . urlencode($service) . '/purge_all';

        return $this->send('POST', $url, $options);
    }

    /*
     * {@inheritdoc}
     */
    public function purgeKey($service, $key, array $options = [])
    {
        $url = '/service/' . urlencode($service) . '/purge/' . $key;

        return $this->send('POST', $url, $options);
    }
}
