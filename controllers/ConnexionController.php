<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetUserModel;

class ConnexionController extends Controller
{
    public function index()
    {
        require $this->view('login/connect');
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
