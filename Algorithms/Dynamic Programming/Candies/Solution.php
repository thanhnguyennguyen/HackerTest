<?php
// https://www.hackerrank.com/challenges/candies

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d", $n);
$ar = [];
$candies = [];
if ($n == 1) {
    print '1';
    return;
}
$candies = [];
$candies[0] = 1;
function recalculate($i,$ar, &$candies) {
    $candies[$i] =  $candies[$i] + 1;
    if ($i > 0) {
        if ($ar[$i-1] > $ar[$i] && $candies[$i-1] <= $candies[$i]) {
             recalculate($i - 1, $ar, $candies);   
        }
    }
}
function calculate($i,$ar, &$candies) {

    if ($ar[$i] > $ar[$i-1] ) {
        $candies[$i] = $candies[$i-1] + 1;
    } else {
        $candies[$i] = 1;
        if ($ar[$i] < $ar[$i-1] && $candies[$i] >= $candies[$i-1]) {
            recalculate($i -1, $ar, $candies);
        }
    }
}
for($i=0;$i < $n; $i++) {
    fscanf($_fp, "%d", $ar[$i]);
}
for($i=1;$i < $n; $i++) {
    calculate($i,$ar,$candies);
}
$sum = 0;;
for($i=0;$i < $n; $i++) {
    $sum += $candies[$i];
   //echo $candies[$i]; 
}
echo $sum;
?>
