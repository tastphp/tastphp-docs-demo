<?php

namespace TastPHP\FrontBundle\Listener;

use TastPHP\Framework\Event\MiddlewareEvent;

class MiddlewareListener
{
    public function onMiddlewareAction(MiddlewareEvent $event)
    {
//        echo "onMiddlewareAction ~";
//
//        $csrfTokenService = $event->getParameters()['csrfToken'];
//        dump($csrfTokenService);
//
//        $token = $csrfTokenService->generate();
//        dump($token);
//        $validation = $csrfTokenService->validate($token);
//        dump($validation);
    }
}