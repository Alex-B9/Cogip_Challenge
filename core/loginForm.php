<?php

use App\core\GetFormData;

require '../core/GetFormData.php';
require '../core/LoginProcessing.php';

if (isset($_POST['Submit'])) {
    $login = new GetFormData($_POST);

    $test = new \App\core\LoginProcessing($login);

    echo $test->getFormData->post->userEmail;
    echo $test->getFormData->post->userPassword;
}