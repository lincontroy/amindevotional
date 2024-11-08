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
        $middleware->web(append: [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ]);
    })
    // ->withRouteMiddleware([
    //     'auth' => \App\Http\Middleware\Authenticate::class,
    //     'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    //     'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
    //     'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
    //     'can' => \Illuminate\Auth\Middleware\Authorize::class,
    //     'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    //     'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
    //     'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
    //     'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    //     'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    //     'admin' => \App\Http\Middleware\Admin::class,
    //     'user' => \App\Http\Middleware\User::class,
    // ])
    ->withExceptions(function (Exceptions $exceptions) {
        // Handle exceptions here if needed
    })
    ->create();