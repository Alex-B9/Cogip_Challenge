<?php

use App\controllers\HomeController;

require __DIR__.'/vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        $home = new HomeController();
        $home->index();
        break;
    case '':

        break;
    case '':

        break;
    case '':

        break;
    case '':

        break;
    case '':

        break;
    case '':

        break;
    case '':

        break;
    default: require ('views/notFound.php');

}