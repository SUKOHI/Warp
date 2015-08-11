# Warp
A PHP package mainly developed for Laravel to remember URLs to redirect through session.  
(This is for Laravel 4.2. [For Laravel 5+](https://github.com/SUKOHI/Warp))

Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/warp": "1.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => [
        ...Others...,  
        'Sukohi\Warp\WarpServiceProvider',
    ]

Also alias

    'aliases' => [
        ...Others...,  
        'Warp' => 'Sukohi\Warp\Facades\Warp',
    ]

Usage
====

    Warp::set('my_place', $current_url = '');

    // After moving some pages

    echo $url = Warp::get('my_place', $alternative_url = 'http://example.com');

License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh