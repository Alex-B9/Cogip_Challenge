<?php

namespace App\controllers;

use App\models\ErrorMessage;
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

//        if (isset($_POST['submit'])) {
            $validate = new ValidateData();
            $setContact = new SetContactModel();
            $error = new ErrorMessage();

            $id = Request::get()['company'];
            $lastname = $validate->nameIsValid(Request::get()['lastname']);
            $firstname = $validate->nameIsValid(Request::get()['firstname']);
            $phone = $validate->phoneIsValid(Request::get()['phone']);
            $email = $validate->emailIsValid(Request::get()['email']);

//            $_SESSION['dataContact']['lastname'] = $lastname;
            $_SESSION['dataContact']['firstname'] = $firstname;
            $_SESSION['dataContact']['phone'] = $phone;
            $_SESSION['dataContact']['email'] = $email;

            if (!$lastname){
                $_SESSION['dataContact']['lastname'] = $lastname;
                echo $_SESSION['contactError']['errLastname'] =
                    $error->lastnameError();
            }
            // Variable error
//        if (!$_SESSION['dataContact']['lastname']) {
//            $_SESSION['contactError']['errLastname'] =
//                $error->lastnameError();
//        }
            $_SESSION['contactError']['errFirstname'] =
                $error->firstnameError();
            $_SESSION['contactError']['errPhone'] =
                $error->phoneError();
            $_SESSION['contactError']['errEmail'] =
                $error->emailError();
//            $lname = null;
//            $lname_err = null;
//            $fname = null;
//            $fname_err = null;
//
//            $lname = Request::session()[$validate->nameIsValid(Request::get()['lastname'])];

            print_r($_SESSION['dataContact']);
            if ($_POST['submit']) {
                if (empty($lastname)) {
//                    echo $_SESSION['contactError']['ErrLastname'];
//                    echo "coucou";
//                    echo "<script> window.location.href='/contact-new';</script>";
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
            else {
                echo $_SESSION['contactError']['ErrLastname'];
            }

            if ($firstname) {
                $setContact->setFirstname($firstname);
            }
//            else {
//                echo $error->firstnameError();
//            }

            if ($phone) {
                $setContact->setPhone($phone);
            }
//            else {
//                echo $error->phoneError();
//            }

            if ($email) {
                $setContact->setEmail($email);
            }
//            else {
//                echo $error->emailError();
//            }

            if ($id && $lastname && $firstname && $phone && $email) {
                $setContact->setPeopleDb();
            }
//            else {
//                echo $error->incorrectInformation();
//            }

//            $this->create();
        }
//    }

    public function show() // maybe ID ?
    {
        require $this->view('contact_details');
    }
}
