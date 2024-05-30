<?php
// Create Router instance
$router = new \Bramus\Router\Router();

include_once __DIR__ . '/admin.php';
include_once __DIR__ . '/client.php';

// Run it!
$router->run();