<?php
    namespace project;

    use project\core\Router;

    require_once __DIR__ . '/../vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $obj = new Router();
    $obj->action();