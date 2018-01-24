<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dumy($data = '') {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function arrget($arr = array(), $key = '') {
    return Illuminate\Support\Arr::get($arr, $key);
}
