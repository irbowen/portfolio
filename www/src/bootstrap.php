<?php

require_once __DIR__ . '/../vendor/autoload.php';

define('LANDING_PAGE', '../html/index.html');

$klein = new \Klein\Klein();

$klein->respond('GET', '/',
  function () {
    header('Location: ' . LANDING_PAGE);
    exit(0);
  });

$klein->dispatch();
