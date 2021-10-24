<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <img src="./img/logo.png" alt="СтомоШоп">
            <nav>
                <ul class="menu">
                    <li><a href="./index.php">Главная</a></li>
                    <li><a href="./catalog.php">Каталог</a></li>
                    <li><a href="./contacts.php">Контакты</a></li>
                </ul>
            </nav>
        </header>

        <div class="content">
            <h1>Каталог</h1>
            <ul class="catalogue">

                <?php
                require_once('./config.php');
                require_once('./db.php');

                $db = new DB(HOST, USER, PASS, DB_NAME);

                $products = $db->getProducts();
                while ($row = mysqli_fetch_assoc($products)) {
                    echo '<li><div><a href="./product.php?product_id=' . $row['id'] . '">';
                    echo '<img width="100" src="' . $row['image_path'] . '" alt="' . $row['name'] . '"><br>';
                    echo $row['name'] . '</a></div></li>';
                }
                ?>

            </ul>
        </div>

        <footer class="footer">
            <small>&copy; Все права защищены<br>
                <div>Logo created by <a href="https://www.designevo.com/logo-maker/" title="Free Online Logo Maker">DesignEvo logo maker</a></div>
            </small>
        </footer>
    </div>
</body>

</html>