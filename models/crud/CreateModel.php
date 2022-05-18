<?php

namespace App\models\crud;

use App\models\Database;

class CreateModel
{
    private \PDO $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function createUser($firstname, $lastname, $email ,$password): void
    {
//        $sql = "INSERT INTO people (`PeopleId`,`firstname`, `lastname`, `email`, `password`) VALUES (0,'$firstname','$lastname','$email', '$password')";
//        $this->db->prepare($sql)->execute();

        $sql = "INSERT INTO people (PeopleId, firstname, lastname, email, password) 
                VALUES (:PeopleId, :firstname, :lastname, :email, :password)";

        $statement = $this->db->prepare($sql);

        $statement->execute(array(
            ':PeopleId' => 3,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':password' => $password
        ));
    }
}