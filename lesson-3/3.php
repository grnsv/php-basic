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

  $keys = array_keys($array);
  for ($i = 0; $i < count($array); $i++) {
    echo $keys[$i] . ":<br>";
    echo implode(', ', $array[$keys[$i]]) . "<br>";
  }