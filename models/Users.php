<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author furbox
 */
class Users {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conn();
    }

    public function getUserByEmail($user_email) {
        $SQL = $this->conn->query("SELECT * FROM users WHERE user_email='" . $user_email . "'");
        $getROW = $SQL->fetch_object();
        return $getROW;
    }

    public function insert($dato) {
        $user_email = $dato['user_email'];
        $user_pass = $dato['user_pass'];

        $SQL = $this->conn->query("INSERT INTO users(user_email,user_pass) VALUES('$user_email','$user_pass')");

        if (!$SQL) {
            echo $this->conn->error;
        }

        return TRUE;
    }

    public function valid_email($user_email) {
        $SQL = $this->conn->query("SELECT * FROM users WHERE user_email='" . $user_email . "'");
        $getROW = $SQL->fetch_object();
        return count($getROW);
    }

}
