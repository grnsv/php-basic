<?php
require_once('./config.php');
require_once('./db.php');

$db = new DB(HOST, USER, PASS, DB_NAME);

$id = $_GET['product_id'] ?? null;
if ($id && is_numeric($id)) {
    $product = mysqli_fetch_assoc($db->getProduct($id));
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>StomoShop</title>
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

            <h1><?php echo $product['name']; ?></h1>
            <div class="image">
                <a href="<?php echo $product['image_path']; ?>" target="_blank"><img width="300" src="<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>"></a>
            </div>

            <div class="short-description">
                <h3 class="heading">Описание товара</h3>
                <p><?php echo $product['short-description']; ?></p>
            </div>

            <input id="buy" type="button" value="Купить!">

            <div class="characteristics">
                <h3 class="heading">Характеристики товара</h3>
                <ul>
                    <li>Регистрационное удостоверение: <?php echo $product['certificate']; ?></li>
                    <li>Производитель: <?php echo $product['manufacturer']; ?></li>
                </ul>
            </div>

            <div class="full-description">
                <h3 class="heading">Подробное описание товара</h3>
                <?php
                $paragraphs = preg_split("/\n/", $product['full-description']);
                foreach ($paragraphs as $paragraph) {
                    echo "<p>$paragraph</p>";
                }
                ?>
            </div>
        </div>

        <footer class="footer">
            <small>&copy; Все права защищены<br>
                <div>Logo created by <a href="https://www.designevo.com/logo-maker/" title="Free Online Logo Maker">DesignEvo logo maker</a></div>
            </small>
        </footer>
    </div>
</body>

</html>