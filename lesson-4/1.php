<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $images = [
    './images/img.jpg',
    './images/img-1.jpg',
    './images/img-2.jpg',
    './images/img-3.jpg',
  ];
  foreach ($images as $image) {
  ?>
    <a href="<?php echo $image; ?>" target="_blank">
      <img src="<?php echo $image; ?>" alt="img" width="64px">
    </a>
  <?php
  }
  ?>
</body>

</html>