<?php

namespace App\core;

use App\models\crud\ReadModel;
use App\models\GetUserModel;
use App\models\SetUserModel;

class LoginProcessing
{
    public $getFormData;
    public $readUserDB;

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

    public function  createNewUser()
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

    private function userExist()
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
//        return (preg_match('^[a-z0-9_-]{3,20}$', $name)) ? $name = trim
//        ($name) stripslashes($name) : 'Error : incorrect name';
        if (preg_match('^[a-z0-9_-]{3,20}$', $name))
        {
            $name = trim($name);
            return stripslashes($name);
        }
        return 'Error : incorect name';
    }

    private function emailIsValid($email): string
    {
//        $emailValidationRegex = "/^[a-z\d!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z\d!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z\d](?:[a-z\d-]*[a-z\d])?\\.)+[a-z\d](?:[a-z\d-]*[a-z\d]){3,20}?$/";

        return (!preg_match("/^[a-z\d!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z\d!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z\d](?:[a-z\d-]*[a-z\d])?\\.)+[a-z\d](?:[a-z\d-]*[a-z\d]){3,20}?$/", $email)) ? FALSE : TRUE;
//        '/^\\S+@\\S+\\.\\S+$/'

    }

    private function passwordIsValid($password): string
    {
        if (preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $password))
        {
            return trim($password);
        }

        return 'Error : Wrong password';
    }
}