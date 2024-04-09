<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

define('UNISENDER_API_KEY', $_SERVER['UNISENDER_API_KEY']);
define('UNISENDER_SENDER_EMAIL', $_SERVER['UNISENDER_SENDER_EMAIL']);
define('UNISENDER_SENDER_EMAIL_NAME', $_SERVER['UNISENDER_SENDER_EMAIL_NAME']);

echo 'UNISENDER_API_KEY: ' . UNISENDER_API_KEY . "<br>";
echo 'UNISENDER_SENDER_EMAIL: ' . UNISENDER_SENDER_EMAIL . "<br>";
echo 'UNISENDER_SENDER_EMAIL_NAME: ' . UNISENDER_SENDER_EMAIL_NAME . "<br>";
$pseudoRandomTitle = date('Y-m-d H:i:s ') . rand(1, 99999);
echo '$pseudoRandomTitle: ' . $pseudoRandomTitle . "<br>";

$unisender = new \Unisender\ApiWrapper\UnisenderApi(
    UNISENDER_API_KEY,
    'UTF-8',
    4,
    null,
    false,
    'Testing library 1.0'
);

$resultAsJson = $unisender->createList(['title' => $pseudoRandomTitle]);
$response = json_decode($resultAsJson, true);
echo '$resultAsJson: ' . $resultAsJson;