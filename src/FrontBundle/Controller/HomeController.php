<?php

namespace TastPHP\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Psr\Http\Message\ServerRequestInterface;
use TastPHP\Common\Controller;

class HomeController extends Controller
{
    public function indexAction(ServerRequestInterface $request)
    {
//        dump($request);
//        dump($request->getMethod());
//        exit();
//        echo $request->getMethod();
//        phpinfo();
//        $logger = $this->get('logger');
//        $logger::info("indexAction,time:" . time());
//        $logger::info("indexAction,time:" . time(),['name1'=>'tastphp~',"name2"=>"tastphp!"]);
//        return new JsonResponse(['name1'=>'tastphp~',"name2"=>"tastphp!"]);
//        return $this->response("response ok!");
        return $this->render('home/index.html.twig');
    }
}