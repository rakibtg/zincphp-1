<?php

  define('ZINCPHP_ROOT', realpath(__DIR__ . '/../'));

  $autolaod = __DIR__ . '/../vendor/autoload.php';
  if(file_exists($autolaod)) {
    require_once __DIR__ . '/../vendor/autoload.php';
  } else {
    echo "Please run 'composer install' and try again!";
    exit();
  }

  new ZincFramework\ZincFramework();