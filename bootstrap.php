<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/4/2018
 * Time: 12:12 AM
 *
 * define base path
 * setting autoload
 * set orm
 * set whoops
 */

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * define some constant value
 */
//define BASE_PATH
define('BASE_PATH', __DIR__);

// Autoload
require BASE_PATH.'/vendor/autoload.php';

/**
 * Eloquent ORM for connect database
 */
$capsule = new Capsule;
//find config of database
$capsule->addConnection(require BASE_PATH.'/config/database.php');

$capsule->bootEloquent();

//whoops error message notification
$whoops = new \Whoops\Run;

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();
