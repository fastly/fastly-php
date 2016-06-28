<?php

namespace Fastly;

use GuzzleHttp\Psr7\Response;

/**
 * @author Gonzalo Vilaseca <gonzalo.vilaseca@reiss.com>
 */
class FastlyFake implements FastlyInterface
{
    /**
     * Log the calls that have been made
     *
     * @var array
     */
    private $calls = array();

    /*
     * {@inheritdoc}
     */
    public function send($method, $uri, array $options = [])
    {
        $this->calls[] = array('send', $method, $uri, $options);

        return new Response();
    }

    /*
     * {@inheritdoc}
     */
    public function purge($url, array $options = [])
    {
        $this->calls[] = array('purge', $url, $options);

        return new Response();
    }

    /*
     * {@inheritdoc}
     */
    public function purgeAll($service, array $options = [])
    {
        $this->calls[] = array('purgeAll', $service, $options);

        return new Response();
    }

    /*
     * {@inheritdoc}
     */
    public function purgeKey($service, $key, array $options = [])
    {
        $this->calls[] = array('purgeKey', $service, $key, $options);

        return new Response();
    }

    /**
     * @param $num
     *
     * @return array|null
     */
    public function getCall($num)
    {
        if (array_key_exists($num, $this->calls)) {
            return $this->calls[$num];
        }

        return null;
    }
}
