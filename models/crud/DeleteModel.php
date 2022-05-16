<?php

namespace App\models\crud;

use App\models\Database;
use App\models\GetUserModel;

class DeleteModel
{
    private $db;
    private $user;

    public function __construct(GetUserModel $getUserModel)
    {
        $this->db=Database::connect();
        $this->user = $getUserModel;
    }

    public function DeleteUser()
    {
            $sql = "DELETE FROM `people` WHERE `email` = '{$this->user->getEmail()}'";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute();
    }
}