<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('config.php');

function loader_directory_files($path = '', $all_folder = TRUE, $debug = FALSE) {

    if ($all_folder) {
        $path = $path . '{*.php}';
        $array_path = glob($path, GLOB_BRACE);
        foreach ($array_path as $files) {
            if ($debug) {
                echo $files;
            } else {
                include $files;
            }
        }
    } else {
        include $path;
    }
}

/* Initial App Config */
loader_directory_files('app/configs/'); 

/* Initial Core */
loader_directory_files('cores/');
/* Initial Core Helper */
loader_directory_files('cores/helper/');

/* Initial App Modal */
loader_directory_files('app/models/');
/* Initial App Builds */
loader_directory_files('app/builds/');



