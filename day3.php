<?php
$lines = file('./day3.txt');

$data = [];
$regex = "/mul\(\d+,\d+\)/";
$total = 0;
foreach ($lines as $line) {
  if (preg_match_all($regex, $line, $matches)) {
    foreach ($matches[0] as $match) {
      preg_match_all("/\d+/", $match, $nums);
      $numA = $nums[0][0];
      $numB = $nums[0][1];
      $total += $numA * $numB;
    }
  }
}


echo "Part 1: $total \n";

echo "Part 2: $total \n";
