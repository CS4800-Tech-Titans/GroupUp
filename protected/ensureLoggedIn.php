<?php
session_start();
if (!isset($_SESSION["userId"])) {
    header("Location: /login"); // Redirect to the login page if not authenticated
    die();
}
?>