<?php

$router = new AltoRouter();


$router->map('GET', '/show', 'App\Controllers\IndexController@show', 'show');

$router->map('GET', '/', '', 'home');

$router->map('GET', '/about', '', 'about_us');
