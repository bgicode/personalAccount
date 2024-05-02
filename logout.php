<?php
session_start();

include_once('functions.php');

if ($_POST['submit_btn']) {
    $_SESSION = [];

    unset($_COOKIE[session_name()]);

    session_destroy();

    redirect('index.php');

    exit;
}
