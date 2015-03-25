<?php

if ( session_status() !== PHP_SESSION_ACTIVE ) {

	if( session_name() == 'PHPSESSID' ) {
		// Zmiana nazwa sesji 
		session_name(Config::get('session/session_name'));
	}
	// Start sesji
	session_start();

	//Tworzenie zmiennej w sesji, informujaca o stanie aplikacji
	$_SESSION['APP_RUNNING'] = TRUE;
}

// Report all PHP errors
error_reporting(-1);
