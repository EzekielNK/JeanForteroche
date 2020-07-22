                                        /* structure of database tables */

/* structure of users table */
DROP TABLE IF EXISTS 'users';
CREATE TABLE IF NOT EXISTS 'users' (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    registration_date DATE NOT NULL,
    role ENUM ('Author','Admin', 'Suscriber'),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of posts table */
DROP TABLE IF EXISTS 'posts';
CREATE TABLE IF NOT EXISTS 'posts' (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    update_at DATETIME NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of comments table */
