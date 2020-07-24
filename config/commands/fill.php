<?php
                                        /* Test data */

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'config' .DIRECTORY_SEPARATOR . 'DataPDO.php';

use Config\Connection;

$faker = Faker\Factory::create('fr_FR');

$pdo = new Connection();

$categories = [];
$comments = [];
$posts = [];
$users = [];

/* Create users*/

$admPassword = password_hash('Admin', PASSWORD_BCRYPT);
$pdo->getPDO()->exec("INSERT INTO users 
                                SET username='Admin', 
                                password='{$admPassword}',
                                ft_image='image{$faker->numberBetween($min = 1, $max = 5)}', 
                                profile_slug='{$faker->slug}', 
                                profile_content='{$faker->paragraphs(rand(3, 15), true)}', 
                                email='nalax2@gmail.com', 
                                registration_date='{$faker->date}', 
                                role='Admin'
                                ");

