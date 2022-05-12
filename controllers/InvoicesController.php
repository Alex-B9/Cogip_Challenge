<?php

namespace App\controllers;

class InvoicesController extends Controller
{
    public function index()
    {
        require $this->view('invoices');
    }
}