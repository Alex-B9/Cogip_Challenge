<?php

namespace App\core\classes;

class GetCompany
{
    private $name;
    private $country;
    private $VATnumber;

    public function getName()
    {

        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getVATnumber()
    {
        return $this->VATnumber;
    }
}