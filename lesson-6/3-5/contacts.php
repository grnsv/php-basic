<?php

require_once('./config.php');
require_once('./db.php');

$db = new DB(HOST, USER, PASS, DB_NAME);

if ($_POST['action'] && $_POST['name'] && $_POST['email']) {
    $action = $_POST['action'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'] ?? null;
    $tel = $_POST['tel'] ?? null;

    switch ($action) {
        case 'Add':
            $review = mysqli_fetch_assoc($db->doFeedbackAction('Read', $name, $email));
            if ($review) {
                $db->doFeedbackAction('Update', $name, $email, $message, $tel);
            } else {
                $db->doFeedbackAction('Create', $name, $email, $message, $tel);
            }
            break;
        case 'Del':
            $db->doFeedbackAction('Delete', $name, $email);
            break;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
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
            <section id="feedback">
                <h1>Контакты</h1>
                <h3>Напишите нам</h3>
                <form id="form" action=<?php echo basename(__FILE__); ?> method="post">
                    <fieldset>
                        <legend>Обратная связь</legend>
                        <label>Имя<br><input type="text" name="name" id="name" placeholder="Имя" required></label><br>
                        <label>Email<br><input type="email" name="email" id="email" placeholder="Email" required></label><br>
                        <!-- <label>Тема<br>
                            <select name="topic" id="topic">
                                <option value="recall" selected>Отзыв</option>
                                <option value="complaint">Жалоба</option>
                                <option value="other">Другое</option>
                            </select>
                        </label><br> -->
                        <label for="message">Текст сообщения</label><br>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea><br>
                        <!-- <label><input id="back_call" type="checkbox" name="back_call">Заказать обратный звонок</label><br> -->
                        <label>Контактный телефон<br><input type="tel" name="tel" id="tel" class="field" placeholder="+7 987 654-32-10"></label><br>
                        <input type="submit" name="action" value="Add">
                        <input type="submit" name="action" value="Del">
                    </fieldset>
                </form>
                <ul id="reviews" style="list-style: none;">
                    <?php
                    $reviews = $db->doFeedbackAction('Read');
                    while ($review = mysqli_fetch_assoc($reviews)) {
                        echo '<li><p class="review-author">' . $review['author'] . '</p>';
                        echo '<p class="review-text">' . $review['text'] . '</p></li><hr>';
                    }
                    ?>
                </ul>
            </section>

            <h3>Адрес</h3>
            <div itemscope itemtype="http://schema.org/Organization">
                <span itemprop="name">Стомошоп</span>
                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="postalCode">125167</span>,
                    <span itemprop="addressLocality">Москва</span>,
                    <span itemprop="streetAddress">Ленинградский проспект, 39, стр. 80</span>
                </div>
                Телефон: <span itemprop="telephone">8 (800) 700-68-41</span><br>
                Электронная почта: <span itemprop="email">email@example.com</span>
            </div>

            <p>Показать на карте:</p>
            <input type="button" onclick="ymaps.style.display = 'block'; gmaps.style.display = 'none'" value="Яндекс-карты">
            <input type="button" onclick="ymaps.style.display = 'none'; gmaps.style.display = 'block'" value="Google-карты">
            <br>

            <div id="ymaps" class="maps">
                <iframe src="https://yandex.ru/map-widget/v1/-/CCQ~AFtv3D"></iframe>
            </div>

            <div id="gmaps" class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.802648680845!2d37.53459241582829!3d55.79666469607584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b549c0ac2b5af5%3A0x4b7a44fd7798fe69!2sGeekBrains!5e0!3m2!1sru!2sse!4v1602367792650!5m2!1sru!2sse"></iframe>
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