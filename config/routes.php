<?php

use Core\Route;
use App\Controller\IndexController;
use App\Controller\LoginController;
use App\Controller\DashboardController;
use App\Controller\LogoutController;
use App\Controller\RegisterController;
use App\Controller\Notas\CriarController;

(new Route())
    ->get('/', IndexController::class)
    ->get('/login', [LoginController::class, 'index'])
    ->post('/login', [LoginController::class, 'login'])

    ->get('/dashboard', DashboardController::class)

    ->get('/notas/criar', [CriarController::class, 'index'])
    ->post('/notas/criar', [CriarController::class, 'store'])

    ->get('/logout', LogoutController::class)

    ->get('/registrar', [RegisterController::class, 'index'])
    ->post('/registrar', [RegisterController::class, 'register'])
    ->run();
