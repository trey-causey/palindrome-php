<?php

require __DIR__ . '/../../vendor/autoload.php';
include __DIR__ . '/../functions/palindrome.php';

use GuzzleHttp\Client;

$client = new Client();

$uri = $_POST['theURL'];
if($uri != '') {
    $response = $client->request('GET', $uri);
    $body = $response->getBody();

    $content = $body->getContents();

    $file = strip_tags($content);

    $answers = (new WordAlgs)->palindromeFinderWeb($file);
  
    echo $answers;
}

