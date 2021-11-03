<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="./index.php">Главная</a></li>
                <li><a href="./lk.php">Личный кабинет</a></li>
                <li><a href="./cart.php">Корзина</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="./lk.php" method="post">
            <input type="text" name="login" id="login"><br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" name="action" value="Reg">
        </form>
    </main>
</body>

</html>