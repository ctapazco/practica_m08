<?php
// src/config/twig.php

require_once __DIR__ . '/../../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Configuración de Twig
$loader = new FilesystemLoader(__DIR__ . '/../views');
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../../cache/twig',
    'debug' => true,  // Cambiar a 'false' en producción
]);

return $twig;



//Este archivo inicializa Twig y lo configura para cargar las vistas desde src/views. 
//También habilita la caché para mejorar el rendimiento.