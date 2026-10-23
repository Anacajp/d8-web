<?php
function sequence(int $n): void {
  if ($n < 0) return;
  $value = "1";
  for ($i = 0; $i <= $n; $i++) {
    echo $value . PHP_EOL;
    $next = "";
    for ($j = 0; $j < strlen($value);
    ) {
      $digit = $value[$j];
      $count = 0;
      while ($j < strlen($value) && $value[$j] === $digit) {
        $count++;
        $j++;
      }
      $next .= $count . $digit;
    }
    $value = $next;
  }
}
?>
