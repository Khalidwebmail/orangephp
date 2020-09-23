<?php

if(!isset($_SESSION))
    session_start();

/**
 * Load env file
 */
require_once __DIR__."/../app/Config/env.php";
/**
 * Router file
 */
require_once __DIR__."/../app/Routing/routes.php";
