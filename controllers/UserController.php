<?php

namespace App\controllers;

use App\models\crud\ReadModel;

class UserController
{
    public function userAlreadyExist($email)
    {
        $readDb = new ReadModel();

        foreach ($readDb->getAllUsers() as $user) {
            if ($user == $email) {
                return true;
            } else {
                return false;
            }
        }
    }
}