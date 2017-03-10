<?php declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

define('API_ROUTES', ['blog']);

$klein = new \Klein\Klein();

$klein->respond(function ($request, $response, $service, $app) use ($klein) {

    $app->register('smarty', function() {
        $smarty = new Smarty();
        $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
        $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
        return $smarty;
    });

    $environment = 'dev';
    $app->register('whoops', function() {
        $whoops =  new \Whoops\Run;
        if ($environment !== 'prod') {
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        } else {
            $whoops->pushHandler(function($e){
                echo 'Todo: Friendly error page and send an email to the developer';
            });
        }
        return $whoops;
    });
    $app->whoops->register();

});

$klein->respond('GET', '/',
    function ($request, $response, $service, $app) {
        $app->smarty->assign('title', 'Isaac Bowen');
        $app->smarty->assign('image_dir', 'images');
        $app->smarty->display('index/index.tpl');
    });

$klein->respond('GET', '/eecs485/',
    function ($request, $response, $service, $app) {
        $app->smarty->display('eecs485.tpl');
    });

foreach (API_ROUTES as $controller) {
    $klein->with("/$controller", "../src/controllers/$controller.php");
}

$klein->dispatch();

