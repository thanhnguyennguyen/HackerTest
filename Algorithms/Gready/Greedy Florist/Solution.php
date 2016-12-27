<?php
//https://www.hackerrank.com/challenges/greedy-florist
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n, $k);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');
rsort($arr);
$result = 0 ;
for($i = 0; $i < $n; $i++) {
    $x = floor($i/$k);
    $result += ($x + 1) * $arr[$i];
}
echo $result;
?>
