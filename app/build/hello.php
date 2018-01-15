<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\build;

use core\basebuild as base_controller;
use app\modal\hello;

class hello extends base_controller {

    function __construct() {
        parent::__construct();
    }

    public static function index() {
        $data = hello();
        $data->getName();
//        $data['nama'] = 'Yuda';
//        base_controller::view('hello', $data);
    }

}
