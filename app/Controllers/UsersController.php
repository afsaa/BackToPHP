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
}
