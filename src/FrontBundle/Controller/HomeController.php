<?php

namespace TastPHP\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Psr\Http\Message\ServerRequestInterface;
use TastPHP\Common\Controller;
use TastPHP\Framework\Event\Event;

class HomeController extends Controller
{
    public function indexAction(ServerRequestInterface $request)
    {
//        dump($this->get('redis'));
//        dump($this->get('redisCache'));
        $this->get('eventDispatcher')->dispatch('test.event', new Event());
//        dump($request);
//        dump($request->getMethod());
        echo $request->getMethod();
//        echo $request->getMethod();
//        phpinfo();
//        $logger = $this->get('logger');
//        $logger::info("indexAction,time:" . time());
//        $logger::info("indexAction,time:" . time(),['name1'=>'tastphp~',"name2"=>"tastphp!"]);
//        return new JsonResponse(['name1'=>'tastphp~',"name2"=>"tastphp!"]);
//        return $this->response("response ok!");
//        return $this->render('home/index.html.twig');
    }
}