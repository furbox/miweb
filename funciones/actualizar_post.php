<?php     
//guardamos los valores que llegan por post
$id = $_POST['id'];
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
$query = "UPDATE posts SET post_name ='$nombre', post_comment= '$comentario' WHERE post_id = $id";
$mysqli->query($query);

$id = $mysqli->affected_rows;
/* close connection */
$mysqli->close();
header('Location: ../index.php');