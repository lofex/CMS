<?php

//Wczytanie skryptu

if(!isset($_SESSION['APP_RUNNING'])) { require_once( 'application/function/autoload.php' );}

if ( isset($_SESSION['APP_RUNNING'] ) AND $_SESSION['APP_RUNNING'] == TRUE ) {

	echo 'Hello!';

 } elseif ( isset($_SESSION['APP_RUNNING'] ) AND $_SESSION['APP_RUNNING'] == FALSE ) {

	echo 'Ups! Cos sie zepsulo!';

	require_once('application/function/delete_session.php');

}
