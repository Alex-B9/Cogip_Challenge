<?php

namespace App\controllers;

// pareil que home.
class ConnexionController extends Controller
{
    public function index()
    {
        require $this->view('login/connect');
    }

    public function create()
    {
        require $this->view('login/register');
    }
}
