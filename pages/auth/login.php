<div class="row">
    <div class="col-lg-4 col-lg-push-4 col-sm-8 col-sm-push-2 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <?php
                if (isset($_GET['success'])) {
                    if ($_GET['success'] == 1) {
                        echo '<div class="alert alert-success" role="alert">Tu usuario ha sido creado</div>';
                    }
                }
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 1) {
                        echo '<div class="alert alert-danger" role="alert">Datos invalidos</div>';
                    }
                    if ($_GET['error'] == 4) {
                        echo '<div class="alert alert-danger" role="alert">LLene todos los campos.</div>';
                    }
                }
                ?>
                <form action="<?php echo BASE_URL; ?>index.php?page=auth/signin" method="POST">
                    <div class="form-group">
                        <label for="user_email">Email address</label>
                        <input type="email" class="form-control" required name="user_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="user_pass">Password</label>
                        <input type="password" class="form-control" required name="user_pass" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </div>
</div>

