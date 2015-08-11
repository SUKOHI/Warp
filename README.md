# Warp
A PHP package mainly developed for Laravel to remember URLs to redirect through session.  
(This is for Laravel 5+. [For Laravel 4.2](https://github.com/SUKOHI/Warp/tree/1.0))

Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/Warp": "2.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => [
        ...Others...,  
        Sukohi\Warp\WarpServiceProvider::class,
    ]

Also alias

    'aliases' => [
        ...Others...,  
        'Warp'   => Sukohi\Warp\Facades\Warp::class
    ]

Usage
====

    \Warp::set('my_place', $current_url = '');

    // After moving some pages 

    echo $url = \Warp::get('my_place', $alternative_url = 'http://example.com');

License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh