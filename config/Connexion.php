<?php


namespace Config;


use PDO;

class Connexion
{

    public static function getPDO()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=tutoblog;charset=utf8mb4', 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        if ($pdo) {
            return 'connexion ok';
        }
        return 'error';
    }
}