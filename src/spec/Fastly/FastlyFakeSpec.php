<?php

namespace spec\Fastly;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @author Gonzalo Vilaseca <gonzalo.vilaseca@reiss.com>
 */
class FastlyFakeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Fastly\FastlyFake');
    }

    function it_should_log_calls()
    {
        $this->send('POST', 'some/url', array('option1'));
        $this->purge('some/url', array('option2'));
        $this->purgeAll('someService', array('option3'));
        $this->purgeKey('someService', 'someKey', array('option4'));

        $this->getCall(0)->shouldReturn(array('send', 'POST', 'some/url', array('option1')));
        $this->getCall(1)->shouldReturn(array('purge', 'some/url', array('option2')));
        $this->getCall(2)->shouldReturn(array('purgeAll', 'someService', array('option3')));
        $this->getCall(3)->shouldReturn(array('purgeKey', 'someService', 'someKey', array('option4')));
    }

    function it_return_prs7_response()
    {
        $this->send('POST', 'some/url', array('option1'))->shouldHaveType('Psr\Http\Message\ResponseInterface');
        $this->purge('some/url', array('option2'))->shouldHaveType('Psr\Http\Message\ResponseInterface');
        $this->purgeAll('someService', array('option3'))->shouldHaveType('Psr\Http\Message\ResponseInterface');
        $this->purgeKey('someService', 'someKey', array('option4'))->shouldHaveType('Psr\Http\Message\ResponseInterface');
    }

    function it_returns_null_if_no_calls_have_been_made()
    {
        $this->getCall(123)->shouldReturn(null);
    }
}
