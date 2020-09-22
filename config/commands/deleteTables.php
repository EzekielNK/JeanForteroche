<?php
require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'DataPDO.php';
use Config\Connection;

$db = new Connection();
$pdo = $db->getPDO();

$pdo->exec('SET GLOBAL FOREIGN_KEY_CHECKS = 0');
$pdo->exec("DROP TABLE posts_categories");
$pdo->exec("DROP TABLE posts_comments");
$pdo->exec("DROP TABLE users_posts");
$pdo->exec("DROP TABLE posts");
$pdo->exec("DROP TABLE comments");
$pdo->exec("DROP TABLE categories");
$pdo->exec("DROP TABLE users");
$pdo->exec('SET GLOBAL FOREIGN_KEY_CHECKS = 1');

echo 'DataBase Tables deleted succesfully !';
