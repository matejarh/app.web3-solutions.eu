<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',

    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
            \App\Http\Middleware\LanguageMiddleware::class,
            \App\Http\Middleware\GenerateCspNonce::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
/*         $exceptions->respond(function (Illuminate\Http\RedirectResponse $response) {
            if ($response->getStatusCode() === 419) {
                return back()->with([
                    'message' => __('The page expired, please try again.'),
                ]);
            }

            return $response;
        }); */
    })->create();
