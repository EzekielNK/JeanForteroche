<?php
/**
 * Created by PhpStorm.
 * User: Ezekiel NK
 * Date: 13/07/2020
 * Time: 19:00
 */
require '../vendor/autoload.php';
/**
 * DEV MODE
 */
define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

/**
 * END DEV MODE
 */

$router = new AltoRouter();

define('VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'view');

$router->map('GET', '/blog', function () {
    require VIEW_PATH . '/post/index.php';
});

$match = $router->match();
$match['target']();
