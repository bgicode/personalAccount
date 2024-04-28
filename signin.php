<?php
session_start();

include_once('functions.php');

$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'profile.php';


if ($_POST['submit_btn']) {
    $dataPath = 'user.csv';
    $login = trim($_POST['login']);
    $pass = trim($_POST['password']);

    $regExLogin = '/^[A-Za-z][A-Za-z_0-9]{5,}$/';
    $regExPass = '/^(?=[a-z0-9|_$\-*]*[0-9])(?=[a-z0-9|_$\-*]*[a-z])(?=[a-z0-9|_$\-*]*\|)(?=[a-z0-9|_$\-*]*\*)(?=[a-z0-9|_$\-*]*_)(?=[a-z0-9|_$\-*]*\$)(?=[a-z0-9|_$\-*]*[\-])[a-z0-9|_$\-*]{8,}$/i';

    $validLogin = validation($regExLogin, $login);
    $validPass = validation($regExPass, $pass);


    $validation = $validLogin && $validPass;

    if ($validation) {
        $arUsersData = read($dataPath);
        foreach ($arUsersData as $user) {
            if ($login == $user[0]) {
                if ($pass == $user[1]) {
                    $_SESSION['login'] = $login;
                    header("Location: http://$host$uri/$extra");
                    exit;
                } else {
                    $message = 'неверный пароль';
                    break;
                }
            } else {
                $message = 'такого пользователя нет';
            }
        }
    }
}
