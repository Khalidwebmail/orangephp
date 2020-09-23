<?php

$router = new AltoRouter();


$router->map('GET', '/show', 'App\Controller\IndexController@show', 'show');

$router->map('GET', '/', '', 'home');

$router->map('GET', '/about', '', 'about_us');

$match = $router->match();

if($match)
{
    require_once __DIR__."/../Controllers/Controller.php";
    require_once __DIR__."/../Controllers/IndexController.php";

    $index = new \App\Controllers\IndexController();
    $index->show();
}

else{
    echo "INvalid request";
}