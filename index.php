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
Router::route('/about', [PageController::class, 'about']);

Router::route('/technique', [TechniqueController::class, 'index']);
Router::route('/technique/create', [TechniqueController::class, 'create']);
Router::route('/technique/(\w+)', [TechniqueController::class, 'show']);
Router::route('/technique/edit/(\w+)', [TechniqueController::class, 'edit']);
Router::route('/technique/delete/(\w+)', [TechniqueController::class, 'delete']);

Router::route('/login', [UserController::class, 'auth']);
Router::route('/exit', [UserController::class, 'exit']);

Router::execute($_SERVER['REQUEST_URI']);