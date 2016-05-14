<div class="container-fluid">
    <?php
        @$page = $_GET['page'];
    if ($page) {
        $path = ROOT . "pages" . DS . $page . ".php";
        if (file_exists($path)) {
            include($path);
        } else {
            echo '<div class="alert alert-danger" role="alert">Lo Sentimos esa Pagina No Existe</div>';
        }
    } else {
        if (@$_SESSION['is_logged_in']) {
            include ROOT . 'pages' . DS . 'home.php';
        } else {

            include ROOT . 'pages' . DS . 'index.php';
        }
    }
    ?>
</div>