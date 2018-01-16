<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('VERSION', '1.0.2.10');
define('VERSION_DATE', '14-01-2018');
define('APP', 'app');

include './load/loader.php';
include './vendor/autoload.php';
//
////INIT DATABASE
//use core\Database;
//new Database();

$uri = $_REQUEST['uri'] ?? NULL;
$uri1 = $_REQUEST['uri1'] ?? NULL;
$uri2 = $_REQUEST['uri2'] ?? NULL;

if ($uri == NULL) {
    include APP . '/build/home.php';
}

if ($uri != NULL) {
    include APP . '/build/' . $uri . '.php';
    $deinition_function = 'index';
}

if ($uri != NULL && $uri1 != NULL) {
    include APP . '/build/' . $uri . '/' . $uri1 . ' . php';
    $deinition_function = $uri1;
}

$interface =  '\\app\\build\\' . $uri;
$interface = new $interface();
$interface->$deinition_function();

//dumy($httpMethod);
