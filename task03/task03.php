<?php
function get_shortest(array $words): string {
  $shortest = $words[0] ?? "";
  foreach ($words as $word) {
    if (strlen($word) < strlen($shortest)) $shortest = $word;
  }
  return $shortest;
}
?>
