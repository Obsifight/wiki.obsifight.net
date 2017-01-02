<?php
require 'include/functions.php';
require 'class/router.class.php';
require 'include/config.php';

if($config_dev) {
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
}

// Fonction & global
define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

$router = new Router(null, array(
  'blocs/*' => 'blocs/$1',
  'items/*' => 'items/$1',
  'autres/*' => 'autres/$1',
  'minerais/*' => 'minerais/$1',
  'armures-armes/*' => 'armures-armes/$1'
), $GLOBALS);

$router->dispatch();
