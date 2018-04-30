<?php



require "vendor/autoload.php";

$access_token = 'GR7uUjUuQnnPrjl53WaukBR5n+kGaEgiArpFmdvfO8eyJ7PD/LN7YYzi11Ff4k3rZjr4qzFveqE5QbaT6nO4SMk033e03LNGKS8HG8j8/ADjuSINx3ZKvOECZYe7nVR06j/DFTIt+umBLECRNtmMywdB04t89/1O/w1cDnyilFU=';

$channelSecret = '03c53668d9338e02a58564b26b74ae64';

$pushID = 'U23c3e06a734af98f8aadb3012c8ff159';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







