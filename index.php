<?php

/*
 * 
 * SIMPLE SKELETON WITH PHP 7
 * 
 */

// Generate all building component
include './load/building.php';
// Load All Vendor
include './vendor/autoload.php';
// Generate Middlewere System after Vendor
include './load/middleware.php';
// Load App System
include './load/loader.php';

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = filter_var( $_SERVER['REQUEST_URI'], FILTER_SANITIZE_STRING);
routes($httpMethod, $uri);
