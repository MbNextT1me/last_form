<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('Location: ./login.php');
    }
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
        session_unset();
        session_destroy();
    }
    $_SESSION['LAST_ACTIVITY'] = time();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css" type="text/css" />
    <link rel="stylesheet" href="../css/for_admin.css" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <a href="../incs/logout.php" class="admin__out">Выйти из режима администратора</a>
        <div class="stat">
            <h1 class="stat__caption">Подсчёт посетителей страницы заявок:</h1>
            <span class="border__bottom"></span>
            <ol class="stat__list">
                <?php include '../incs/statistic/show_stats.php'; ?>
            </ol>
        </div>
        <div class='for_table'>
            <form action='../incs/del.php' method='post'>
                <table>
                    <caption>Принятые заявки</caption>
                    <tr>
                        <th>&nbsp;</th>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Тематика конференции</th>
                        <th>Способ оплаты</th>
                        <th>Расслыка</th>
                        <th>Дата подачи</th>
                        <th>IP-адрес пользователя</th>
                    </tr>
                    <?php include '../incs/cout_form.php';?>
                </table>
                <button type='submit' class='btn btn__del'>Удалить выбранные заявки</button>
            </form>

        </div>
    </div>
</body>
</html>
