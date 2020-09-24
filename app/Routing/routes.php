<?php

$router = new AltoRouter();


$router->map('GET', '/', 'App\Controllers\IndexController@show', 'show');

