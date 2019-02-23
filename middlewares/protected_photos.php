<?php

  namespace ZincPHP\Middlewares\protected_photos;

  function protected_photos($data) {
    \App::input()->merge(['protected_photos' => $data]);
  }