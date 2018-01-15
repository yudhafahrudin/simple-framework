<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\modal;

use core\database;
        

class hello extends database {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getName() {
        $query = $db->db->from('data_pemetaan')->where('deleted <> ?', 1);
        foreach ($query as $row) {
        }
        return $row;
    }
}
