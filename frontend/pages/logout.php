<?php
session_start();

if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
}

header("Location: /Day6/frontend/pages/login.php");
?>