<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */


    'allowed_headers' => ['*', 'application/json', 'content-type', 'Authorization,Accept,Origin,DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With, X-Inertia, If-Modified-Since,Cache-Control,Content-Type,Content-Range,Range'],


//    'paths' => [ 'sanctum/csrf-cookie', 'api', '*'],
//
    'allowed_methods' => ['*'],
//
    'allowed_origins' => ["https://freddyshop.test"],
//
    'allowed_origins_patterns' => ["https://freddyshop.test/"],
//
//    'allowed_headers' => [],
//
    'exposed_headers' => ['*', 'X-Inertia'],
//
    'max_age' => 0,
//
    'supports_credentials' => true,

];
