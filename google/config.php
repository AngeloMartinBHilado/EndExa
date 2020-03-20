<?php
require_once 'vendor/autoload.php';

//google ------ credits: john paul maja :D <3 
$google_client = new Google_Client();
$google_client->setClientId('889421152360-r47q290i5v29ilfs62cdrfrcth51ac4t.apps.googleusercontent.com');
$google_client->setClientSecret('lJFU8tuxzgxyVuI9lRUPJxAA');
$google_client->setRedirectUri('https://endexam.herokuapp.com/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');


session_start();
// credits: john paul majaaaaaa
?>
