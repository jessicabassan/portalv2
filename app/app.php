<?php

#Chama as classes necessarias para utilização
use Silex\Provider\UrlGeneratorServiceProvider;
use Symfony\Component\HttpFoundation\Request;

#config do sistema
$directory = [];
$directory['directoryROOT'] = dirname(__DIR__);

#chamada do autoloader
$loader = require $directory['directoryROOT'] . "/vendor/autoload.php";

#Cria instancia objeto app Silex
$app = new Silex\Application();

#Registra o objeto para criação de URL
$app->register(new UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname'  => 'PHPONG', 
        'user' =>  'root',
        'password'  => '123456', 
        'charset' => 'utf8mb4',
    ),
));

$app->register(new Silex\Provider\SwiftmailerServiceProvider());
$app['swiftmailer.options'] = array(
    'host' => 'smtp.gmail.com',
    'port' => '465',
    'username' => 'melhoridade@gmail.com',
    'password' => 'MelhorIdade2016',
    'encryption' => null,
    'auth_mode' => 'login'
);

#ativa o debug
$app['debug'] = true;

#cache
$app->register(new Silex\Provider\HttpCacheServiceProvider(), ['http_cache.cache_dir' =>
    $directory['directoryROOT'] . '/storage/temp/http']);

# autoloader
$app['autoloader'] = $app->share(function () use ($loader) {
    return $loader;
});

# Adiciona ao autoloader a chamada
$app['autoloader']->add("app", $directory['directoryROOT']);

#Registra a pasta de layout do sistema
require_once $directory['directoryROOT'] . '/config/twig.php';

//Configuração da base de dados
//require_once $directory['directoryROOT'] . '/config/monolog.php';

//Configuração da base de dados
//require_once $directory['directoryROOT'] . '/config/database.php';

$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());


#Chamada de arquivos necessarios
require_once __DIR__ . '/Services/services.php';
require_once __DIR__.'/routes.php';

#Configuração para a segurança da aplicação
//require_once $directory['directoryROOT'] . '/config/security.php';

#Retorna app para utilização
return $app->run();