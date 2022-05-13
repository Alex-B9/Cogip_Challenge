<?php

namespace App\controllers;

class CompaniesController extends Controller
{
    public function index()
    {
        require $this->view('companies');
    }

    public function create()
    {
        require $this->view('company_new');
    }
}