<?php

if(!isset($_SESSION))
    session_start();

/**
 * Load env file
 */
require_once __DIR__."/../app/Config/env.php";

/**
 * Database object
 */
new \App\Classes\Database();

/**
 * PHP mailer object
 */
new \App\Classes\Mail();
/**
 * Router file
 */
require_once __DIR__."/../app/Routing/routes.php";
new \App\Routing\RouteDispatcher($router);
