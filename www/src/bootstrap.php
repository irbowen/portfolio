
<?php

require_once __DIR__ . '/../vendor/autoload.php';

define('LANDING_PAGE', '../html/index.html');

$klein = new \Klein\Klein();

$klein->respond('GET', '/',
  function () {

    /* This should be passed along with every request */
    $smarty = new Smarty();
    $smarty->setTemplateDir(__DIR__ . '/templates/templates/');
    $smarty->setCompileDir(__DIR__ . '/templates/templates_c/');
    /* End generic Smarty setup */

    $smarty->assign('title', 'Isaac Bowen');
    $smarty->display('base.tpl');
  });

$klein->dispatch();

