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
  ];

  function transliterate($string, $table) {
    $keys = array_keys($table);
    return str_replace($keys, $table, $string);
  }

  $string = "широкая электрификация южных губерний даст мощный толчок подъёму сельского хозяйства";
  echo transliterate($string, $table);
  echo "<br>";
  echo transliterator_transliterate('Latin-ASCII', transliterator_transliterate('Latin', $string));