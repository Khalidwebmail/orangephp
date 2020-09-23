<?php

use Dotenv\Dotenv;

define('BASE_PATH', realpath(__DIR__."/../../"));
require_once __DIR__.'/../../vendor/autoload.php';

$dotenv = Dotenv::create(BASE_PATH);
$dotenv->load();
