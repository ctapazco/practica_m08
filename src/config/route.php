<?php
// src/config/routes.php

require_once __DIR__ . '/../controllers/HomeController.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($path) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo 'Página no encontrada';
        break;
}
