<?php

namespace App\models\crud;

use App\models\Database;
use App\models\SetUserModel;

class CreateModel
{
    private  $db;
    private  $user;


    // constructeur qui prend en paramatre une classe
    public function __construct(SetUserModel $setUserModel)
    {
        $this->db=Database::connect();
        $this->user= $setUserModel;
    }

    // method createUser qui vas faire une requete a la base de donner pour créer un user

    public function createUser($firstname, $lastname, $email)
    {
            $sql = "INSERT INTO people (`PeopleId`,`firstname`, `lastname`, `email`) VALUES (0,'$firstname','$lastname','$email')";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute();
    }

    // cet requete doit
    // if else si l'user existe dans la base de donné
    // si il exist, return un message d'erreur sinon il le créer
    // (tu peux te base sur ReadModel et me poser des questions)

    // c'est un peu vague mais je suis la et ennuye moi sur le premier et aprés ça iras, j'ai mis ReadModel qui te montre un peu comment partir mais montre moi des screen et je te dirais si oui ou non
}