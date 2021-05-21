<?php
$arr=[
    [1,2,3,4],
    [4,5,6,7],
    [7,8,9,10],
    [10,11,12,13]
];
echo "<pre>";
print_r($arr);
echo "</pre>";
$sum1 = 0;
for ($i = 0; $i < count($arr) ;$i++){
    $sum1 += $arr[$i][$i];
}
echo "<b style='color: darkred'> Sum Diagonal of Square Matrix is $sum1</b>";