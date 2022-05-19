<?php

namespace App\models;

class ErrorMessage
{
    public function firstnameError(): string
    {
        return "Error: incorrect firstname !";
    }

    public function lastnameError(): string
    {
        return "Error: incorrect lastname !";
    }

    public function emailError(): string
    {
        return "Error: incorrect mail !";
    }

    public function passwordError(): string
    {
        return "Error: incorrect password !";
    }

    public function errorUserExist(): string
    {
        return "Error: incorrect information !";
    }

    public function errorCompanyName(): string
    {
        return "Error : Incorrect name company";
    }

    public function errorCompanyCountry(): string
    {
        return "Error : Incorrect company country";
    }

    public function errorCompanyVat(): string
    {
        return "Error : Incorrect company V.A.T.";
    }

    public function companyExist(): string
    {
        return "Error : Incorrect informations";
    }
}