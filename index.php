<?php
/*
 * Artem Vityuk
 * 4/28/2020
 * This file is used for all the "behind the scenes" code
 * It contains the required files, instantiations and routes
 */
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once("vendor/autoload.php");

// Instantiate the F3 Base class
$f3 = Base::instance();

// Default route
$f3->route('GET /', function() {
     //echo '<h1>Week 5</h1>';

    //$view = new Template();
    //echo $view->render('views/home.html');
});

// Run F3
$f3->run();