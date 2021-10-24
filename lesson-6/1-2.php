<form action=<?php echo basename(__FILE__); ?> method="POST">
  <input type="number" name="operand1" id="operand1">
  <input type="number" name="operand2" id="operand2">
  <input type="submit" name="operation" value="+">
  <input type="submit" name="operation" value="-">
  <input type="submit" name="operation" value="×">
  <input type="submit" name="operation" value="÷">
</form>

<?php
function mathOperation($arg1, $arg2, $operation)
{
  switch ($operation) {
    case '+':
      return $arg1 + $arg2;
      break;
    case '-':
      return $arg1 - $arg2;
      break;
    case '×':
      return $arg1 * $arg2;
      break;
    case '÷':
      if ($arg2 == 0) {
        return 'error';
      } else {
        return $arg1 / $arg2;
      }
      break;
    default:
      return 'unknown operation';
      break;
  }
}

$arg1 = $_POST['operand1'];
$arg2 = $_POST['operand2'];
$operation = $_POST['operation'];
echo "$arg1 $operation $arg2 = " . mathOperation($arg1, $arg2, $operation);
