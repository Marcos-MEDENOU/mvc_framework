<?php

/**
 * Front Controller
 * 
 * PHP version 8.1
 */

//  echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';

require "../core/Router.php";
$router = new Router();

// echo get_class($router);

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);

// Display the routing table
echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';