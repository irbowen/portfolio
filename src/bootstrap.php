<?php declare(strict_types = 1);

require_once __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

define('API_ROUTES', ['blog']);
define('LIST_FILE', __DIR__ . '/writing/list_of_files');


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
        $article_data = file(LIST_FILE);
        $data = explode(',', $article_data[0]);
        $request->title = str_replace('"', '', $data[0]);
        $request->file_contents = get_article_text(trim($data[1]));
        show_blog($request, $response, $service, $app);
    });

$klein->respond('GET', '/[a:post_name]',
    function ($request, $response, $service, $app) {
        // First, we try to find the request
        $article_data = file(LIST_FILE);
        foreach ($article_data as $d) {
            $data = explode(',', $d);
            if (trim($data[2]) == $request->post_name) {
                $request->title = str_replace('"', '', $data[0]);
                $request->file_contents = get_article_text(trim($data[1]));
                return show_blog($request, $response, $service, $app);
            }
        }
        echo 'Todo: Friendly error page and send an email to the developer';
    });
/*
$klein->respond('GET', '/eecs485/',
    function ($request, $response, $service, $app) {
        $app->smarty->display('eecs485.tpl');
    });
 */

foreach (API_ROUTES as $controller) {
    $klein->with("/$controller", "../src/controllers/$controller.php");
}

$klein->dispatch();

