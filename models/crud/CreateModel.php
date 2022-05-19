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

    public function createUser($firstname, $lastname, $email, $password): void
    {
//        $sql = "INSERT INTO people (`PeopleId`,`firstname`, `lastname`, `email`, `password`) VALUES (0,'$firstname','$lastname','$email', '$password')";
//        $this->db->prepare($sql)->execute();

        $sql = "INSERT INTO people (PeopleId, firstname, lastname, email, password) 
                VALUES (:PeopleId, :firstname, :lastname, :email, :password)";

        $statement = $this->db->prepare($sql);

        $statement->execute(array(
            ':PeopleId' => 0,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':password' => $password
        ));
    }

    public function createCompany($name, $country, $vat): void
    {
        $sql =
            "INSERT INTO `companies` (CompaniesId, `company_name`, country, `vat_number`) VALUES (':CompaniesId', ':company_name', ':country', ':vat_number')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array(
            ':CompaniesId' => 0,
            ':company_name' => $name,
            ':country' => $country,
            ':vat_number' => $vat
        ));
    }

}