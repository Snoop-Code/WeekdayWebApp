<?php

require 'vendor/autoload.php';

session_start();

$client = new Google_Client();
$client -> setClientId('1083767931208-or5iab9f7r75kiq8k3oha5us8u0avpev.apps.googleusercontent.com');
$client -> setClientSecret('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');
$client -> setRedirectUri('http://localhost:8080/google-callback.php');
$client -> addScope('email');
$client -> addScope('profile');

$authUrl = $client -> createAuthUrl();
header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));

?>