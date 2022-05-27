<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\GetUserModel;

class ConnexionController extends Controller
{
    public function index()
    {
        require $this->view('login/connect');
    }

    public function get()
    {
        if (isset($_POST['Submit'])) {
           $user = new GetUserModel(Request::get()['userEmail']);
           $errorMessage = new ErrorMessage();

           if (!is_null($user->getEmail()) && password_verify(Request::get()['userPassword'], $user->getPassword())) {
               session_start();
               $_SESSION['connected']['email'] = $user->getEmail();
               $_SESSION['connected']['pwd'] = $user->getPassword();
               header('location:/');

           } else {
               echo $errorMessage->incorrectInformation();
               $this->index();
           }
        }
    }

    public function disconnect()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: /');
    }
}
