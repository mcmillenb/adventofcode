<?php
$contents = file_get_contents('./day4.txt');

$total = 0;
$len = strpos($contents, "\n");
$left = $len - 1;
$right = $len + 1;

$total += preg_match_all("/XMAS/", $contents);
$total += preg_match_all("/(?=(X(?:.|\R){" . $len . "}M(?:.|\R){" . $len . "}A(?:.|\R){" . $len . "}S))/", $contents);
$total += preg_match_all("/(?=(X(?:.|\R){" . $left . "}M(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}S))/", $contents);
$total += preg_match_all("/(?=(X(?:.|\R){" . $right . "}M(?:.|\R){" . $right . "}A(?:.|\R){" . $right . "}S))/", $contents);
$total += preg_match_all("/SAMX/", $contents);
$total += preg_match_all("/(?=(S(?:.|\R){" . $len . "}A(?:.|\R){" . $len . "}M(?:.|\R){" . $len . "}X))/", $contents);
$total += preg_match_all("/(?=(S(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}M(?:.|\R){" . $left . "}X))/", $contents);
$total += preg_match_all("/(?=(S(?:.|\R){" . $right . "}A(?:.|\R){" . $right . "}M(?:.|\R){" . $right . "}X))/", $contents);

echo "Part 1: $total \n";

$total = 0;
$total += preg_match_all("/(?=(M.M(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}S.S))/", $contents);
$total += preg_match_all("/(?=(S.S(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}M.M))/", $contents);
$total += preg_match_all("/(?=(M.S(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}M.S))/", $contents);
$total += preg_match_all("/(?=(S.M(?:.|\R){" . $left . "}A(?:.|\R){" . $left . "}S.M))/", $contents);

echo "Part 2: $total \n";
