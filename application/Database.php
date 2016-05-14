<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author furbox
 */
class Database {
    
    public function conn(){
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_errno) {
            die("ERROR : -> " . $conn->connect_error);
        }
        return $conn;
    }

//include_once 'db.php';

    /* code for data insert */
//if (isset($_POST['save'])) {
//
//    $fn = $MySQLiconn->real_escape_string($_POST['fn']);
//    $ln = $MySQLiconn->real_escape_string($_POST['ln']);
//
//    $SQL = $MySQLiconn->query("INSERT INTO data(fn,ln) VALUES('$fn','$ln')");
//
//    if (!$SQL) {
//        echo $MySQLiconn->error;
//    }
//}
    /* code for data insert */


    /* code for data delete */
//if (isset($_GET['del'])) {
//    $SQL = $MySQLiconn->query("DELETE FROM data WHERE id=" . $_GET['del']);
//    header("Location: index.php");
//}
    /* code for data delete */



    /* code for data update */
//if (isset($_GET['edit'])) {
//    $SQL = $conn->query("SELECT * FROM users WHERE user_email = 'furbox@gmail.com'");
//    $getROW = $SQL->fetch_array();
//    print_r($getROW);exit;
//}
//if (isset($_POST['update'])) {
//    $SQL = $MySQLiconn->query("UPDATE data SET fn='" . $_POST['fn'] . "', ln='" . $_POST['ln'] . "' WHERE id=" . $_GET['edit']);
//    header("Location: index.php");
//}
    /* code for data update */
}
