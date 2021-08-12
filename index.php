<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

session_start();

require(ROOT.'/components/Router.php');
require(ROOT.'/components/Menu.php');
require(ROOT.'/components/Autoload.php');

Router::route('/', [BlogController::class, 'index']);
Router::route('/(\d+)', [BlogController::class, 'index']);
Router::route('/posts/add', [BlogController::class, 'addPost']);
Router::route('/posts/get/(\w+)', [BlogController::class, 'getPost']);
Router::route('/posts/edit/(\w+)', [BlogController::class, 'editPost']);
Router::route('/posts/delete/(\w+)', [BlogController::class, 'deletePost']);

Router::route('/login', [UserController::class, 'auth']);
Router::route('/exit', [UserController::class, 'exit']);

Router::route('/message', [MessageController::class, 'index']);
Router::route('/about', [AboutController::class, 'index']);
Router::route('/contacts', [ContactsController::class, 'index']);
Router::route('/services', [ServicesController::class, 'index']);

Router::execute($_SERVER['REQUEST_URI']);