<?php
  function plural_form($n, $forms) {
    return $n%10==1 && $n%100!=11 ? $forms[0] : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? $forms[1] : $forms[2]);
  }

  function getTime() {
    $hours = date('H');
    $mins = date('i');
    return $hours . plural_form($hours, [' час', ' часа', ' часов']) . ' ' . $mins . plural_form($mins, [' минута', ' минуты', ' минут']);
  }

  date_default_timezone_set('Europe/Moscow');
  echo getTime();