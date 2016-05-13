<?php

use app\Controller\Error\errorController;
use app\Services\servicesController;
use Symfony\Component\HttpFoundation\Request;

$request = new Request;

$app->error(function (\Exception $e, $code) use ($app, $request) {
    $errorController = new errorController($app, $request);
    if ($code == 404) {
        return $errorController->erro404();
    }
});

(new servicesController($path))->getController($app, $request);