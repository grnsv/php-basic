<?php
  $table = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sch',
    'ъ' => '"',
    'ы' => 'y',
    'ь' => '\'',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
    ' ' => '_',
  ];

  function transliterate($string, $table) {
    $keys = array_keys($table);
    return str_replace($keys, $table, $string);
  }

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
    echo transliterate($keys[$i], $table) . ":<br>";
    $cities = array_filter($array[$keys[$i]], function($v) {
      return substr($v, 0, 2) == 'К';
    });
    echo transliterate(implode(', ', $cities), $table) . "<br>";
  }