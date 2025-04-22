<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://api.open-meteo.com/v1/forecast?latitude=35&longitude=139&current_weather=true');
$body = $response->getBody();
$data = json_decode($body, true);

echo "Current Temperature: " . $data['current_weather']['temperature'] . "°C\n";
