<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace core;

use \PDO;
use \FluentPDO;

class database {

    protected $tesst = 'test';
    protected $database;

   function __construct() {
        $pdo = new PDO("mysql:dbname=" . $GLOBALS['app_config_database_select'], $GLOBALS['app_config_database_user'], $GLOBALS['app_config_database_password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $this->database = new FluentPDO($pdo);
        return $this;
    }

}

//namespace core; 
//use Illuminate\Database\Capsule\Manager as Capsule;
// 
//class Database {
// 
//    function __construct() {
//    $capsule = new Capsule;
//    $capsule->addConnection([
//     'driver ' => $GLOBALS['app_config_database_driver'],
//     'host ' => $GLOBALS['app_config_database_host'],
//    'database '=> $GLOBALS['app_config_database_select'],
//    'username ' => $GLOBALS['app_config_database_user'],
//      'password '=> $GLOBALS['app_config_database_password'],
//      'charset ' => 'utf8 ',
//      'collation ' =>'utf8_unicode_ci',
//      'prefix ' =>'',
//    ]);
//    // Setup the Eloquent ORM… 
//    $capsule->bootEloquent();
//}
 

