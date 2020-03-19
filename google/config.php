<?php
require_once 'vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId('966379932937-kqc13gviequgak1ftm73pvul6r44jork.apps.googleusercontent.com');
$google_client->setClientSecret('xlGq2_aKNgH8Oo74Sjpqhydb');
$google_client->setRedirectUri('https://endexam.herokuapp.com/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');


session_start();
?>
