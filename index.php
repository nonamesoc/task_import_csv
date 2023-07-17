<?php

require_once 'services/Connection.php';
require_once 'services/ProductStorage.php';
require_once 'controllers/Controller.php';

$uri = $_SERVER['DOCUMENT_URI'];
$database =  new Connection();
$productStorage = new ProductStorage($database);
$controller = new Controller($productStorage);

switch ($uri) {
  case '/':
    $controller->formPage();
    break;
  case '/upload':
    $controller->uploadCvsFile();
    break;
  case '/list':
    $controller->listPage();
    break;
  default:
    http_response_code(404);
    echo '404';
    break;
}