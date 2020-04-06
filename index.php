<?php

require __DIR__ . '/vendor/autoload.php';

lambda(function ($event) {
    return [
        'headers' => [
            'Content-Type' => 'text/html'
        ],
        'statusCode' => 200,
        'body' => '<html><!doctype html><head></head><body><h1>Go Serverless v1.0! Your function executed successfully!</h1></html>',
    ];
});
