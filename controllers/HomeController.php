<?php

namespace App\controllers;

use App\controller\Controller;

class HomeController extends controller
{
    public function index()
    {
        require $this->view('home');
    }
}