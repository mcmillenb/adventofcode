<?php
$lines = file('./day1.txt');

$listA = [];
$listB = [];
foreach ($lines as $line) {
  $numbers = preg_split('/\s+/', $line);
  $listA[] = $numbers[0];
  $listB[] = $numbers[1];
}

sort($listA);
sort($listB);

$total = 0;
foreach ($listA as $i => $item) {
  $itemB = $listB[$i];
  $total += abs($item - $listB[$i]);
}

echo "Part 1: $total \n";

$total = 0;
foreach ($listA as $itemA) {
  foreach ($listB as $itemB) {
    if ($itemA === $itemB) {
      $total += $itemA;
    }
  }
}

echo "Part 2: $total \n";
