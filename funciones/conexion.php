<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author furbox
 */
class Conexion {
    //put your code here
    public function __construct() {
        $mysqli = new mysqli("localhost", "root", "", "miweb_db");
        return $mysqli;
    }
}
