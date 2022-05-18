<?php

namespace App\core;

use App\controllers\Request;
use App\models\crud\ReadModel;
use App\models\GetUserModel;
use App\models\SetUserModel;

/*require '../models/SetUserModel.php';*/
//require '../models/GetUserModel.php';
/*require '../models/crud/ReadModel.php';*/

class LoginProcessing
{
    public $post;
    public $readUserDB;

    public function __construct()
    {
        $this->post = Request::get();
        $this->readUserDB = new ReadModel();
        /*        $this->readUserDB = new ReadModel();
                $this->createNewUserDB = new CreateModel();*/
    }

    public function show()
    {
        echo $this->post['registerFirstname'];
    }

    public function getConnected()
    {
        $user = new GetUserModel();

        $this->readUserDB->getAllUsers();
    }

    public function  createNewUser(SetUserModel $userModel)
    {
//        $userFirstname = $this->getFormData->post->registerFirstname;
        $userFirstname = $this->post['registerFirstname'];
//        $userLastname = $this->getFormData->post->registerLastname;
        $userLastname = $this->post['registerLastname'];
//        $userEmail = $this->getFormData->post->registerEmail;
        $userEmail = $this->post['registerEmail'];
//        $userPassword = $this->getFormData->post->registerPassword;
        $userPassword = $this->post['registerPassword'];

        $user =  $userModel;

        if (!$this->userExist() AND $this->nameIsValid($userFirstname) AND
            $this->nameIsValid($userLastname) AND $this->emailIsValid
            ($userEmail) AND $this->passwordIsValid($userPassword))
        {
            $user->setFirstname($userFirstname);
            $user->setLastname($userLastname);
            $user->setEmail($userEmail);
            $user->setPassword($userPassword);

            $user->dbSetUser();
        }
        return 'Infos incorrect';
    }

    private function userExist()
    {
        // check if user exist in database, if it exist return true else false...
        $user = $this->readUserDB;

        foreach ($user->getAllUsers() as $item)
        {
//            if ($this->getFormData->post->userEmail = $item)
            if ($this->post['userEmail'] = $item)
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
        if (!preg_match('^[a-z0-9_-]{3,20}$', $name))
        {
            return FALSE;
        }

        $name = trim($name);
        return stripslashes($name);
    }

    private function emailIsValid($email): string
    {
//        $emailValidationRegex = "/^[a-z\d!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z\d!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z\d](?:[a-z\d-]*[a-z\d])?\\.)+[a-z\d](?:[a-z\d-]*[a-z\d]){3,20}?$/";

        return (!preg_match("/^[a-z\d!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z\d!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z\d](?:[a-z\d-]*[a-z\d])?\\.)+[a-z\d](?:[a-z\d-]*[a-z\d]){3,20}?$/", $email)) ? FALSE : trim($email);
//        '/^\\S+@\\S+\\.\\S+$/'

    }

    private function passwordIsValid($password): string
    {
        if (!preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $password))
        {
            return FALSE;
        }

        return trim($password);
    }
}