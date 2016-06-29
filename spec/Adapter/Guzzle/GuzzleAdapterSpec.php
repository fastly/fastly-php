<?php

namespace spec\Fastly\Adapter\Guzzle;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GuzzleAdapterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fastly\Adapter\Guzzle\GuzzleAdapter');
    }

    function it_returns_a_psr7_response()
    {
        $this->send('POST', 'http://endpoint.com/some/uri')->shouldHaveType('Psr\Http\Message\ResponseInterface');
    }
}
