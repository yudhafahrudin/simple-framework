<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './load/loader.php';
include './vendor/autoload.php';

$uri = $_REQUEST['uri'] ?? NULL;
$uri1 = $_REQUEST['uri1'] ?? NULL;
$uri2 = $_REQUEST['uri2'] ?? NULL;

if ($uri == NULL) {
    require APP . '/build/home.php';
}
if ($uri != NULL) {
    require APP . '/build/' . $uri . '.php';
    $deinition_function = 'index';
}

if ($uri != NULL && $uri1 != NULL) {
    require APP . '/build/' . $uri . '/' . $uri1 . ' . php';
    $deinition_function = $uri1;
}


\app\build\hello::index();

//
//$interface = '\\app\\build\\' . $uri;
//$interface::$deinition_function();;

//$db = new core\database();

//$query = $db->db->from('data_pemetaan')->where('deleted <> ?', 1);
//
//foreach ($query as $row) {
//    echo 'Hello, ' . $row['judul_pemetaan'] . ' ' . $row['deskripsi'] . '!';
//}
