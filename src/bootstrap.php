<?php
declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

define('API_ROUTES', ['blog']);

$klein = new \Klein\Klein();

$klein->respond(function ($request, $response, $service, $app) use ($klein) {

  $app->register('smarty', function() {
    /* This should be passed along with every request */
    $smarty = new Smarty();
    $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
    $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
    /* End generic Smarty setup */
    return $smarty;
  });
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

