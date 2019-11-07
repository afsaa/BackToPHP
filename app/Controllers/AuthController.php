<?php

namespace App\Controllers;

use App\Models\User;
use Sirius\Validation\Validator;

class AuthController extends BaseController
{
    public function getLogin()
    {
        return $this->renderHTML('login.twig');
    }

    public function postLogin($request)
    {
        $validator = new Validator();
        $validator->add('email', 'required');
        $validator->add('email', 'email');
        $validator->add('password', 'required');

        if ($request->getMethod() == 'POST') {
            $postData = $request->getParsedBody();
            $allUsers = User::all();
            foreach ($allUsers as $user) {
                if ($user->email === $postData['email'] && password_verify($postData['password'], $user->password)) {
                    $_SESSION['userEmail'] = $postData['email'];
                    return $this->renderHTML('admin.twig');
                } else {
                    //header("Location:login");
                    $validator->addMessage('No Credentials', 'Invalid credentials, please try again.');
                    $errors = $validator->getMessages();
                    return $this->renderHTML('login.twig', [
                        'errors' => $errors
                    ]);
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

    public function getLogout()
    {
        session_destroy();
        header("Location:login");
    }
}
