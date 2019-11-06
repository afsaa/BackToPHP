<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends BaseController
{
    public function getAddUserAction($request)
    {
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $user = new User();
            $user->email = $postData['email'];
            $user->password = password_hash($postData['password'], PASSWORD_DEFAULT);
            $user->save();
        }

        return $this->renderHTML('addUser.twig');
    }

    public function loginUser($request)
    {
        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $allUsers = User::all();
            foreach ($allUsers as $user) {
                if ($user->email === $postData['email'] && password_verify($postData['password'], $user->password)) {
                    return $this->renderHTML('admin.twig');
                } else {
                    echo 'Invalid credentials';
                }
            }
        }

        return $this->renderHTML('login.twig');
    }
}
