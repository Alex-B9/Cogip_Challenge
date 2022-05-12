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

    public function setFirstname($firstname)
    {
        $this->firstname = htmlspecialchars($firstname);
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = htmlspecialchars($lastname);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = htmlspecialchars($email);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = htmlspecialchars(password_hash($password, PASSWORD_DEFAULT));
    }
}
