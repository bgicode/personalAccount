<?php
include_once('signin.php');
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="./script.js" type="text/javascript"></script>
        </head>
    <body class="bodyFeed">
        <div class="wrap">
            <div class="formWraper">
                <form class="form" name="feedback" method="POST" action="<?php $_SERVER['REQUEST_URI'] ?>">
                    <div class="formTitle">Логин</div>
                    <input class="inputField" type="text" name="login" value="<?= autoComplete($validation, $login, $login) ?>" required>
                    <?php
                    if ($login
                        || $validation
                    ) {
                        echo validMessage($pass, $validLogin, "не меньше 6 символов (латинские буквы, цифры и нижнее подчеркивание, первый символ только буква");
                    }
                    ?>

                    <div class="formTitle">Пароль</div>
                    <div class="inputPassWrap">
                        <input id="passwordField" class="inputField inputPassField" type="password" name="password" placeholder="" value="<?= autoComplete($validation, $pass, $pass) ?>" required>
                        <label id="checkImg" for="" title="показать пароль">
                            <input id="showPass" class="showPass" type="checkbox" name="checkbox" />
                            <span></span>
                        </label>
                    </div>
                    <?php
                    if ($pass
                        || $validation
                    ) {
                        echo validMessage($pass, $validPass, "не менее 8 символов, наличие латинских букв, -, _, *, $, |");
                    }
                    ?>

                    <div class="btnWrap">
                        <input class="submitBtn" type="submit" name="submit_btn" value="Войти">
                    </div>
                    <?php
                    if ($message
                        && $validation
                    ) {
                        echo '<p class="endMessage">' . $message . '</p>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>
