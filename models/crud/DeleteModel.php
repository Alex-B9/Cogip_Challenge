<?php

namespace App\models\crud;

use App\models\Database;

class DeleteModel
{
    private $db;

    public function __construct()
    {
        $this->db=Database::connect();
    }

    public function DeleteUser()
    {
        if (isset($_POST['submit']))
        {
            $sql = "DELETE FROM `people` WHERE `email` = '$this->email;'";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute();
        }
        else
        {
            return 'Error';
        }
    }
}