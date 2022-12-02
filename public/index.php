<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <pre>
<?php

/**
 * Front Controller
 * 
 * PHP version 8.1
 */

// Require the controller class
require "../app/Controller/Posts.php";

//  echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';
/**
 * Routing
 */
require "../core/Router.php";
$router = new Router();

// echo get_class($router);

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
// $router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add("admin/{action}/{controller}");
$router->add("{controller}/{id:\d+}/{action}");

// Display the routing table
// echo '<pre>';
// var_dump($router->getRoutes());
// echo $_SERVER['QUERY_STRING'];
// echo htmlspecialchars(print_r($router->getRoutes(), true));
// echo '</pre>';
// exit();

// Match the requested route
// $url = $_SERVER['QUERY_STRING'];
// echo 'url =>' . $url;
// exit();


// if ($router->match($url)) {
//   var_dump($router->getParams());
// } else {
//   echo "No route found for URL '$url'";
// }

$router->dispatch($_SERVER["QUERY_STRING"]);

?>
  </pre>
</body>

</html>