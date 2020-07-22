<?php

namespace Config;

use PDO;

class Connexion
{

    public function getPDO()
    {
        $pdo = new PDO(
            DATABASE_HOST. DATABASE_NAME. DATABASE_CHARSET,
            DATABASE_USERNAME,
            DATABASE_PASSWORD,
            [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
        if ($pdo) {
            return 'connexion ok';
        }
        return 'error';
    }
}
