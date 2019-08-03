<?php


$access_token = '9EQDL+a4qHdYrNxdDPC/eExmvMrLuaXSJuo6ieNPkFgkJlqeQr2cBJ9+OrPqi9hScSvWQ8EfByd7LFkSXVfM3Td0daGZ9wfmtHnkdU5ETGzDFm3JOiLLj8L17RCdon7qOa2fW8KmugttR5fE+lF1TgdB04t89/1O/w1cDnyilFU=';

$userId = 'userId';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

