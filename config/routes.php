<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 6/2/2018
 * Time: 9:20 PM
 */

use NoahBuscher\Macaw\Macaw;

//if get current user is false
//return login page

Macaw::get('test', function() {
    echo "Hello world";
});

//Macaw::get('(:all)', function($fu) {
//    echo "fail all<br>".$fu;
//});

Macaw::$error_callback = function() {
    throw new Exception("404 Not Found");
};

/**
 * root route, function index in Controller Homecontroller(Homecontroller.php)
 * will process this root request
 */
Macaw::get('/', 'HomeController@index');

Macaw::dispatch();