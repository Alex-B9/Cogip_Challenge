<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\GetUserModel;
use App\models\SetUserModel;

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
               echo $user->getEmail() . "<br>";
               echo $user->getPassword() . "<br>";

               // session start here, SESSION blablabla..

               echo "Yay!<br>";
           } else {
               echo $errorMessage->incorrectInformation();
           }
        }
    }

    public function create()
    {
        require $this->view('login/register');
    }

    public function store()
    {
        if (isset($_POST)) {
            $dataValidate = new ValidateData();
            $user = new UserController();
            $setUser = new SetUserModel();
            $error = new ErrorMessage();

            $firstname = $dataValidate->nameIsValid(Request::get()['registerFirstname']);
            $lastname = $dataValidate->nameIsValid(Request::get()['registerLastname']);
            $email = $dataValidate->emailIsValid(Request::get()['registerEmail']);
            $password = $dataValidate->passwordIsValid(Request::get()['registerPassword']);

            if ($firstname)
            {
                $setUser->setFirstname($firstname);

            } else {
                echo $error->firstnameError();
            }

            if ($lastname)
            {
                $setUser->setLastname($lastname);

            } else {
                echo $error->lastnameError();
            }

            if ($email)
            {
                $setUser->setEmail($email);

            } else {
                echo $error->emailError();
            }

            if ($password)
            {
                $setUser->setPassword($password);

            } else {
                echo $error->passwordError();
            }

            if (!$user->userAlreadyExist($email) && $firstname && $lastname && $email && $password) {
                $setUser->dbSetUser();
            } else {
                echo $error->errorUserExist();
            }
        }
    }
}
