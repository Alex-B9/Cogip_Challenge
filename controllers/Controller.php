<?php

namespace App\controllers;


// Controller ne sert que a extend dans les autres class [nomDeLaPage]Controller pour qu'ils beneficient de la methode view().
class Controller
{
    public function view($view): string
    {
        return "views/". $view . ".php";
    }
}
