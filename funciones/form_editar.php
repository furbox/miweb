<?php
$base_url = "http://localhost/miweb-master/";

$mysqli = new mysqli("localhost", "root", "", "miweb_db");
$id = $_GET['id'];
/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}
//creamos el Query
$query = "SELECT * FROM posts WHERE post_id=$id";
$result = $mysqli->query($query);
$post = $result->fetch_object();
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Mi web</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="<?php echo $base_url; ?>assets/templates/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $base_url; ?>assets/templates/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $base_url; ?>assets/templates/mdl/material.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $base_url; ?>assets/css/mystyle.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        include '../assets/templates/layouts/navbar.php';
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-6 col-lg-push-3 col-md-8">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edita tu Comentario</h3>
                        </div>
                        <div class="panel-body">
                            <form action="../funciones/actualizar_post.php" method="POST">
                                <input type="hidden" value="<?php echo $post->post_id; ?>" name="id">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" value="<?php echo $post->post_name; ?>" name="post_name" id="nombre" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="comentario">Comentario</label>
                                    <textarea class="form-control" id="comentario"  name="post_comment" placeholder="Comentario"><?php echo $post->post_comment; ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Guardar Comentario</button>
                            </form>                              
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <?php
        include '../assets/templates/layouts/footer.php';
        ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo $base_url; ?>assets/templates/jquery-1.12.3.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo $base_url; ?>assets/templates/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="<?php echo $base_url; ?>assets/templates/mdl/material.min.js" type="text/javascript"></script>
    </body>
</html>