<?php



require "vendor/autoload.php";

$access_token = 'K52CauT9F22qxYW6NrCvY466wfCA+n7VkO/wOEh/OMRbicNT5pS9dIHyim/f7bedZjr4qzFveqE5QbaT6nO4SMk033e03LNGKS8HG8j8/AANFAReSeO5Rpudr/OQmA3bn3o0Q0kGbMkZtwc9+KU2lQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '03c53668d9338e02a58564b26b74ae64';

$pushID = 'U23c3e06a734af98f8aadb3012c8ff159';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('คุณต้องการอะไร');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







