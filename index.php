<?php

use App\controllers\CompaniesController;
use App\controllers\ContactController;
use App\controllers\HomeController;
use App\controllers\InvoicesController;
use App\controllers\ConnexionController;

require __DIR__ . '/vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        $home = new HomeController();
        $home->index();
        break;
    case '/connect':
        $sign = new ConnexionController();
        $sign->index();
        break;
    case '/contacts':
        $contact = new ContactController();
        $contact->index();
        break;
    case '/contact-new':
        $contact = new ContactController();
        $contact->create();
        break;
    case '/contact-details':
        $contact = new ContactController();
        $contact->show();
        break;
    case '/invoices':
        $invoices = new InvoicesController();
        $invoices->index();
        break;
    case '/invoice-new':
        $invoice = new InvoicesController();
        $invoice->create();
        break;
    case '/invoice-details':
        $invoice = new InvoicesController();
        $invoice->show();
        break;
    case '/companies':
        $companies = new CompaniesController();
        $companies->index();
        break;
    case '/company-new':
        $company = new CompaniesController();
        $company->create();
        break;
    case '/company-details':
        $company = new CompaniesController();
        $company->show();
        break;
    case '/register':
        $register = new ConnexionController();
        $register->create();
        break;
    case '/register-new':
        $register = new ConnexionController();
        $register->store();
        break;
    default:
        require('views/notFound.php');
}
