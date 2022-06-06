<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\GetInvoiceModel;
use App\models\GetPeopleModel;
use App\models\SetContactModel;

class ContactController extends Controller
{
    public function index()
    {
        unset($_SESSION['dataContact']);
        unset($_SESSION['contactError']);
        require $this->view('contacts');
    }

    public function create()
    {
        require $this->view('contact_new');
    }

    public function store()
    {
            session_start();

            $validate = new ValidateData();
            $setContact = new SetContactModel();
            $error = new ErrorMessage();

            $id = Request::get()['company'];
            $lastname = $validate->nameIsValid(Request::get()['lastname']);
            $firstname = $validate->nameIsValid(Request::get()['firstname']);
            $phone = $validate->phoneIsValid(Request::get()['phone']);
            $email = $validate->emailIsValid(Request::get()['email']);

            if (!$lastname){
                $_SESSION['dataContact']['lastname'] = $lastname;
                $_SESSION['contactError']['errLastname'] =
                    $error->lastnameError();
            }
            if (!$firstname){
                $_SESSION['dataContact']['firstname'] = $firstname;
                $_SESSION['contactError']['errFirstname'] =
                    $error->firstnameError();
            }
            if (!$phone){
                $_SESSION['dataContact']['phone'] = $phone;
                $_SESSION['contactError']['errPhone'] =
                    $error->phoneError();
            }
            if (!$email){
                $_SESSION['dataContact']['email'] = $email;
                $_SESSION['contactError']['errEmail'] =
                    $error->emailError();
            }

            if ($_POST['submit']) {
                if (empty($lastname) OR empty($firstname) OR empty($phone) OR
                empty($email)) {
                    $this->create();
                }
            }
            if ($id) {
                $setContact->setCompanyId($id);
            }

            if ($lastname) {
                unset($_SESSION['contactError']['ErrLastname']);
                $setContact->setLastname($lastname);
            }

            if ($firstname) {
                unset($_SESSION['contactError']['ErrFirstname']);
                $setContact->setFirstname($firstname);
            }

            if ($phone) {
                unset($_SESSION['contactError']['ErrPhone']);
                $setContact->setPhone($phone);
            }

            if ($email) {
                unset($_SESSION['contactError']['ErrEmail']);
                $setContact->setEmail($email);
            }

            if ($id && $lastname && $firstname && $phone && $email) {
                $setContact->setPeopleDb();
                header('location: /contacts');
            }
        }

    public function show($id)
    {
        $people = new GetPeopleModel($id);
        $invoice = new GetInvoiceModel($id);

        require $this->view('contact_details');
    }
}
