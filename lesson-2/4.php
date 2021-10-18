<?php
  function mathOperation($arg1, $arg2, $operation) {
    include '3.php';
    switch ($operation) {
      case 'sum':
        return sum($arg1, $arg2);
        break;
      case 'sub':
        return sub($arg1, $arg2);
        break;
      case 'mul':
        return mul($arg1, $arg2);
        break;
      case 'div':
        return div($arg1, $arg2);
        break;
      default:
        return 'unknown operation';
        break;
    }
  }

  $arg1 = rand(0, 15);
  $arg2 = rand(0, 15);
  $operations = ['sum','sub','mul','div'];
  $operation = $operations[rand(0, 3)];
  echo "$operation($arg1, $arg2) = " . mathOperation($arg1, $arg2, $operation);