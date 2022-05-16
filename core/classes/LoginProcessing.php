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

    public function  createNewUser()
    {
        $user =  new SetUserModel();

        $user->setFirstname($this->getFormData->post->userFirstname);
        $user->setLastname($this->getFormData->post->userLastname);
        $user->setEmail($this->getFormData->post->userEmail);
        $user->setPassword($this->getFormData->post->userPassword);

        // check if userExist is false to create...
    }

    private function userExist()
    {
        // check if user exist in database, if it exist return true else false...
    }
}