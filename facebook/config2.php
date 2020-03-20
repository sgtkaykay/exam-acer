<?php
  require_once 'vendor/autoload.php';

  if (!session_id())
  {
      session_start();
  }


  $facebook = new \Facebook\Facebook([
    'app_id'      => '608669876646089',
    'app_secret'     => '0d4e59a414d464f9508d47920c2c2347',
    'default_graph_version'  => 'v2.10'
  ]);
?>
