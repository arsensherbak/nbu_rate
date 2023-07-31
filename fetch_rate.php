<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$res = $client->request('GET', 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json');
$currencies = json_decode($res->getBody(), true);
foreach ($currencies as $currency) {
    if ($currency['cc'] === 'USD') {
        $rate = $currency['rate'];
        file_put_contents('rate.txt', $rate);
        echo "Exchange rate updated to: $rate";
        break;
    }
}