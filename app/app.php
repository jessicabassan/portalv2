<?php
#Chama as classes necessarias para utilização
use Silex\Provider\UrlGeneratorServiceProvider;

#config do sistema
$directory['directoryROOT'] = dirname(__DIR__);

#chamada do autoloader
$loader = require $directory['directoryROOT'] . "/vendor/autoload.php";

#Cria instancia objeto app Silex
$app = new Silex\Application();

$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());

#Chama as rotas do sistema
//require_once __DIR__.'/modules/portal/routes.php';
//require_once __DIR__ .'/modules/adminportal/Services/services.php';
require_once __DIR__.'/Services/services.php';
require_once __DIR__.'/routes.php';

#ativa o debug
$app['debug'] = true;

#Retorna app para utilização
return $app->run();