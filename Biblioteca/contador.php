<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['acessos'])) {
        $_SESSION['acessos'] = 0;
    }
    $_SESSION['acessos']++;
}
?>