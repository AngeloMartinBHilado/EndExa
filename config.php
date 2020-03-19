<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('889421152360-r47q290i5v29ilfs62cdrfrcth51ac4t.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('lJFU8tuxzgxyVuI9lRUPJxAA');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://endexam.herokuapp.com/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');


//start session on web page
session_start()
// credits: john paul majaaaaaa
?>
