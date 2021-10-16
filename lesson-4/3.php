<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
  <?php
  $images = scandir('./images/');
  foreach ($images as $image) {
    if (is_file('./images/' . $image)) {
  ?>
      <a href="#modal" name="modal">
        <img src="./images/<?php echo $image; ?>" alt="img" width="64px">
      </a>
  <?php
    }
  }
  ?>

  <!-- #customize - здесь будет располагаться модальное окно -->
  <div id="modal" class="modalwindow">

    <!-- Заголовок модального окна -->
    <h2>Простое jQuery модальное окно</h2>

    <!-- кнопка закрытия окна определяется как класс close -->
    <a href="#" class="close">X</a>

    <div class="content">
      <!-- Содержимое модального окна -->
    </div>

  </div>
  <script src="./scr/jquery-1.11.2.min.js"></script>
  <script src="./scr/modal.js"></script>
</body>

</html>