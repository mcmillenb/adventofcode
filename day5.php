<?php
$lines = file('./day5.txt');

$rules = [];
$updates = [];
$lookingAtRules = true;
foreach ($lines as $line) {
  if (strlen($line) < 2) {
    $lookingAtRules = false;
    continue;
  }

  $line = preg_replace('/\R/', '', $line);

  if ($lookingAtRules) {
    $rules[] = explode('|', $line);
  } else {
    $updates[] = $line;
  }
}

$total = 0;
$badUpdates = [];
foreach ($updates as $update) {
  foreach ($rules as $rule) { 
    $regex = '/,' . implode(',.*,', array_reverse($rule)) . ',/';
    if (preg_match($regex, "," . $update . ",")) {
      $badUpdates[] = $update;
      continue 2;
    }
  }

  $parts = explode(',', $update);
  $len = count($parts);
  $index = ($len - 1) / 2;
  $total += $parts[($len - 1) / 2];
}

echo "Part 1: $total \n";

$goodUpdates = [];
$total = 0;
foreach ($badUpdates as $update) {
  foreach ($rules as $rule) {
    $regex = '/,' . implode(',.*,', array_reverse($rule)) . ',/';
    if (preg_match($regex, "," . $update . ",")) {
      $parts = explode(',', $update);
      $indexA = array_search($rule[0], $parts);
      $indexB = array_search($rule[1], $parts);
      // This isn't working, just swapping the numbers might mess up previously
      // fixed rules
      print_r($rule[0] . "\n");
      $parts[$indexA] = $rule[1];
      print_r($rule[1] . "\n");
      $parts[$indexB] = $rule[0];
      print_r($update . "\n");
      $update = join(',', $parts);
      print_r($update . "\n");
    }
  }

  $parts = explode(',', $update);
  $len = count($parts);
  $index = ($len - 1) / 2;
  $total += $parts[($len - 1) / 2];
}

echo "Part 2: $total \n";
