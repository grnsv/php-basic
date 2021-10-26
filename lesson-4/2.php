<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $images = scandir('./images/');
  foreach ($images as $image) {
    if (is_file('./images/' . $image)) {
  ?>
      <a href="./images/<?php echo $image; ?>" target="_blank">
        <img src="./images/<?php echo $image; ?>" alt="img" width="64px">
      </a>
  <?php
    }
  }
  ?>
</body>

</html>