<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetUserModel
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $DbCreate;



    public function setFirstname($firstname): SetUserModel
    {
        $this->firstname = htmlspecialchars($firstname);

        return $this;
    }

    public function setLastname($lastname): SetUserModel
    {
        $this->lastname = htmlspecialchars($lastname);

        return $this;
    }

    public function setEmail($email): SetUserModel
    {
        $this->email = htmlspecialchars($email);

        return $this;
    }

    public function setPassword($password): SetUserModel
    {
        $this->password = htmlspecialchars(password_hash($password, PASSWORD_DEFAULT));

        return $this;
    }

    public function dbSetUser()
    {
        $DbCreate = new CreateModel();
        $DbCreate->createUser($this->firstname, $this->lastname,
            $this->email, $this->password);
    }
}