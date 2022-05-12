<?php

namespace App\controllers;

class ConnectController extends Controller
{
    public function index()
    {
        require $this->view('login/connect');
    }
}