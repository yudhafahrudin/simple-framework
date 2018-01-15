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

    public $tesst = 'test';
    public $db;

   function __construct() {
        $pdo = new PDO("mysql:dbname=" . $GLOBALS['app_config_dbselect'], $GLOBALS['app_config_user'], $GLOBALS['app_config_password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $this->db = new FluentPDO($pdo);
    }

    public static function test() {
        echo database::$tesst;
    }

    public static function db() {
        return $this;
    }

}
