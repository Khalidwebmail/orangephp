<?php

$router = new AltoRouter();


$router->map('GET', '/', 'App\Controllers\IndexController@show', 'show');

$router->map('GET', '/info', 'App\Controllers\IndexController@info', 'info');