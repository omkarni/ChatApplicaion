<?php

session_start();

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('67162551978-8arvh6f1cmtc1se0783dgto1fbmhis2k.apps.googleusercontent.com');

$google_client->setClientSecret('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');

$google_client->setRedirectUri('http://localhost/ChatApplication/');

$google_client->addScope('email');

$google_client->addScope('profile');

?> 