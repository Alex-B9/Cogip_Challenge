<?php

namespace App\controllers;

// HomeController renvoie une methode index() qui charge le contenu de la page home.
class HomeController extends Controller
{
    public function index()
    {
        require $this->view('home');
    }
}