<?php
  namespace ZincPHP\models\v1\User;

  class User extends \ZincPHP\model\ZincModel {

    protected $fillable = [
      'bio',
      'name',
      'email',
      'password'
    ];

    public function posts() {
      return $this->hasMany( \App::model('v1/Post'), 'author' );
    }
  }