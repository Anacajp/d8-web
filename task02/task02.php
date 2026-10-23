<?php
function dog_bark(int $woof_nb): void {
  echo implode(" ", array_fill(0, max(0, $woof_nb), "woof")) . PHP_EOL;
}
?>
