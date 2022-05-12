<?php

namespace App\core\classes;

class Companie
{
    private $name;
    private $country;
    private $VATnumber;

    public function __construct($name, $country, $VatNumber)
    {
        $this->name = $name;
        $this->country = $country;
        $this->VATnumber = $VatNumber;
    }
}