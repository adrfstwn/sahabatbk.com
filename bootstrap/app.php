<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->trustProxies(
            at: '*',
            headers: Request::HEADER_X_FORWARDED_ALL
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable(function (InvalidSignatureException $e) {
            return redirect()->route('verification.notice')->with('message', 'Link verifikasi email telah kedaluwarsa. Silakan minta yang baru.');
        });
    })->create();
