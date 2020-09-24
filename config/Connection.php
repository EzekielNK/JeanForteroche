<?php

namespace Config;

use PDO;
use PDOException;

abstract class Connection
{

    private $connection;

    /* Check if the connection exists */
    /**
     * @return PDO
     */
    private function checkConnection(): PDO
    {
        if ($this->connection === null) {
            return $this->getPDO();
        }
        return $this->connection;
    }

    /* Connection method to our database */
    /**
     * @return PDO
     */
    private static function getPDO(): PDO
    {
        try {
            return new PDO(
                DSN,
                DATABASE_USERNAME,
                DATABASE_PASSWORD,
                OPTIONS
            );
        } catch (PDOException $errors) {
            die('Erreur de connexion:' . $errors);
        }
    }

    /* Manage our requests */
    /**
     * @param $sql
     * @param null $params
     * @return bool|false|\PDOStatement
     */
    protected function createQuery($sql, $params = null): \PDOStatement
    {
        if ($params) {
            $result = $this->getPDO()->prepare($sql);
            $result->execute($params);
            return $result;
        }
        $result = $this->checkConnection()->query($sql);
        return $result;
    }
}
