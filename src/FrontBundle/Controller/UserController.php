<?php

namespace TastPHP\FrontBundle\Controller;

use TastPHP\Common\Controller;

class UserController extends Controller
{
    public function addAction()
    {
        $user = [];
        $user['username'] = "tastphp_user";
        $user['password'] = password_hash("tastphp_pass", PASSWORD_DEFAULT);
        $result = $this->getUserService()->addUser($user);
        if ($result) {
            echo "add ok";
        }
    }

    public function getAction()
    {

    }

    public function updateAction()
    {

    }

    public function deleteAction()
    {

    }

    protected function getUserService()
    {
        return $this->registerService('User.UserService');
    }
}