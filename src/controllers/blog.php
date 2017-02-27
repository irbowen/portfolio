<?php
declare(strict_types = 1);

$this->respond('GET', '/',
  function ($request, $response, $service, $app) {
    $app->smarty->display('writing.tpl');
  });

