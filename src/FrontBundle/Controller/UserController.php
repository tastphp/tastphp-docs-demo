<?php

namespace TastPHP\FrontBundle\Controller;

use TastPHP\Common\Controller;
use TastPHP\Framework\Http\Request;

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

    public function getAction($id)
    {
        $result = $this->getUserService()->getUser($id);
        if ($result) {
            var_dump($result);
        }
    }

    public function updateAction(Request $request)
    {
        $data = $request->request->all();
        $updateUser = [];
        if (!empty($id = $data['id']) && !empty($userName = $data['name'])) {
            $updateUser['username'] = $userName;
            $result = $this->getUserService()->updateUser($id, $updateUser);
            var_dump($result);
        }

    }

    public function deleteAction(Request $request)
    {
        $id = $request->request->get('id');
        $result = $this->getUserService()->removeUser($id);
        var_dump($result);
    }

    protected function getUserService()
    {
        return $this->registerService('User.UserService');
    }
}