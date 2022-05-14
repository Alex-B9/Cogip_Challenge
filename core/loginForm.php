<?php

use App\core\GetFormData;
use App\core\LoginProcessing;

require '../core/classes/GetFormData.php';
require '../core/classes/LoginProcessing.php';

if (isset($_POST['submit_login_form'])) {
    $userLogin = new LoginProcessing(new GetFormData($_POST));

    echo $userLogin->getFormData->post->user_email;
    echo $userLogin->getFormData->post->user_password;
}