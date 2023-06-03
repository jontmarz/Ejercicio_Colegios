<?php

require_once "./controller/controller.php";
/* require_once './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
 */
$controller = new Controller();
$controller->handleRequest();