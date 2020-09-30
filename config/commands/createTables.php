<?php

require dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'DataPDO.php';
use Config\Connection;

/* You will have to pass the method in public for the script to work */
//$pdo = Connection::getPDO();

$pdo->exec("CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password CHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    ft_image VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    email VARCHAR(255) NOT NULL,
    role ENUM ('Author', 'Admin', 'Subscriber') NULL DEFAULT 'Subscriber',
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'Created table users succesfully !';

$pdo->exec("CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    user_id INT UNSIGNED DEFAULT NULL,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    ft_image VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    published TINYINT NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE NO ACTION ON UPDATE NO ACTION,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'Created table posts succesfully !';


$pdo->exec("CREATE TABLE comments (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    published TINYINT NOT NULL,
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'Created table comments succesfully !';

$pdo->exec("CREATE TABLE categories (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    ft_image VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

echo 'Created table categories succesfully !';

 $pdo->exec("CREATE TABLE posts_comments (
    post_id INT UNSIGNED NOT NULL,
    comment_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (post_id, comment_id),
    CONSTRAINT fk_post_comment
        FOREIGN KEY (post_id)
        REFERENCES posts (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT,
    CONSTRAINT fk_comment_post
        FOREIGN KEY (comment_id)
        REFERENCES comments (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT
) DEFAULT CHARSET=utf8mb4");


 echo 'Created table posts_comments succesfully !';

 $pdo->exec("CREATE TABLE users_posts (
    user_id INT UNSIGNED NOT NULL,
    post_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (user_id, post_id),
    CONSTRAINT fk_user_post
        FOREIGN KEY (user_id)
        REFERENCES users (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT,
    CONSTRAINT fk_post_user
        FOREIGN KEY (post_id)
        REFERENCES posts (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT
) DEFAULT CHARSET=utf8mb4");

 echo 'Created table users_posts succesfully !';

 $pdo->exec("CREATE TABLE posts_categories (
    post_id INT UNSIGNED NOT NULL,
    category_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (post_id, category_id),
    CONSTRAINT fk_post
        FOREIGN KEY (post_id)
        REFERENCES posts (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT,
    CONSTRAINT fk_category
        FOREIGN KEY (category_id)
        REFERENCES categories (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT
) DEFAULT CHARSET=utf8mb4");

 echo 'Created table posts_categories succesfully !';
