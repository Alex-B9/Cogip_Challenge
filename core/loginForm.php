<?php

use App\core\GetFormData;

require '../core/classes/GetFormData.php';

if (isset($_POST['submit_login_form'])) {
    $login = new GetFormData($_POST);

    echo $login->post->user_password . "<br>";
    echo $login->post->user_email . "<br>";
}