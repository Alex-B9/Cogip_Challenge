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

<<<<<<< HEAD
    public function createUser($firstname, $lastname, $email, $password): void
=======
    public function createUser($companyId, $firstname, $lastname, $email, $password, $phone): void
>>>>>>> 9a658a6a5305e32ba37317ccbff51bfe625e8e39
    {
//        $sql = "INSERT INTO people (`PeopleId`,`firstname`, `lastname`, `email`, `password`) VALUES (0,'$firstname','$lastname','$email', '$password')";
//        $this->db->prepare($sql)->execute();

        $sql = "INSERT INTO people (id_company, firstname, lastname, email, password, phone) 
                VALUES (:id_company, :firstname, :lastname, :email, :password, :Phone)";

        $statement = $this->db->prepare($sql);

        $statement->execute(array(
<<<<<<< HEAD
            ':PeopleId' => 0,
=======
            ':id_company' => $companyId,
>>>>>>> 9a658a6a5305e32ba37317ccbff51bfe625e8e39
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':password' => $password,
            ':Phone' => $phone
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