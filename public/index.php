<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/2/2018
 * Time: 9:18 PM
 */

//define PUBLIC_PATH
define('PUBLIC_PATH', __DIR__);

//boot strap
require PUBLIC_PATH.'/../bootstrap.php';

//local config
require '../config/local-config.php';

// route settings
require '../config/routes.php';
