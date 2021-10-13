<?php
  $array = [
    'Московская область' => [
      'Москва',
      'Зеленоград',
      'Клин',
    ],
    'Ленинградская область' => [
      'Санкт-Петербург',
      'Всеволожск',
      'Павловск',
      'Кронштадт',
    ],
    'Рязанская область' => [
      'Рязань',
    ],
  ];

  function create_list($array) {
    echo "<ul>";
    $keys = array_keys($array);
    for ($i = 0; $i < count($array); $i++) {
      echo "<li>" . $keys[$i] . "<ul>";
      echo "<li>" . implode("</li><li>", $array[$keys[$i]]) . "</li>";
      echo "</ul></li>";
    }
    echo "</ul>";
  }
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php echo create_list($array); ?>
</body>
</html>