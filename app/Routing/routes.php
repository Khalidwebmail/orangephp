<?php

$router = new AltoRouter();


$router->map('GET', '/', 'App\Controllers\WelcomeController@index', 'index');