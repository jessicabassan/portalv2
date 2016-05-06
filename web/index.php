<?php
//php -S localhost:8000
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/nome/{nome}', function ($nome = null) use ($app) {
		$nome = ["nome" => "Ola: <strong>$nome</strong>"];
		return $app->json($nome, 200);
});

$app['debug'] = true;

$app->run();
