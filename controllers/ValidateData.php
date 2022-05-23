<?php

namespace App\controllers;

class ValidateData
{
    public function nameIsValid($name): string
    {
        return (!preg_match('/^[a-zA-Z]{3,20}$/', $name)) ? FALSE : stripslashes($name);
    }

    public function emailIsValid($email): string
    {
        return (!preg_match("/^[a-zA-Z_.-]{3,28}+@+[a-z]{3,15}+\.+[a-z]{2,6}$/", $email)) ? FALSE : trim($email);
    }

    public function phoneIsValid($phoneNumber): int
    {
        return (!preg_match("/[\d-]{8,10}/", $phoneNumber)) ? FALSE : trim
        ($phoneNumber);
    }

    public function companyNameIsValid($companyName): string
    {
        return (!preg_match('/^[a-zA-Z_.-].{3,35}}$/', $companyName)) ? FALSE
            : stripslashes($companyName);
    }

    public function countryIsValid($country): string
    {
        return (!preg_match('/^[a-zA-Z].{3,12}$/', $country)) ? FALSE :
            stripslashes($country);
    }

    public function vatIsValid($vatNumber): string
    {
        return (!preg_match("/^[A-Z]{2}+\d{5,12}$/", $vatNumber)) ? FALSE : trim($vatNumber);
    }

    public function passwordIsValid($password): string
    {
        return (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*\d)(?=\S*[-_*])\S*$/', $password)) ?  FALSE : trim($password);
    }

    public function invoiceNumberIsValid($invoiceNumber)
    {
        return (!preg_match('/^[A-Z]{1}+\d{8}+-+\d{3}$/', $invoiceNumber)) ?
            FALSE : trim($invoiceNumber);
    }

    public function dateIsValid($date)
    {
        return (!preg_match('/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]|(?:Jan|Mar|May|Jul|Aug|Oct|Dec)))\1|(?:(?:30|31)(\/|-|\.)(?:0?[1,3-9]|1[0-2]|(?:Jan|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec))\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)(?:0?2|(?:Feb))\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9]|(?:Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep))|(?:1[0-2]|(?:Oct|Nov|Dec)))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/', $date)) ? FALSE : trim($date);
    }
}
