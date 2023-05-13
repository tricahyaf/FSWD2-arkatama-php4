<?php
// Mulai session
session_start();

// Menghapus semua data session
session_unset();

// Menghapus session cookies
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

// Mengakhiri session
session_destroy();

// Mengarahkan pengguna ke halaman login
header("location: login.php");
exit;
?>
