<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetInvoiceModel;

class InvoicesController extends Controller
{
    public function index()
    {
        require $this->view('invoices');
    }

    public function create()
    {
        require $this->view('invoice_new');
    }

    public function show()
    {
        require $this->view('invoice_details');
    }

    public function store()
    {
//        var_dump(Request::get());
        if (isset($_POST))
        {
            $validate = new ValidateData();
            $setInvoice = new SetInvoiceModel();
            $error = new ErrorMessage();

            $invoiceNumber = $validate->invoiceNumberIsValid(Request::get()['invoiceNumber']);
            $invoiceDate = Request::get()['invoiceDate'];
            $invoiceCompany = Request::get()['invoiceCompany'];
            $invoiceContact = Request::get()['invoiceContact'];

            if (!$invoiceNumber){
                $_SESSION['dataInvoice']['number'] = $invoiceNumber;
                $_SESSION['invoiceError']['errNumber'] =
                    $error->invoiceNumberError();
            }
            if (!$invoiceDate){
                $_SESSION['dataInvoice']['date'] = $invoiceDate;
                $_SESSION['invoiceError']['errDate'] =
                    $error->invoiceDateError();
            }
            if (!$invoiceCompany){
                $_SESSION['dataInvoice']['company'] = $invoiceCompany;
                $_SESSION['invoiceError']['errCompany'] =
                    $error->invoiceCompanyError();
            }
            if (!$invoiceContact){
                $_SESSION['dataInvoice']['contact'] = $invoiceContact;
                $_SESSION['invoiceError']['errContact'] =
                    $error->invoiceContactError();
            }

            if ($_POST['submit']){
                if (empty($invoiceNumber) OR empty($invoiceDate) OR empty
                    ($invoiceCompany) OR empty($invoiceContact)){
                    $this->create();
                }
            }

            if ($invoiceNumber)
            {
                unset($_SESSION['invoiceError']['number']);
                $setInvoice->setInvoiceNumber($invoiceNumber);
            }
            if ($invoiceDate)
            {
                unset($_SESSION['invoiceError']['date']);
                $setInvoice->setDate($invoiceDate);
            }
            if ($invoiceCompany)
            {
                unset($_SESSION['invoiceError']['company']);
                $setInvoice->setIdCompany($invoiceCompany);
            }
            if ($invoiceContact)
            {
                unset($_SESSION['invoiceError']['contact']);
                $setInvoice->setIdPeople($invoiceContact);
            }


            if ($invoiceNumber && $invoiceDate && $invoiceCompany && $invoiceContact)
            {
                $setInvoice->setInvoiceDb();
                header('location: /invoices');
            }

        }
    }
}