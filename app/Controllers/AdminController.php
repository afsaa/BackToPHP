<?php

namespace App\Controllers;

use App\Models\User;

class AdminController extends BaseController
{
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
                    header("Location:login");
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
