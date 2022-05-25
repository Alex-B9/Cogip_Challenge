<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetContactModel;

class ContactController extends Controller
{
    public function index()
    {
        require $this->view('contacts');
    }

    public function create()
    {
        require $this->view('contact_new');
    }

    public function store()
    {
//        if (isset($_POST['submit'])) {
            $validate = new ValidateData();
            $setContact = new SetContactModel();
            $error = new ErrorMessage();

            $id = Request::get()['company'];
            $lastname = $validate->nameIsValid(Request::get()['lastname']);
            $firstname = $validate->nameIsValid(Request::get()['firstname']);
            $phone = $validate->phoneIsValid(Request::get()['phone']);
            $email = $validate->emailIsValid(Request::get()['email']);

                $setContact->setCompanyId($id);
                $setContact->setLastname($lastname);
                $setContact->setFirstname($firstname);
                $setContact->setPhone($phone);
                $setContact->setEmail($email);

            if ($id && $lastname && $firstname && $phone && $email) {
                $setContact->setPeopleDb();
            }
//            header('location:/contact-new');
            $this->create();
        }
//    }

    public function show() // maybe ID ?
    {
        require $this->view('contact_details');
    }
}