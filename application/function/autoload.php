<?php

// Wczytywanie klas
function __autoload( $classname ) {
    $filename = "application/class/Class.". $classname .".php";
    require_once( $filename );
}

// Wczytywanie konfiguracji
require_once( 'application/config/lofex_config.php' );

// Wczytywanie inicjatora
require_once( 'application/core/init.php' );