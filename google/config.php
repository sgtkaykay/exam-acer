<?php
  require_once 'vendor/autoload.php';

  $google_client = new Google_Client();
  $google_client->setClientId('80170936218-274rphna7n4dtu4r29522cnohlcmv5ia.apps.googleusercontent.com');
  $google_client->setClientSecret('PKAecZiOJ7Xi36D3dx_7Qsj7');
  $google_client->setRedirectUri('https://fmacer-api.herokuapp.com/index.php');
  $google_client->addScope('email');
  $google_client->addScope('profile');

  session_start();
?>
