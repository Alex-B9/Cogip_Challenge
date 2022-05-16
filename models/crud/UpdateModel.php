<?php

namespace App\models\crud;

use App\models\Database;

class UpdateModel
{
    private $db;
    public $email;

    public function __construct()
    {
        $this->db=Database::connect();
    }

    public function UpdateUser()
    {
        if (isset($_POST['submit']))
        {
            $sql = "UPDATE `people` SET `PeopleId`='[value-1]',`firstname`='[value-2]',`lastname`='[value-3]',`email`='[value-4]' WHERE `email` = $this->email";
        }
    }
}