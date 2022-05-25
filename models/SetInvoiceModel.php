<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetInvoiceModel
{
    private string $invoiceNumber;
    private $date;
    private int $idCompany;
    public int $idPeople;

    private CreateModel $dbCreate;

    public function __construct()
    {
        $this->dbCreate = new CreateModel();
    }

    public function setInvoiceNumber(string $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    public function setDate($date): void
    {
        $this->date = date('Y-m-d', strtotime($date));
    }

    public function setIdCompany(int $IdCompany): void
    {
        $this->idCompany = $IdCompany;
    }

    public function setIdPeople(int $idPeople): void
    {
        $this->idPeople = $idPeople;
    }

    public function setInvoiceDb(): void
    {
//        $this->dbCreate->createInvoice(0, $this->idCompany, $this->idPeople,
//            $this->invoiceNumber, $this->date);

                $this->dbCreate->createInvoice($this->idCompany,
        $this->idPeople, $this->invoiceNumber, $this->date);

    }
}