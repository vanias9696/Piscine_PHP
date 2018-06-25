<?php
define('ROOT', dirname(__FILE__));

require_once (ROOT . '/classes/Router.php');
require_once (ROOT . '/classes/View.php');
require_once (ROOT . '/classes/Controller.php');
require_once (ROOT . '/Database.php');
require_once (ROOT . '/config.php');

$router = new Router();
$router->runControllers();

