<?php

                                        /* connection data to the database */

const DATABASE_HOST = 'localhost;';
const DATABASE_NAME =  'blog_jf;';
const DATABASE_CHARSET = 'utf8mb4';
const DATABASE_USERNAME = 'root';
const DATABASE_PASSWORD = '';
const DSN = 'mysql:host=' . DATABASE_HOST . 'dbname=' . DATABASE_NAME . 'charset=' . DATABASE_CHARSET;

const OPTIONS =
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];
