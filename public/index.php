<?php
require("../vendor/autoload.php");

use Controller\AuthController;
use Controller\ContentController;
use Controller\HomeController;
use Entity\Posts;
use Entity\Users;
use ludk\Persistence\ORM;

require __DIR__ . '/../vendor/autoload.php';
session_start();
$orm = new ORM(__DIR__ . '/../Resources');
$usersRepo = $orm->getRepository(Users::class);
$postsRepo = $orm->getRepository(Posts::class);
$manager = $orm->getManager();

$action = $_GET["action"] ?? "display";
switch ($action) {
    case 'register':
        $controller = new AuthController;
        $controller->register();
        break;
    case 'logout':
        $controller = new AuthController;
        $controller->logout();
        break;
    case 'login':
        $controller = new AuthController;
        $controller->login();
        break;
    case 'new':
        $controller = new ContentController;
        $controller->create();
        break;
    case 'display':
        $controller = new HomeController;
        $controller->display();
    default:
        break;
}
