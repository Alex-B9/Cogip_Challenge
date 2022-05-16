<?php

namespace App\models;

use Exception;
use PDO;

/*
    Database est une class static
    l'utilisation est assez simple je trouve,
    il suffit juste de l'appeller de cet façon :

         $nomDeVariable = Database::connect();

    et pour l'utiliser :

        $nomDeVariable->prepare();
        ect...
        ect...

    $nomDeVariable::disconnect(); est fonctionnel et remet juste la valeur de la class sur null ce qui ferme la connection a la db.
*/

class Database
{
    private static $sqlPDO;


    public static function connect()
    {
        if (is_null(self::$sqlPDO)) {
            require_once("../config/db_config.php");

            try {
                self::$sqlPDO = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USERNAME, DB_PASSWORD);
            } catch (Exception $e) {
                return $e->getMessage();
            }
        }

        return self::$sqlPDO;
    }

    public static function disconnect()
    {
        self::$sqlPDO = null;
    }
}
