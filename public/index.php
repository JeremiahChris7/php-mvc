<?php

/**
 * Front controller
 * 
 * PHP version 5.4
 */

// echo 'Request URL = "' . $_SERVER['QUERY_STRING'] . '"';

/**
 * Routing
 */
require '../Core/Router.php';

$router  = new Router();

echo get_class($router);