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
    
    Warp::set('my_place');
    Warp::set('my_place', $current_url = '');  // or You can set URL you want to keep.
    
    
    // After moving some pages 
    
    $url = \Warp::get('my_place');
    $url = \Warp::get('my_place', $alternative_url = 'http://example.com');    // You also can set alternative(default) URL.
    $url = \Warp::get('my_place', $alternative_url, $forget_flag = true);      // If $forget_flag is false, URL you set will not be removed.


License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh