<?php

use App\core\GetFormData;

require '../core/classes/GetFormData.php';
require '../core/classes/LoginProcessing.php';

if (isset($_POST['submit_login_form'])) {
    $login = new GetFormData($_POST);

    $test = new \App\core\LoginProcessing($login);

    echo $test->getFormData->post->user_email;
    echo $test->getFormData->post->user_password;
}