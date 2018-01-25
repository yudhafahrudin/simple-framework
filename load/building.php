<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*********************************** Definition Constanta ***********************************/
define('VERSION', '1.0.2.10');
define('VERSION_DATE', '14-01-2018');
define('ROOT', dirname(__DIR__));
define('SELF_FILE', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASENAME_DIR', basename(ROOT));
define('APP_INTERFACE', '\\app\\builds\\');
define('BASE_BUILD', '\\core\\basebuild\\');
define('APP', 'app');
define('CORE_DIR', 'cores');

/*********************************** Cek VENDOR exist ***********************************/
$autoload_assigment = false;
$autoload = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoload)) {
    $autoload_assigment = $autoload;
    }

if (!$autoload_assigment) {
    echo "Autoload file tidak ditemukan, coba untuk mengupdate composer" . PHP_EOL;
    exit(1);
}
