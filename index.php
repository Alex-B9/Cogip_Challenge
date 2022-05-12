<?php

use App\controllers\HomeController;

require 'vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        $home = new HomeController();
        $home->index();
        break;
    case '/user':
        $user = new UserController();
        $user->index();
        break;

}