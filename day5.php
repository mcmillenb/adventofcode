<?php
$contents = file_get_contents('./day5.txt');

$total = 0;
$len = strpos($contents, "\n");
$left = $len - 1;
$right = $len + 1;

echo "Part 1: $total \n";

$total = 0;
// $total += preg_match_all("/(?=(M.M(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}S.S))/", $contents);
// $total += preg_match_all("/(?=(S.S(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}M.M))/", $contents);
// $total += preg_match_all("/(?=(M.S(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}M.S))/", $contents);
// $total += preg_match_all("/(?=(S.M(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}S.M))/", $contents);

echo "Part 2: $total \n";
