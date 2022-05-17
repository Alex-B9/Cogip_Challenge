<?php

namespace App\controllers;

/*
  * pareil que home sauf que vue qu'on vas avoir une sous page de la page <invoices> 'invoice-new'
  * on créer une methode qui vas rediriger sur une page ou on vas pouvoir créer une nouvelle facture.
*/
class InvoicesController extends Controller
{
    // page principale.
    public function index()
    {
        require $this->view('invoices');
    }

    // sous page qui créer une nouvelle facture.
    public function create()
    {
        require $this->view('invoice_new');
    }

    public function show()
    {
        require $this->view('invoice_details');
    }
}