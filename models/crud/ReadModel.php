<?php

namespace App\models\crud;

use App\models\Database;

class ReadModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM people";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getUser($email)
    {
        $sql = "SELECT * FROM people WHERE email = '$email'";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
}