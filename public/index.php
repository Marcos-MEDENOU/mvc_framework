<?php

/**
 * Front Controller
 * 
 * PHP version 8.1
 */

//  echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';

require "../core/Router.php";
$router = new Router();

echo get_class($router);