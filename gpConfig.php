<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '385981867636-ksrk8ei6qhjjv8fj5db90ce3sos6c0o5.apps.googleusercontent.com'; //Google client ID
$clientSecret = '_KDU1PXYX25Ne4DEvY4ylS3x'; //Google client secret
$redirectURL = 'http://localhost:80/sam1/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>