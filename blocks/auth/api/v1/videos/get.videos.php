<?php

  namespace ZincPHP\Blocks\auth\api\v1\videos;

  class GetVideos extends \ZincPHP\block\ZincBlock {

    public function onMount() {
      // This method will be executed before mounting this block.
    }

    public function onUnMount() {
      // This method will be executed at the end, before exiting the app.
    }

    public function middleware() {
      // Register middlewares for this block.
    }

    public function validation() {
      // Validation rules for this block.
    }

    public function library() {
      // Import libraries for this block.
    }

    public function response() {
      $data = [];
      return \App::response($data)->pretty();
    }
  }