<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectUsersTo('home'); // Ruta a la que redirigir si entran en rutas con el middleware "guest" (RedirectIfAuthenticated)
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $callback = \Thehouseofel\Kalion\Infrastructure\Exceptions\ExceptionHandler::getUsingCallback();
        $callback($exceptions);
    })->create();
