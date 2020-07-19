<?php
/**
 * Created by PhpStorm.
 * User: Ezekiel NK
 * Date: 13/07/2020
 * Time: 19:00
 */

use App\Router;

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

$router = new Router(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'view');
/**
 * Note perso: Je charge que du php pour le moment ('post/index') sinon ajouter .js, .html etc ... en fonction du
 * script à charger.
 */
$router
    ->get('/blog', 'post/index', '/blog')
    ->run();
