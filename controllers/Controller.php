<?php

namespace App\controller;

class Controller
{
    public function view($view): string
    {
        return "views/". $view . ".php";
    }
}