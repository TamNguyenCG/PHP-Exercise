<?php
$arr=[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$sum1 = 0;
$sum2 = 0;
for ($i = 0; $i < count($arr) ;$i++){
    $sum1 += $arr[$i][$i];
    $sum2 += $arr[$i][count($arr)-1-$i];
}
echo $sum1 + $sum2;