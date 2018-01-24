<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace cores;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database {
    function __construct() {
        $capsule = new Capsule;
        
        $capsule->addConnection([
            'driver' => APP_CONFIG_DATABASE_DRIVER,
            'host' => APP_CONFIG_DATABASE_HOST,
            'database' => APP_CONFIG_DATABASE_SELECT,
            'username' => APP_CONFIG_DATABASE_USER,
            'password' => APP_CONFIG_DATABASE_PASSWORD,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        // Setup the Eloquent ORM… 
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

}

// Instance Database
 new Database();
