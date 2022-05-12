<?php

use App\controllers\CompaniesController;
use App\controllers\ContactController;
use App\controllers\HomeController;
use App\controllers\InvoicesController;
use App\controllers\RegisterController;
use App\controllers\ConnectController;

require __DIR__ . '/vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        $home = new HomeController();
        $home->index();
        break;
    case '/connect':
        $sign = new ConnectController();
        $sign->index();
        break;
    case '/contact':
        $sign = new ContactController();
        $sign->index();
        break;
    case '/invoices':
        $sign = new InvoicesController();
        $sign->index();
        break;
    case '/companies':
        $sign = new CompaniesController();
        $sign->index();
        break;
    case '/register':
        $register = new RegisterController();
        $register->index();
        break;
    default:
        require('views/notFound.php');
}
