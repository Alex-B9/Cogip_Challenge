<?php

namespace App\core;

use App\models\crud\CreateModel;
use App\models\crud\ReadModel;
use App\models\GetUserModel;
use App\models\SetUserModel;

class LoginProcessing
{
    public $getFormData;
    public $readUserDB;
    public $createNewUserDB;

    public function __construct(GetFormData $getFormData)
    {
        $this->getFormData = $getFormData;
/*        $this->readUserDB = new ReadModel();
        $this->createNewUserDB = new CreateModel();*/
    }

    public function getConnected()
    {
        $user = new GetUserModel();

        $this->readUserDB->getAllUsers();
    }

    public function  createNewUser(): string
    {
        $userFirstname = $this->getFormData->post->userFirstname;
        $userLastname = $this->getFormData->post->userLastname;
        $userEmail = $this->getFormData->post->userEmail;
        $userPassword = $this->getFormData->post->userPassword;

        $user =  new SetUserModel();
        if ($this->userExist() AND $this->nameIsValid($userFirstname) AND
            $this->nameIsValid($userLastname) AND $this->emailIsValid
            ($userEmail) AND $this->passwordIsValid($userPassword))
        {
            $user->setFirstname($userFirstname);
            $user->setLastname($userLastname);
            $user->setEmail($userEmail);
            $user->setPassword($userPassword);
        }
            return 'Infos incorrect';
    }

    private function userExist(): bool
    {
        // check if user exist in database, if it exist return true else false...
        $user = new ReadModel();


        foreach ($user->getAllUsers() as $item)
        {
           if ($this->getFormData->post->userEmail = $item)
           {
               header('location:views/login/register.php');
           }
        }
               return TRUE;
    }

    private function nameIsValid($name): string
    {
        if (preg_match('/^[a-zA-Z]{0,20}$/', $name))
        {
            $name = trim($name);
            return stripslashes($name);
        }
        return 'Error : incorect name';
    }

    private function emailIsValid($email): string
    {
        return !!preg_match("/^[a-zA-Z\d.,&’_~-]{3,20}+@[a-zA-Z]{3,15}+\.[a-zA-Z]{2,6}+$/",
            $email);
    }

    private function passwordIsValid($password): string
    {
        if (preg_match('^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?\d)(?=.*?[#?!@$ %&*-]).{8,}$', $password))
        {
            return trim($password);
        }

        return 'Error : Wrong password';
    }
}