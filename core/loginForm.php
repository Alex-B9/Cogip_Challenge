<?php

use App\core\GetFormData;

//require '../core/classes/GetFormData.php';
//require '../core/classes/LoginProcessing.php';

if (isset($_POST['Submit'])) {
    $login = new GetFormData($_POST);

    $test = new \App\core\LoginProcessing($login);

    echo $test->getFormData->post->userEmail;
    echo $test->getFormData->post->userPassword;
}