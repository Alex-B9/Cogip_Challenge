<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetInvoiceModel
{
    private int $invoiceNumber;
    private int $date;
    private string $company;
    private string $contact;

    private CreateModel $dbCreate;

    public function setInvoiceNumber(int $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    public function setDate(int $date): void
    {
        $this->date = $date;
    }

    public function setCompany(string $company): void
    {
        $this->company = $company;
    }

    public function setContact(string $contact): void
    {
        $this->contact = $contact;
    }

    public function setInvoiceDb(): void
    {
        $this->dbCreate->createInvoice($this->invoiceNumber, $this->date,
            $this->company, $this->contact); // heuu il
        // y a
        // des choses a
        // faire.
        //.. !
    }
}