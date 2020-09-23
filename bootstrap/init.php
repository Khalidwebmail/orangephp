<?php

if(!isset($_SESSION))
    session_start();

/**
 * Load env file
 */
require_once __DIR__."/../app/Config/env.php";

$app_name = getenv('APP_NAME');
var_dump($app_name);