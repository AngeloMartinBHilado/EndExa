<?php 

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API 

$facebook = new \Facebook\Facebook([
  'app_id'      => '503929953628834',
  'app_secret'     => '8ad42e889b06aacd32ecbe58a1955f98Reset',
  'default_graph_version'  => 'v2.10'
]);

?>
