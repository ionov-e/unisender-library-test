<?php

require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

define('UNISENDER_API_KEY', $_SERVER['UNISENDER_API_KEY']);
define('UNISENDER_SENDER_EMAIL', $_SERVER['UNISENDER_SENDER_EMAIL']);
define('UNISENDER_SENDER_EMAIL_NAME', $_SERVER['UNISENDER_SENDER_EMAIL_NAME']);
define('UNISENDER_RECEIVER_EMAIL', $_SERVER['UNISENDER_RECEIVER_EMAIL']);

echo 'UNISENDER_API_KEY: ' . UNISENDER_API_KEY . "<br>";
echo 'UNISENDER_SENDER_EMAIL: ' . UNISENDER_SENDER_EMAIL . "<br>";
echo 'UNISENDER_SENDER_EMAIL_NAME: ' . UNISENDER_SENDER_EMAIL_NAME . "<br>";
echo 'UNISENDER_RECEIVER_EMAIL: ' . UNISENDER_RECEIVER_EMAIL . "<br>";

$unisender = new \Unisender\ApiWrapper\UnisenderApi(
    UNISENDER_API_KEY,
    'UTF-8',
    4,
    null,
    false,
    'Testing library 1.0'
);

$resultAsJson = $unisender->sendEmail(
    [
        'sender_email' => UNISENDER_SENDER_EMAIL,
        'list_id' => 1,
        'email' => UNISENDER_RECEIVER_EMAIL,
        'sender_name' => 'Супер тест Имя 0.1',
        'subject' => 'Супер тест Тема 0.1',
        'body' => 'Важный текст',
    ]
);

$resultAsArray = json_decode($resultAsJson, true, JSON_UNESCAPED_UNICODE);

print_r($resultAsArray); // Array ( [result] => Array ( [email_id] => 33073625941 ) )