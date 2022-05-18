<?php

namespace App\models\crud;

use App\models\Database;

class CreateModel
{
    private $db;

    public function __construct()
    {
        $this->db=Database::connect();
    }

    public function createUser($firstname, $lastname, $email ,$password): bool
    {
            $sql = "INSERT INTO people (`PeopleId`,`firstname`, `lastname`, `email`, `password`) VALUES (0,'$firstname','$lastname','$email', '$password')";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute();
    }
}