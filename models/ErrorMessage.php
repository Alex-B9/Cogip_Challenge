<?php

namespace App\models;

class ErrorMessage
{
    public function firstnameError(): string
    {
        return "Error: incorrect firstname !";
    }

    public function errorUserExist(): string
    {
        return "Error: ";
    }
}