<?php 
    //iniciar una sesion
    session_start();
    //la hora de nuestro ciudad
    date_default_timezone_set('America/Merida');
    
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)).DS);
    
    define('APP_PATH', ROOT. 'application' .DS);
    
    //archivos de configuracion
    require_once APP_PATH . 'Config.php';
    require_once APP_PATH . 'Database.php';
    require_once APP_PATH . 'Model.php';
    require_once APP_PATH . 'Includes.php';
    
    //vistas
    require_once ROOT.'pages'.DS.'vistas'.DS.'head.php';
    //require_once ROOT.'pages'.DS.'vistas'.DS.'header.php';
    //require_once ROOT.'pages'.DS.'vistas'.DS.'nav.php';       
    require_once ROOT.'pages'.DS.'vistas'.DS.'navbar.php';
    //require_once ROOT.'pages'.DS.'vistas'.DS.'slider.php';
    require_once ROOT.'pages'.DS.'contenido.php';
    require_once ROOT.'pages'.DS.'vistas'.DS.'footer.php';