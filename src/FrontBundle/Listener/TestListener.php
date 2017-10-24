<?php

namespace TastPHP\FrontBundle\Listener;

use Symfony\Component\EventDispatcher\Event;

class TestListener
{
    public function onTestAction(Event $event)
    {
        dump('onTest event action~');
    }
}