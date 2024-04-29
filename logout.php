<?php
session_start();

include_once('functions.php');

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';

if ($_POST['submit_btn']) {
    $_SESSION = [];

    unset($_COOKIE[session_name()]);

    session_destroy();

    header("Location: http://$host$uri/$extra");

    exit;
}
