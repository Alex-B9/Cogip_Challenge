<?php
/*
use \App\core\GetFormData;
use \App\core\LoginProcessing;
use \App\models\SetUserModel;

require ('../core/GetFormData.php');
require ('../core/LoginProcessing.php');

if (isset($_POST['submitRegister']))
{
    $register = new GetFormData($_POST);
    $reg = new LoginProcessing($register);

    echo $reg->getFormData->post->registerFirstname; //
    // $_POST['registerFirstname']
    echo $reg->getFormData->post->registerLastname;
    echo $reg->getFormData->post->registerEmail;
    echo $reg->getFormData->post->registerPassword;

    $user = new SetUserModel();
    $reg->createNewUser($user);

}*/