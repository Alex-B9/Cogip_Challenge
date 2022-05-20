<?php

namespace App\controllers;

use App\models\crud\ReadModel;

class UserController
{
    public function userAlreadyExist($email): bool
    {
        $readDb = new ReadModel();

        foreach ($readDb->getAllUsers() as $user) {
            if ($user['email'] == $email) {
                return true;
            }
        }

        return false;
    }
}