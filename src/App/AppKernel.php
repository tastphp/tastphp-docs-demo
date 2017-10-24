<?php

namespace TastPHP\App;

use TastPHP\Framework\Event\AppEvent;
use TastPHP\Framework\Kernel;
use TastPHP\FrontBundle\Listener\MiddlewareListener;

class AppKernel extends Kernel
{
    public function __construct(array $values = [])
    {
//        $this->registerMiddlewareListener(MiddlewareListener::class, "onMiddlewareAction");
//        $this->registerCsrfTokenService();
//        $this->registerTwigService();

        $this->registerRedisService();
        $this->registerCacheService();
        $this->registerQueueService();
        $this->registerLoggerService();
//        $this->registerDoctrineService();
//        $this->registerJwtService();
//        $this->registerTwigService();
        parent::__construct($values);
    }
}