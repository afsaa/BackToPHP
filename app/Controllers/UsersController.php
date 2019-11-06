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
                    $_SESSION['userEmail'] = $postData['email'];
                    return $this->renderHTML('admin.twig');
                } else {
                    echo 'Invalid credentials';
                }
            }
        }
        $userSession = isset($_SESSION['userEmail']);
        if ($userSession) {
            return $this->renderHTML('admin.twig');
        } else {
            return $this->renderHTML('login.twig');
        }
    }

    public function logoutUser($request)
    {
        session_destroy();
        header("Location:login");
    }
}
