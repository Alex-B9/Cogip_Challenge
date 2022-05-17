<?php

namespace App\controllers;

/*
  * pareil que home sauf que vue qu'on vas avoir une sous page de la page <companie> 'company-new'
  * on créer une methode qui vas rediriger sur une page ou on vas pouvoir créer une nouvelle company.
*/
class CompaniesController extends Controller
{
    //page pricinpale.
    public function index()
    {
        require $this->view('companies');
    }

    // sous page qui créer une nouvelle company.
    public function create()
    {
        require $this->view('company_new');
    }

    public function show()
    {
        require $this->view('company_details');
    }
}