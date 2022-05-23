<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetInvoiceModel
{
    private string $invoiceNumber;
    private $date;
    private int $idCompany;
    public int $idPeople;
    private string $contact;

    private CreateModel $dbCreate;

    public function setInvoiceNumber(string $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    public function setDate($date): void
    {
        $this->date = date('Y-m-d', strtotime($date));
    }

    public function setCompany(int $IdCompany): void
    {
        $this->idCompany = $IdCompany;
    }

    public function setIdPeople(int $idPeople): void
    {
        $this->idPeople = $idPeople;
    }


    public function setContact(string $contact): void
    {
        $this->contact = $contact;
    }

    public function setInvoiceDb(): void
    {
        $this->dbCreate->createInvoice($this->idCompany, $this->idPeople,
            $this->invoiceNumber, $this->date);
    }
}