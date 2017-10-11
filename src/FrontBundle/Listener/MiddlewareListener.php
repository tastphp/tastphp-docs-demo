<?php

namespace TastPHP\FrontBundle\Listener;

use TastPHP\Framework\Event\MiddlewareEvent;

class MiddlewareListener
{
    public function onMiddlewareAction(MiddlewareEvent $event)
    {
        echo "onMiddlewareAction ~";
    }
}