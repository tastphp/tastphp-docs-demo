<?php

namespace TastPHP\FrontBundle\Controller;

use Psr\Http\Message\ServerRequestInterface;
use TastPHP\Common\Controller;
use TastPHP\Framework\Adapter\RequestAdapter;
use TastPHP\Framework\Http\Request;

class FooController extends Controller
{
    public function indexAction(ServerRequestInterface $request)
    {
//        dump($request->query->get('name'));
//        dump($request->request->get('name'));
//        dump($request->getQueryParams());
//        echo "hello FooController Action ~";
        dump($request);
        $symfonyRequest = RequestAdapter::convertSymfonyRequest($request);
        dump($symfonyRequest);
    }
}