<?php

  namespace ZincPHP\Middlewares\tommatto;

  function tommatto($payload = '') {
    \App::input()->merge(['tommatto' => 'i love love red tommaattoo', 'payload' => $payload]);
  }