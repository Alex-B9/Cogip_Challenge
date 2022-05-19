<?php

namespace App\models;

use App\models\crud\ReadModel;

class GetUserModel
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $dbRead;

    public function __construct($email)
    {
        $this->email = $email;
        $this->dbRead = new ReadModel();
    }

    public function getFirstname()
    {
        $this->firstname = $this->dbRead->getUser($this->email)['username'];

        Database::disconnect();

        return $this->firstname;
    }

    public function getLastname()
    {
        $this->firstname = $this->dbRead->getUser($this->email)['lastname'];

        Database::disconnect();

        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        $this->firstname = $this->dbRead->getUser($this->email)['password'];

        Database::disconnect();

        return $this->password;
    }
}