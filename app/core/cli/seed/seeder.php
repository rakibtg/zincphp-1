<?php

  /*

    This PHP file will import the ZincDBManager class and will
    execute the seed command. The seed command will run the seeder.

  */

  require_once './app/core/cli/zincphp_dbm/ZincDBManager.php';
  ( new ZincDBManager() )->seed( $argv );