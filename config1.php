<?php

include_once "google api/google-api-php-client-2.2.2/vendor/autoload.php";

$ClientId='352195142896-72ctqi6s3qpbvvlecbuthrjfbuju9tne.apps.googleusercontent.com';
$ClientSecret='zyxzFG0VpMxVSvp4KwqBvuTs';
$redirectUrl='https://localhost/sam1/index.php';

$gClient = new Google_Client();
$gClient->setApplicationName("CPI Login ");
	$gClient->setClientId($ClientId);
	$gClient->setClientSecret($ClientSecret);
	$gClient->setRedirectUri($redirectUrl);
	
?>
