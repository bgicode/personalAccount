<?php
session_start();

include_once('functions.php');
include_once('readWriteCSV.php');

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'succes.php';


if ($_POST['submit_btn']) {
    $dataPath = 'user.csv';
    $login = trim($_POST['login']);
    $pass = trim($_POST['password']);

    $regExLogin = '/.*/';
    $regExPass = '/.*/';

    $validLogin = validation($regExLogin, $login);
    $validPass = validation($regExPass, $pass);


    $validation = $validLogin && $validPass;

    if ($validation) {
        $arUsersData = Read($dataPath);
        foreach ($arUsersData as $user) {
            if ($login == $user[0]
                && $password == $user[1];
            ) {
                $check = true;
                $_SESSION['password'] = $pass;
                $_SESSION['login'] = $login;
                $_SESSION['message'] = 'Авторизация успешна';
                header("Location: http://$host$uri/$extra");
                exit;
            } 
        }
        // echo '<pre>';
        // print_r($arUsersData);
        // echo '</pre>';



        // $_SESSION['password'] = $pass;
        // $_SESSION['login'] = $login;

        // $_SESSION['message'] = 'Сообщение отправлено';

//        header("Location: http://$host$uri/$extra");

//        exit;
    }
}

    