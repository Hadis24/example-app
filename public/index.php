<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 */

require __DIR__.'/../vendor/autoload.php'; // Autoload Composer dependencies

// Bootstrap the Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle the request and send a response back
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Send the response to the browser
$response->send();

// Terminate the request
$kernel->terminate($request, $response);
