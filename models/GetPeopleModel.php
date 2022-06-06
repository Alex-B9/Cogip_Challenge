<?php

// link avec contact new .

namespace App\models;

use App\models\crud\ReadModel;

class GetPeopleModel
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private int $phone;
    private string $company;

    private ReadModel $dbRead;

    public function __construct($id)
    {
        $this->id = $id;
        $this->dbRead = new ReadModel();
    }

    public function getFirstname(): string
    {
        $this->firstname = $this->dbRead->getPeopleAndCompanyById($this->id)['firstname'];

        return $this->firstname;
    }

    public function getLastname(): string
    {
        $this->lastname = $this->dbRead->getPeopleAndCompanyById($this->id)['lastname'];

        return $this->lastname;
    }

    public function getEmail(): string
    {
        $this->email = $this->dbRead->getPeopleAndCompanyById($this->id)['email'];

        return $this->email;
    }

    public function getPhone(): int
    {
        $this->phone = $this->dbRead->getPeopleAndCompanyById($this->id)['Phone'];

        return $this->phone;
    }

    public function getCompany(): string
    {
        $this->company = $this->dbRead->getPeopleAndCompanyById($this->id)['company_name'];

        return $this->company;
    }
}