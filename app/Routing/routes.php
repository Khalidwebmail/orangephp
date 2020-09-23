<?php

$router = new AltoRouter();

$router->map('GET', '/show', 'App\Controller\IndexController@show', 'show');
$router->map('GET', '/about', '', 'about_us');

$match = $router->match();

if($match)
{
    var_dump($router->match());
}

else{
    echo "INvalid request";
}