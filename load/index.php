<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Reader Folder */

function loader_directory_files($path = '', $debug = FALSE) {
    foreach (glob($path . '{*.php}', GLOB_BRACE) as $files) {
        if ($debug) {
            echo $files;die();
        } else {
            include $files;
        }
    }
}

/* Initial Core */
loader_directory_files('core/');
/* Initial Core Helper */
loader_directory_files('core/helper/');
/* Initial Config */
loader_directory_files(APP . '/config/');



