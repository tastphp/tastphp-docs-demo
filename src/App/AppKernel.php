<?php

namespace TastPHP\App;

use TastPHP\Framework\Event\AppEvent;
use TastPHP\Framework\Kernel;
use TastPHP\FrontBundle\Listener\MiddlewareListener;

class AppKernel extends Kernel
{
    public function __construct(array $values = [])
    {
//        $this->replaceListener(AppEvent::MIDDLEWARE,MiddlewareListener::class.'@onMiddlewareAction');
        parent::__construct($values);
    }
}