<?php

require __DIR__ . '/vendor/autoload.php';

lambda(function ($event) {
   return [
       'headers' => [
           'Content-Type' => "application/json",
       ],
       'statusCode' => 200,
       'body' => json_encode(['json_key' => 'json_value']),
   ];
});
