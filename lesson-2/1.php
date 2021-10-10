<?php
  $a = rand(PHP_INT_MIN, PHP_INT_MAX);
  $b = rand(PHP_INT_MIN, PHP_INT_MAX);

  if ($a >= 0 && $b >= 0) {
    echo $a - $b;
  } else if ($a < 0 && $b < 0) {
    echo $a * $b;
  } else {
    echo $a + $b;
  }