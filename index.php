<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\PostController;

if (isset($_GET['action']) && isset($_GET['controller'])) {
    require_once './app/Controllers/' . $_GET['controller'] . '.php';

    $controllerClassName = "\\App\\Controllers\\" . $_GET['controller'];
    $postController = new $controllerClassName();

    $postController->{$_GET['action']}();
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/app/Controllers/PostController.php';
    $postController = new PostController();
    $postController->index();
}
