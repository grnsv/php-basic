<?php
  $i = 0;
  do {
    if ($i === 0) {
      echo "$i - ноль<br>";
    } else if ($i % 2 === 0) {
      echo "$i - четное число<br>";
    } else {
      echo "$i - нечетное число<br>";
    }
    $i++;
  } while ($i <= 10);