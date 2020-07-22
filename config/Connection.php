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
                DATABASE_HOST. DATABASE_NAME. DATABASE_CHARSET,
                DATABASE_USERNAME,
                DATABASE_PASSWORD,
                OPTIONS
            );
            return 'connexion ok';
        } catch (PDOException $errors) {
            die('Erreur de connexion:' . $errors);
        }
    }
}
