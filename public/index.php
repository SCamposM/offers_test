<?php
<<<<<<< HEAD

=======
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */
<<<<<<< HEAD

define('LARAVEL_START', microtime(true));

=======
define('LARAVEL_START', microtime(true));
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/
<<<<<<< HEAD

require __DIR__.'/../vendor/autoload.php';

=======
require __DIR__.'/../vendor/autoload.php';
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/
<<<<<<< HEAD

$app = require_once __DIR__.'/../bootstrap/app.php';

=======
$app = require_once __DIR__.'/../bootstrap/app.php';
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
<<<<<<< HEAD

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
=======
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(

>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
    $request = Illuminate\Http\Request::capture()
);

$response->send();

<<<<<<< HEAD
$kernel->terminate($request, $response);
=======
$kernel->terminate($request, $response);
>>>>>>> 5037781d7605f7a814319b0c6cc05c4eb65eb32b
