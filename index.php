<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload
require_once "vendor/autoload.php";

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function() {
    echo "<h1>Hello, world!</h1>";
});

//run fat free
$f3->run();
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/7/2019
 * Time: 11:20 AM
 */
?>