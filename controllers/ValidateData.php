<?php

namespace App\controllers;

class ValidateData
{
    public function nameIsValid($name): string
    {
        if (!preg_match('^[a-z0-9_-]{3,20}$', $name))
        {
            return FALSE;
        } else {
            $name = trim($name);
            return stripslashes($name);
        }
    }

    public function emailIsValid($email): string
    {
        return (!preg_match("/^[a-z\d!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z\d!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z\d](?:[a-z\d-]*[a-z\d])?\\.)+[a-z\d](?:[a-z\d-]*[a-z\d]){3,20}?$/", $email)) ? FALSE : trim($email);
    }

    public function passwordIsValid($password): string
    {
        if (!preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$', $password))
        {
            return FALSE;
        } else {
            return trim($password);
        }

    }
}
