<?php

//namespace App\core;

use App\core\GetFormData;
use App\core\LoginProcessing;

require '../core/GetFormData.php';
require '../core/LoginProcessing.php';

if (isset($_POST['Submit'])) {
    $login = new GetFormData($_POST);

    $test = new LoginProcessing($login);

    echo $test->getFormData->post->userEmail;
    echo $test->getFormData->post->userPassword;
}