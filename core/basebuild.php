<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace core;

class basebuild {

    function __construct() {
        
    }

    public static function view($view = NULL, $variable = NULL) {
        if (!$variable == NULL) {
            extract($variable);
        }
        include APP . '/views/' . $view . '.php';   
    }

}
