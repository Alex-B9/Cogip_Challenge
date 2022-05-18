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

            $firstname = $dataValidate->nameIsValid(Request::get()['registerFirstname']);
            $lastname = $dataValidate->nameIsValid(Request::get()['registerLastname']);
            $email = $dataValidate->emailIsValid(Request::get()['registerEmail']);
            $password = $dataValidate->passwordIsValid(Request::get()['registerPassword']);

            $user = new SetUserModel();
            $error = new ErrorMessage();

//            session_start();

            if ($firstname)
            {
                $user->setFirstname($firstname);

            } else {
                echo $error->firstnameError();
            }

            if ($lastname)
            {
                // true envoie db
                $user->setLastname($lastname);

            } else {
                echo $error->lastnameError();
            }

            if ($email)
            {
                // true envoie db
                $user->setEmail($email);

            } else {
                echo $error->emailError();
            }

            if ($password)
            {
                // true envoie db
                $user->setPassword($password);

            } else {
                echo $error->passwordError();
            }

            if ($firstname && $lastname && $email && $password) {
                $user->dbSetUser();
            } else {
                echo $error->errorUserExist();
            }
        }
    }
}
