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

            if ($invoiceNumber)
            {
                $setInvoice->setInvoiceNumber($invoiceNumber);
            }
            else
            {
                echo $error->invoiceNumberError();
            }
            if ($invoiceDate)
            {
                $setInvoice->setDate($invoiceDate);
            }
            else
            {
                echo $error->invoiceDateError();
            }
            if ($invoiceCompany)
            {
                $setInvoice->setIdCompany($invoiceCompany);
            }
            else
            {
                echo $error->invoiceCompanyError();
            }
            if ($invoiceContact)
            {
                $setInvoice->setIdPeople($invoiceContact);
            }
            else
            {
                echo $error->invoiceIdPeopleError();
            }


            if ($invoiceNumber && $invoiceDate && $invoiceCompany && $invoiceContact)
            {
                $setInvoice->setInvoiceDb();
            }
            else
            {
                echo $error->incorrectInformation();
            }

            header('location: /invoices');
        }
    }
}