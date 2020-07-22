<?php

                                        /* connection data to the database */

const DATABASE_HOST = 'mysql:host=localhost;';
const DATABASE_NAME =  'dbname=blog_jf;';
const DATABASE_CHARSET = 'charset=utf8mb4';
const DATABASE_USERNAME = 'root';
const DATABASE_PASSWORD = '';

const OPTIONS =
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ];
