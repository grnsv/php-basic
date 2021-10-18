<?php
  function power($val, int $pow) {
    if ($pow < 0) {
      return 1 / $val * power($val, $pow + 1);
    } else if ($pow > 0) {
      return $val * power($val, $pow - 1);
    } else {
      return 1;
    }
  }

  $arg1 = rand(0, 15);
  $arg2 = rand(-5, 5);

  echo "power($arg1, $arg2) = " . power($arg1, $arg2);