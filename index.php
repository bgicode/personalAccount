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
        </head>
    <body class="bodyFeed">
        <div class="wrap">
            <div class="formWraper">
                <form class="form" name="feedback" method="POST" action="<?php $_SERVER['REQUEST_URI'] ?>">
                    <div class="formTitle">Логин</div>
                    <input class="inputField" type="text" name="login" value="" required>
                    <?php
                    if ($login
                        || $validation
                    ) {
                        echo validMessage($pass, $validLogin);
                    }
                    ?>

                    <div class="formTitle">Пароль</div>
                    <input class="inputField" type="text" name="password" placeholder="" value="<?= autoComplete($_SESSION['validation'], $id, $_SESSION['id']) ?>" required>
                    <?php
                    if ($pass
                        || $validation
                    ) {
                        echo validMessage($pass, $validPass);
                    }
                    ?>
                    

                    <div class="btnWrap">
                        <input class="submitBtn" type="submit" name="submit_btn" value="Войти">

                    </div>
                    <?php
                    if ($_SESSION['message']
                        && $validation
                    ) {
                        echo '<p class="endMessage">' . $_SESSION['message'] . '</p>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>
