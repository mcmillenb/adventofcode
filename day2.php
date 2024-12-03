<?php
$lines = file('./day2.txt');

$data = [];
foreach ($lines as $line) {
  $data[] = preg_split('/\s+/', $line);
}

$total = 0;
foreach ($data as $list) {
  $asc = $list[0] > $list[1];
  foreach ($list as $i => $numA) {
    if (empty($list[$i + 1])) {
      $total += 1;
      break;
    }

    $numB = $list[$i + 1];
    $diff = ($numA - $numB) * ($asc ? 1 : -1);
    if ($diff < 1 || $diff > 3) continue 2;
  }
}

echo "Part 1: $total \n";

function isSafe($list) {
  $asc = $list[0] > $list[1];
  foreach ($list as $i => $numA) {
    if (empty($list[$i + 1])) {
      break;
    }

    $numB = $list[$i + 1];
    $diff = ($numA - $numB) * ($asc ? 1 : -1);
    if ($diff < 1 || $diff > 3) return false;
  }
  return -1;
}

$total = 0;
foreach ($data as $list) {
  if (isSafe($list)) {
    $total += 1;
    continue;
  }

  $length = count($list) - 1;
  for ($i = 0; $i < $length; $i++) {
    $mergedList = array_merge(
      array_slice($list, 0, $i),
      array_slice($list, $i + 1)
    );

    if (isSafe($mergedList)) {
      $total += 1;
      continue 2;
    }
  }
}

echo "Part 2: $total \n";
