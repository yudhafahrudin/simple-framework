<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\build;

use core\basebuild;
use app\modal\hello as hello_modal;

class hello extends basebuild {

    private $hello_modal;
    
    function __construct() {
        parent::__construct();
        $this->hello_modal = new hello_modal();
    }

    public function index() {
        $get_name = $this->hello_modal->getName();
        basebuild::view('hello', $get_name);
    }

}
