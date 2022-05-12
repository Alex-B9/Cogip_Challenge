<?php

namespace App\models;

class SetUserModel
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    public function setFirstname($firstname)
    {
        // crud method CREATE
        $this->firstname = htmlspecialchars($firstname);
    }

    public function setLastname($lastname)
    {
        $this->lastname = htmlspecialchars($lastname);
    }

    public function setEmail($email)
    {
        $this->email = htmlspecialchars($email);
    }

    public function setPassword($password)
    {
        $this->password = htmlspecialchars(password_hash($password, PASSWORD_DEFAULT));
    }
}