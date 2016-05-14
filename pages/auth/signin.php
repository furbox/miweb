<?php

if (isset($_POST['user_email']) && isset($_POST['user_pass'])) {
    $user_email = $_POST['user_email'];
    $user_pass = sha1(md5($_POST['user_pass']));
    
    $user_db = new Users();
    $user = $user_db->getUserByEmail($user_email);
    if(count($user)!=1){
        echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/login&error=1">
            </head>
        </html>
    ';
    }
    
    if($user->user_email != $user_pass){
        echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/login&error=1">
            </head>
        </html>
    ';
    }
    $_SESSION['user_id'] = $user->user_id;
    $_SESSION['user_email'] = $user->user_email;    
    $_SESSION['is_logged_in'] = TRUE;
    echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL .'">
            </head>
        </html>
    ';
    
}else{
    echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . 'index.php?page=auth/registro&error=4">
            </head>
        </html>
    ';
}