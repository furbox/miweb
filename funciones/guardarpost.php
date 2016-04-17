<?php

$nombre = $_POST['post_name'];
$comentario = $_POST['post_comment'];
$fecha = date('Y-m-d H:i:s');

//creamos una instancia de la coneccion de mysql
$mysqli = new mysqli("localhost", "root", "", "miweb_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}
//creamos el Query
$query = "INSERT INTO posts VALUES (NULL, '$nombre', '$comentario', '$fecha')";
$mysqli->query($query);

printf ("Nuevo registro con el id %d.\n", $mysqli->insert_id);

/* close connection */
$mysqli->close();