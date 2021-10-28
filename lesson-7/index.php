<?php
session_start();
if (isset($_POST['id-product']) && isset($_POST['quantity'])) {
    $_SESSION['cart'][] = array(
        'id-product' => $_POST['id-product'],
        'quantity' => $_POST['quantity']
    );
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
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
        if ($_COOKIE['login'] == 1) {
        ?>
            <section id="catalog">
                <ul class="product-list">
                    <li class="product" data-product-id="123">
                        <form action="./index.php" method="post">
                            <a href="#">
                                <h3>Товар 123</h3>
                            </a>
                            <input type="hidden" name="id-product" value="123">
                            <input type="number" name="quantity" min="0" step="1" value="1">
                            <input type="submit" value="Добавить в корзину">
                        </form>
                    </li>
                    <li class="product" data-product-id="321">
                        <form action="./index.php" method="post">
                            <a href="#">
                                <h3>Товар 321</h3>
                            </a>
                            <input type="hidden" name="id-product" value="321">
                            <input type="number" name="quantity" min="0" step="1" value="1">
                            <input type="submit" value="Добавить в корзину">
                        </form>
                    </li>
                </ul>
            </section>
        <?php
        } else {
        ?>
            <form action="./lk.php" method="post">
                <input type="text" name="login" id="login"><br>
                <input type="password" name="password" id="password"><br>
                <input type="submit" name="action" value="Login">
            </form>
            <a href="./reg.php">Зарегистрироваться</a>
        <?php
        }
        ?>
    </main>
</body>

</html>