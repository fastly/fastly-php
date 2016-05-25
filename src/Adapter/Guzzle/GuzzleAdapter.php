<?php

namespace Fastly\Adapter\Guzzle;

use Fastly\Fastly as Fastly;
use Fastly\Adapter\AdapterInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * @author Gonzalo Vilaseca <gonzalo.vilaseca@reiss.com>
 */
class GuzzleAdapter implements AdapterInterface
{
    /**
     * Client
     *
     * @var Client
     */
    private $client;

    /**
     * @param string $fastlyKey
     * @param array  $defaultHeaders
     */
    public function __construct(
        $fastlyKey = null,
        $defaultHeaders = []
    )
    {
        $this->client = new Client(array_merge(
            ['headers' => [
                'Fastly-Key' => $fastlyKey,
                'Accept'     => 'application/json',
                'User-Agent' => 'fastly-php-v' . Fastly::VERSION
            ]],
            $defaultHeaders
        ));
    }

    /*
     * {@inheritdoc}
     */
    public function send($method, $uri, array $options = [])
    {
        $request = new Request($method, $uri);

        return $this->client->send($request, $options);
    }
}
