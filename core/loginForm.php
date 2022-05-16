<?php

use App\core\GetFormData;
use App\core\LoginProcessing;

require '../core/classes/GetFormData.php';
require '../core/classes/LoginProcessing.php';

if (isset($_POST['submit_login_form'])) {

    $login = new GetFormData($_POST);
    $userLogin = new LoginProcessing($login);

    echo $userLogin->getFormData->post->user_email;
    echo $userLogin->getFormData->post->user_password;
}