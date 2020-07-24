                                        /* structure of database tables: Execute requests directly with phpmyAdmin */

/* structure of users table */ /*Note Perso possible changement prof slu et content et ft_image*/
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    ft_image varchar(255) NOT NULL,
    profile_slug VARCHAR(255) NOT NULL,
    profile_content LONGTEXT NOT NULL,
    email VARCHAR(255) NOT NULL,
    registration_date DATE NOT NULL,
    role ENUM ('Author','Admin', 'Subscriber'),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of posts table */ /*Note Perso possible changement published et user_id et foreign key*/
DROP TABLE IF EXISTS posts;
CREATE TABLE IF NOT EXISTS posts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED DEFAULT NULL,
    author VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    content LONGTEXT NOT NULL,
    created_at DATETIME NOT NULL,
    update_at DATETIME NOT NULL,
    published TINYINT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of comments table */ /*Note Perso possible changement published */
DROP TABLE IF EXISTS comments;
CREATE TABLE IF NOT EXISTS comments (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    content VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    update_at DATETIME NOT NULL,
    published TINYINT NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of categories table */ /*Note perso: possible changement de content et ft_image*/
DROP TABLE IF EXISTS categories;
CREATE TABLE IF NOT EXISTS categories (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    ft_image VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    content LONGTEXT NOT NULL,
    PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of posts_categories table */
DROP TABLE IF EXISTS posts_categories;
CREATE TABLE IF NOT EXISTS posts_categories (
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
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of posts_comments table */ /*Note perso: */
DROP TABLE IF EXISTS posts_comments;
CREATE TABLE IF NOT EXISTS posts_comments (
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
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* structure of users_posts table */ /*Note perso: */
DROP TABLE IF EXISTS users_posts;
CREATE TABLE IF NOT EXISTS users_posts (
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
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

                                        /* Clean DB  */
/*Following an SQL error, the request statement in a PHP script,
we will directly clean the DB in sql command with PHPMyAdmin.
SQL errors : 1701 Cannot truncate a table referenced in a foreign key constraint
*/

/* Do not forget to uncheck the box Enable the checking of foreign keys so that the request works on phpmyadmin */
TRUNCATE TABLE users;
TRUNCATE TABLE posts;
TRUNCATE TABLE categories;
TRUNCATE TABLE comments;
TRUNCATE TABLE posts_categories;
TRUNCATE TABLE posts_comments;
TRUNCATE TABLE users_posts;