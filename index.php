<?php

require __DIR__.'/../seremadback/vendor/autoload.php';

$app = require_once __DIR__.'/../seremadback/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
