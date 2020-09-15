<?php

namespace Config;

use PDO;
use PDOException;

class Connection
{

    public function getPDO()
    {
        try {
            $pdo = new PDO(
                DSN,
                DATABASE_USERNAME,
                DATABASE_PASSWORD,
                OPTIONS
            );
            return $pdo;
        } catch (PDOException $errors) {
            die('Erreur de connexion:' . $errors);
        }
    }
}
