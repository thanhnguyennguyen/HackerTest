<?php
// https://www.hackerrank.com/challenges/insertionsort1
function  insertionSort( $ar) {
$count = count($ar);
    for ($i = $count -1 ; $i> 0; $i--) {
        if ($ar[$i] < $ar[$i-1]) {
            $tmp = $ar[$i];
            $ar[$i] = $ar[$i-1];
            echo implode(" ", $ar) . "\n";
            $ar[$i-1] = $tmp;
        }
    }
    echo implode(" ", $ar);
}
$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $m);
$ar = array();
$s=fgets($fp);
$ar = explode(" ", $s);
for($i=0;$i < count($ar);$ar[$i++]+=0);
insertionSort($ar);
?>
