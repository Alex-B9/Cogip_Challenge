<?php

namespace App\controllers;

class RegisterController extends Controller
{
    public function index()
    {
        require $this->view('login/register');
    }
}