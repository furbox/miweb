<?php

//guardamos los valores que llegan por post
$id = $_GET['id'];
//creamos una instancia de la coneccion de mysql  host,user,pass,nombredb
$mysqli = new mysqli("localhost", "root", "", "miweb_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}
//creamos el Query
$query = "DELETE FROM posts WHERE post_id=$id";
$mysqli->query($query);

$id = $mysqli->affected_rows;

/* close connection */
$mysqli->close();
header('Location: ../index.php');