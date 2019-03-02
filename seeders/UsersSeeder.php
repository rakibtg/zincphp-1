<?php

  /**
   * UsersSeeder Database Seeder.
   * To insert single item use an associative array in insert method.
   * To insert multiple items pass a list of associative array in insert method.
   * 
   */

  \App::seed( 'users' )->insert([
    [
      'name' => 'Kazi',
      'email' => 'hi@rakibtg.com',
      'password' => password_hash(trim('banana'), PASSWORD_DEFAULT),
      'bio' => 'A very nice man.'
    ]
  ]);