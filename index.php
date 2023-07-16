<?php

require_once 'controllers/Controller.php';

$uri = $_SERVER['REQUEST_URI'];
$controller = new Controller();

switch ($uri) {
  case '/':
    $controller->formPage();
    break;
  default:
    http_response_code(404);
    echo '404';
    break;
}