<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

session_start();

require(ROOT.'/components/Router.php');
require(ROOT.'/components/Menu.php');
require(ROOT.'/components/Autoload.php');

Router::route('', [PageController::class, 'index']);
Router::route('/', [PageController::class, 'index']);

Router::execute($_SERVER['REQUEST_URI']);