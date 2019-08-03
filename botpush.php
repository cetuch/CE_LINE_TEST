<?php



require "vendor/autoload.php";

$access_token = '9EQDL+a4qHdYrNxdDPC/eExmvMrLuaXSJuo6ieNPkFgkJlqeQr2cBJ9+OrPqi9hScSvWQ8EfByd7LFkSXVfM3Td0daGZ9wfmtHnkdU5ETGzDFm3JOiLLj8L17RCdon7qOa2fW8KmugttR5fE+lF1TgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9f475a9231fc788a7e83ea1352287f56';

$pushID = '';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







