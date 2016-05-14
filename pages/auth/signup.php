<?php

if (isset($_POST['user_email']) && isset($_POST['user_pass']) && isset($_POST['user_confirm_pass'])) {
    $db = new Database();
    $conn =$db ->conn();
    
    $user_email = $conn->real_escape_string($_POST['user_email']);
    $user_pass = $conn->real_escape_string($_POST['user_pass']);
    $user_confirm_pass = $_POST['user_confirm_pass'];
    
    $user = new Users();
    
    $valid = $user->valid_email($user_email);

    if ($valid > 0) {
        echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/registro&error=1">
            </head>
        </html>
    ';
    }

    if ($user_pass != $user_confirm_pass) {
        echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/registro&error=2">
            </head>
        </html>
    ';
    }
    
    $dato = [
        "user_email" => $user_email,
        "user_pass" => sha1(md5($user_pass))
    ];
    if($user->insert($dato)){
         echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/login&success=1">
            </head>
        </html>
    ';
    }  else {
        echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/registro&error=3">
            </head>
        </html>
    ';
    }
    
}  else {
    echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/registro&error=4">
            </head>
        </html>
    ';
}