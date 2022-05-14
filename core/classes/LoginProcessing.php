<?php

namespace App\core;

use App\models\GetUserModel;
use App\models\SetUserModel;

class LoginProcessing
{
    public $getFormData;

    public function __construct(GetFormData $getFormData)
    {
        $this->getFormData = $getFormData;
    }

    public function getConnected()
    {
        $user = new GetUserModel();
    }

    public function  createNewUser()
    {
        $user =  new SetUserModel();
    }
}