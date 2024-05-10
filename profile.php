<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    // If user is not logged in, redirect to login page
    header('Location: login.php');
    exit;
}

// The rest of your profile code goes here
?>
