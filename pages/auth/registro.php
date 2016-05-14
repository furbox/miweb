<div class="row">
    <div class="col-lg-4 col-lg-push-4 col-sm-8 col-sm-push-2 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Registro</h3>
            </div>
            <div class="panel-body">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 1) {
                        echo '<div class="alert alert-danger" role="alert">El Email ya Existe Papá</div>';
                    }
                    if ($_GET['error'] == 2) {
                        echo '<div class="alert alert-danger" role="alert">Las contraseñas no son iguales</div>';
                    }
                    if ($_GET['error'] == 3) {
                        echo '<div class="alert alert-danger" role="alert">Ocurrio un error al registrarse intentelo de nuevo.</div>';
                    }
                    if ($_GET['error'] == 4) {
                        echo '<div class="alert alert-danger" role="alert">LLene todos los campos.</div>';
                    }
                }
                ?>
                <form action="<?php echo BASE_URL; ?>index.php?page=auth/signup" method="POST">
                    <div class="form-group">
                        <label for="user_email">Email address</label>
                        <input type="email" class="form-control" required name="user_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="user_pass">Password</label>
                        <input type="password" class="form-control" required  name="user_pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="user_confirm_pass">Repite Password</label>
                        <input type="password" class="form-control" required name="user_confirm_pass" placeholder="Repite Password">
                    </div>
                    <button type="submit" class="btn btn-default">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>

