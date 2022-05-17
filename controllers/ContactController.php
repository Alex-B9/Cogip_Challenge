<?php

namespace App\controllers;

/*
  * pareil que home sauf que vue qu'on vas avoir une sous page de la page <contact> 'contact-new'
  * on créer une methode qui vas rediriger sur une page ou on vas pouvoir créer une demande de contact.
*/
class ContactController extends Controller
{
    // page principale.
    public function index()
    {
        require $this->view('contacts');
    }

    // sous page qui créer une demande de contact.
    public function create()
    {
        require $this->view('contact_new');
    }

    public function show()
    {
        require $this->view('contact_details');
    }
}