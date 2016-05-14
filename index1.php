<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Mi web</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="./assets/templates/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="./assets/templates/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/templates/mdl/material.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/css/mystyle.css" rel="stylesheet" type="text/css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        include './assets/templates/layouts/navbar.php';
        include './assets/templates/layouts/slider.php';
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-lg-6 col-md-8">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Deja tu Comentario</h3>
                        </div>
                        <div class="panel-body">
                            <form action="index.php" method="POST">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="post_name" id="nombre" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="comentario">Comentario</label>
                                    <textarea class="form-control" id="comentario" name="post_comment" placeholder="Comentario"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Comentario</button>
                            </form>                              
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-lg-6 col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Comentarios</h3>
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                                <?php
                                $mysqli = new mysqli("localhost", "root", "", "miweb_db");

                                /* check connection */
                                if (mysqli_connect_errno()) {
                                    printf("Error de conexión: %s\n", mysqli_connect_error());
                                    exit();
                                }
                                //creamos el Query
                                $query = "SELECT * FROM posts";
                                $result = $mysqli->query($query);
                                /* close connection */
                                while ($row = $result->fetch_object()) {
                                    ?>

                                    <a href="#" class="list-group-item active">
                                        <h4 class="list-group-item-heading"><?php echo $row->post_name; ?></h4>
                                        <p class="list-group-item-text"><?php echo $row->post_comment; ?></p>
                                        <a href="funciones/form_editar.php?id=<?php echo $row->post_id; ?>" class="btn btn-block btn-warning">Editar</a><a onclick="confirmDel()" href="funciones/eliminar_post.php?id=<?php echo $row->post_id; ?>" class="btn btn-block btn-danger" href="">Eliminar</a>
                                    </a>

                                    <?php
                                }

                                $mysqli->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php
        include './assets/templates/layouts/footer.php';
        ?>

        