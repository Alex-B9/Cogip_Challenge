<?php

use App\controllers\HomeController;
use App\controllers\RegisterController;
use App\controllers\SignInController;

require __DIR__ . '/vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        $home = new HomeController();
        $home->index();
        break;
    case '/sign-in':
        $sign = new SignInController();
        $sign->index();
        break;
    case '/register':
        $register = new RegisterController();
        $register->index();
        break;
    default:
        require('views/notFound.php');
}