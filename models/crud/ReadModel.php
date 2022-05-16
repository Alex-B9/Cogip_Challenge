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
        return $stmt->execute();
    }
}