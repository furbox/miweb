<?php

//guardamos los valores que llegan por post
$nombre = $_POST['post_name'];
$comentario = $_POST['post_comment'];

//guardamos el valor de la fecha en formato mysql
$fecha = date('Y-m-d H:i:s');

//creamos una instancia de la coneccion de mysql  host,user,pass,nombredb
$mysqli = new mysqli("localhost", "root", "", "miweb_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}
//creamos el Query
$query = "INSERT INTO posts VALUES (NULL, '$nombre', '$comentario', '$fecha')";
$mysqli->query($query);

$id = $mysqli->insert_id;

/* close connection */
$mysqli->close();
header('Location: ../index.php');