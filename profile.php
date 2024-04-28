<?php
include_once('logout.php');
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
                    <div class="btnWrap">
                        <input class="submitBtn" type="submit" name="submit_btn" value="Выйти">
                    </div>
                    <?php
                    echo '<p class="endMessage">Здравствуйте, ' . $_SESSION['login'] . '. Вы успешно авторизованы</p>';
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>
