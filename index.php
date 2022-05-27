<?php

use App\controllers\CompaniesController;
use App\controllers\ContactController;
use App\controllers\HomeController;
use App\controllers\InvoicesController;
use App\controllers\ConnexionController;

require __DIR__ . '/vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function () {
    $home = new HomeController();
    $home->index();
});

$router->map('GET', '/connect', function () {
    $connect = new ConnexionController();
    $connect->index();
});

$router->map('POST', '/connect-get', function () {
    $connect = new ConnexionController();
    $connect->get();
});

$router->map('GET', '/disconnect', function () {
    $disconnect = new ConnexionController();
    $disconnect->disconnect();
});

$router->map('GET', '/contacts', function () {
    $contact = new ContactController();
    $contact->index();
});

$router->map('GET', '/contact-new', function () {
    $contact = new ContactController();
    $contact->create();
});

$router->map('POST', '/contact-store', function () {
    $contact = new ContactController();
    $contact->store();
});

$router->map('GET', '/contact-details/[i:id]', function ($id) { // slug et id en args
    $contact = new ContactController();
    $contact->show($id);
});

$router->map('GET', '/invoices', function () {
    $invoices = new InvoicesController();
    $invoices->index();
});

$router->map('GET', '/invoice-new', function () {
    $invoices = new InvoicesController();
    $invoices->create();
});

$router->map('POST', '/invoice-store', function () {
    $invoices = new InvoicesController();
    $invoices->store();
});

$router->map('GET', '/invoice-details', function () { // slug et id en args
    $invoices = new InvoicesController();
    $invoices->show();
});

$router->map('GET', '/companies', function () {
    $companies = new CompaniesController();
    $companies->index();
});

$router->map('GET', '/company-new', function () {
    $companies = new CompaniesController();
    $companies->create();
});

$router->map('POST', '/company-store', function () {
    $companies = new CompaniesController();
    $companies->store();
});

$router->map('GET', '/company-details', function () { // slug et id en args
    $companies = new CompaniesController();
    $companies->show();
});

$match = $router->match();

if ($match !== false) {
    call_user_func_array($match['target'], $match['params']);
} else {
    require('views/notFound.php');
}