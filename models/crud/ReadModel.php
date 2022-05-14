<?php

namespace App\models\crud;

use App\models\Database;

// TEST PAS SUR QUE CA FONCTIONNE ;D

class ReadModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM cogip";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute();
    }
}