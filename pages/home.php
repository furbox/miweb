<?php

if ($_SESSION['is_logged_in']) {
    print_r($_SESSION);
} else {
    echo '
        <html>
            <head>
                <meta http-equiv="REFRESH" content="0;url=' . BASE_URL . '">
            </head>
        </html>
    ';
}
