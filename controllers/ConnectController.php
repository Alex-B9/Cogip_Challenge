<?php

namespace App\controllers;

// pareil que home.
class ConnectController extends Controller
{
    public function index()
    {
        require $this->view('login/connect');
    }
}
