<?php

namespace spec\Fastly;

use Fastly\Adapter\AdapterInterface;
use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;

/**
 * @author Gonzalo Vilaseca <gonzalo.vilaseca@reiss.com>
 */
class FastlySpec extends ObjectBehavior
{
    private $headers = ['headers' =>
                            [
                                'someCustomHeader'    => 'withSomeValue',
                                'anotherCustomHeader' => 'anotherValue'
                            ]
    ];

    public function it_is_initializable(AdapterInterface $adapter)
    {
        $this->beConstructedWith($adapter, 'http://customEntryPoint');

        $this->shouldHaveType('Fastly\Fastly');
    }

    public function it_adds_entry_point_correctly(AdapterInterface $adapter)
    {
        $this->beConstructedWith($adapter, 'http://customEntryPoint');
        $uri = '/some/uri';

        $adapter->send('GET', 'http://customEntryPoint' . $uri, $this->headers)->shouldBeCalled();

        $this->send('GET', $uri, $this->headers);
    }

    public function it_omits_entry_point_correctly(AdapterInterface $adapter)
    {
        $this->beConstructedWith($adapter, 'http://customEntryPoint');
        $uri = 'http://someendpoint.com/some/uri';

        $adapter->send('GET', $uri, $this->headers)->shouldBeCalled();

        $this->send('GET', $uri, $this->headers);
    }

    public function it_returns_a_psr_response(AdapterInterface $adapter, ResponseInterface $response)
    {
        $this->beConstructedWith($adapter, 'http://customEntryPoint');
        $uri = 'http://someendpoint.com/some/uri';

        $adapter->send('GET', $uri, $this->headers)->shouldBeCalled()->willReturn($response);

        $this->send('GET', $uri, $this->headers)->shouldReturn($response);
    }

    public function it_has_fastly_endpoint_by_default(AdapterInterface $adapter)
    {
        $this->beConstructedWith($adapter);

        $uri = '/some/uri';

        $adapter->send('GET', 'https://api.fastly.com' . $uri, $this->headers)->shouldBeCalled();

        $this->send('GET', $uri, $this->headers);
    }
}
