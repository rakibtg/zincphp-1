<?php
  namespace ZincPHP\Middlewares\Register;

  class Middlewares extends \ZincPHP\Middleware\ZincMiddleware {

    public function blocks() {
      // $this->setBlock('index', 'testMiddleware');
      // $this->setBlock('index', ['tommatto' => [
      //   'name' => 'Kazi',
      //   'age' => '23'
      // ]]);
      // $this->setBlock('index/post', 'testMiddleware');
      // $this->setBlock('index', ['testMiddleware', 'tommatto']);
      // $this->setBlock('index/potato', 'potato');
    }

    public function groups() {
      // $this->setGroup('index', ['tommatto' => ['yes']]);
      // $this->setGroup('index', ['protected_photos' => 'yes']);
      // $this->setGroup('index', 'testMiddleware');
    }

  }