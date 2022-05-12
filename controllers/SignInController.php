<?php

namespace App\controllers;

class SignInController extends Controller
{
    public function index()
    {
        require $this->view('login/sign-in');
    }
}