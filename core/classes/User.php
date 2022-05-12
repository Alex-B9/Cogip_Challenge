<?php

namespace App\core\classes;

class User
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname): User
    {
        $this->firstname = htmlspecialchars($firstname);

        return $this;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname): User
    {
        $this->lastname = htmlspecialchars($lastname);

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): User
    {
        $this->email = htmlspecialchars($email);

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): User
    {
        $this->password = htmlspecialchars(password_hash($password, PASSWORD_DEFAULT));

        return $this;
    }
}
