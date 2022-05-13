<?php

namespace App\controllers;

// pareil que home.
class RegisterController extends Controller
{
    public function index()
    {
        require $this->view('login/register');
    }
}