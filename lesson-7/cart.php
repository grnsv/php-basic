<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
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
        <ul>
        <?php
        $cart = $_SESSION['cart'];
        foreach($cart as $good) {
            echo '<li>' . $good['id-product'] . ': ' . $good['quantity'] . '</li>';
        }
        ?>
        </ul>
    </main>
</body>

</html>