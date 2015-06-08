# Warp
A PHP package mainly developed for Laravel to remember URLs to redirect through session.

Installation&settings for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Warp\WarpServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Warp' => 'Sukohi\Warp\Facades\Warp',
    )

Usage
====

    Warp::set('my_place', $current_url = '');

    // After moving some pages

    echo $url = Warp::get('my_place', $alternative_url = 'http://example.com');

License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh