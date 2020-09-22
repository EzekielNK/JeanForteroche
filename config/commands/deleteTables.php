<?php
require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'DataPDO.php';
use Config\Connection;

$pdo = new Connection();

$pdo->getPDO()->exec('SET GLOBAL FOREIGN_KEY_CHECKS = 0');
$pdo->getPDO()->exec("DROP TABLE posts_categories");
$pdo->getPDO()->exec("DROP TABLE posts_comments");
$pdo->getPDO()->exec("DROP TABLE users_posts");
$pdo->getPDO()->exec("DROP TABLE posts");
$pdo->getPDO()->exec("DROP TABLE comments");
$pdo->getPDO()->exec("DROP TABLE categories");
$pdo->getPDO()->exec("DROP TABLE users");
$pdo->getPDO()->exec('SET GLOBAL FOREIGN_KEY_CHECKS = 1');

echo 'DataBase Tables deleted succesfully !';
