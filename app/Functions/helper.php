<?php

use Philo\Blade\Blade;

function view($path, array $data = [])
{
    $view = __DIR__ . '/../../resources/views';
    $cache = __DIR__ . '/../../bootstrap/cache';

    $blade = new Blade($view, $cache);
    print $blade->view()->make($path, $data)->render();
}

function make($filename, $data)
{
    extract($data);
    ob_start();

    require_once __DIR__."/../../resources/views/emails/".$filename.".php";

    $content = ob_get_contents();
    ob_end_clean();

    return $content;

    $view = __DIR__."/../../resources/views";
    $cache = __DIR__."/../../bootstrap/cache";

    $blade = new Blade($view, $cache);
    print $blade->view()->make($path, $data)->render();
}