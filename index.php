<?php

/*
 * 
 * SIMPLE SKELETON WITH PHP 7
 * 
 */

// Definition Constants
define('VERSION', '1.0.2.10');
define('VERSION_DATE', '14-01-2018');
define('ROOT', dirname(__DIR__));
define('SELF_FILE', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASENAME_DIR', basename(__DIR__));
define('LOCATION_DIR', __DIR__);
define('APP_INTERFACE', '\\app\\builds\\');
define('APP', 'app');
define('CORE_DIR', 'cores');

// Actual Link
$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Load All Vendor
include './vendor/autoload.php';
// Load Middlewere System
include './load/middleware.php';
// Load App System
include './load/loader.php';

// Check valid folder
check_folder(array(CORE_DIR, APP));

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

routes($httpMethod, $uri);
