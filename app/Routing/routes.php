<?php

$router = new AltoRouter();

$router->map('GET', '/', '', 'index');
$router->map('GET', '/about', '', 'about_us');

$match = $router->match();

if($match)
{
    var_dump($router->match());
}

else{
    echo "INvalid request";
}