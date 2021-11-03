<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
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
        <?php
        require_once('./config.php');
        require_once('./db.php');

        $db = new DB(HOST, USER, PASS, DB_NAME);

        if (isset($_POST['action']) && isset($_POST['login']) && isset($_POST['password'])) {
            $action = $_POST['action'];
            $login = $_POST['login'];
            $password = $_POST['password'];

            switch ($action) {
                case 'Login':
                    if ($db->doAuthAction('Authenticate', $login, $password)) {
                        echo 'logged';
                        setcookie('login', true);
                        setcookie('user', $login);
                    } else {
                        echo 'not logged';
                    }
                    break;
                case 'Reg':
                    if ($db->doAuthAction('Register', $login, $password)) {
                        echo 'registered';
                        setcookie('login', true);
                        setcookie('user', $login);
                    } else {
                        echo 'not registered';
                    }
                    break;
            }
        }

        if ($_COOKIE['login'] == 1 && isset($_COOKIE['user'])) {
            echo 'Hello ' . $_COOKIE['user'];
        }
        ?>
    </main>
</body>

</html>