<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetCompanyModel
{
    private $name;
    private $country;
    private $vatNumber;

    public function setName($name): void
    {
        $this->name = htmlspecialchars($name);
    }

    public function setCountry($country): void
    {
        $this->country = htmlspecialchars($country);
    }

    public function setVatNumber($vatNumber): void
    {
        $this->vatNumber = htmlspecialchars($vatNumber);
    }

    public function dbSetCompany(): void
    {
        $dbCreate = new CreateModel();
        $dbCreate->createCompany($this->name, $this->country, $this->vatNumber);
    }
}