<?php

namespace App\controllers;

class ContactController extends Controller
{
    public function index()
    {
        require $this->view('contact');
    }
}