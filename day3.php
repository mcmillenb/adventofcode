<?php
$contents = file_get_contents('./day3.txt');

$data = [];
$regex = "/mul\(\d+,\d+\)/";
$total = 0;
if (preg_match_all($regex, $contents, $matches)) {
  foreach ($matches[0] as $match) {
    preg_match_all("/\d+/", $match, $nums);
    $numA = $nums[0][0];
    $numB = $nums[0][1];
    $total += $numA * $numB;
  }
}

echo "Part 1: $total \n";

$total = 0;
$goodContents = preg_replace(["/\R+/", "/don't\(\).*?do\(\)/"], '', $contents);
if (preg_match_all($regex, $goodContents, $matches)) {
  foreach ($matches[0] as $match) {
    preg_match_all("/\d+/", $match, $nums);
    $numA = $nums[0][0];
    $numB = $nums[0][1];
    $total += $numA * $numB;
  }
}

echo "Part 2: $total \n";
