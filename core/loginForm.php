<?php

use App\core\GetFormData;
use App\core\LoginProcessing;

require '../core/classes/GetFormData.php';
require '../core/classes/LoginProcessing.php';

if (isset($_POST['submit_login_form'])) {
    $test = new LoginProcessing(new GetFormData($_POST));

    echo $test->getFormData->post->user_email;
    echo $test->getFormData->post->user_password;
}