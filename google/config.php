<?php
require_once 'vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId('889421152360-4nc6sgkra1m5qt4qgb2c05p1km9fdo0m.apps.googleusercontent.com');
$google_client->setClientSecret('JwgnEhb7emuiA8LAjaFBZkiD');
$google_client->setRedirectUri('https://endexam.herokuapp.com');
$google_client->addScope('email');
$google_client->addScope('profile');


session_start();
?>
