<?php
session_start();
if(isset($_SESSION['admin'])) {
    header("Location: ./admin.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/for_login.css" type="text/css"/>
    <link rel="stylesheet" href="../css/main.css" type="text/css"/>
    <link rel="stylesheet" href="../css/for_main.css" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600">
    <title>Login</title>
</head>
<body>
<div class="container">
    <a class="return" href="../../index.php">Вернуться к форме</a>
    <form action="../incs/signin.php" method="post">
        <div class="form-group">
            <label for="login">Логин
                <input type="text" name="login" class="form-control"/>
            </label>
        </div>
        <div class="form-group">
            <label for="password">Пароль
                <input type="password" name="password" class="form-control"/>
            </label>
        </div>
        <?php
        if(isset($_SESSION["message"])) {
            echo '<p class="msg">' . $_SESSION["message"] . '</p>';
            unset($_SESSION['message']);
        }
        ?>
        <input class="btn" type="submit" value="Войти" name="log_in"/>
    </form>
</div>
</body>
</html>