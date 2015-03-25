<?php

// Usuwanie wszystkich zmiennych w sesji
$_SESSION = array();

// Usuwanie ciasteczek utowrzonych podczas sesji
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"],
        $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Niszczenie sesji
session_destroy();