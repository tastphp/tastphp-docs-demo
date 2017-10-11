<?php

namespace TastPHP\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use TastPHP\Common\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        echo "<br> indexAction ~<br>";
//        return new JsonResponse(['name1'=>'tastphp~',"name2"=>"tastphp!"]);
        return $this->response("response ok!");
//        return $this->render('home/index.html.twig');
    }
}