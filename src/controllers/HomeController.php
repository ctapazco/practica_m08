<?php
// src/controllers/HomeController.php

class HomeController {
    private $twig;

    public function __construct() {
        $this->twig = require __DIR__ . '/../config/twig.php';
    }

    public function index() {
        echo $this->twig->render('home.twig', [
            'title' => 'Página Principal',
            'message' => '¡Bienvenido a nuestro proyecto dinámico en PHP!'
        ]);
    }
}
