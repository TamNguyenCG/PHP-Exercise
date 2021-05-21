<?php
$arr1=[1,2,3,4,5,6,7,8,9];
$arr2=[10,11,12,13,14,15,16,17,18,19,20];
$arr3 = [];
//$arr3 = array_merge($arr1,$arr2);
//print_r($arr3);

for ($i = 0; $i < count($arr1) ;$i++){
    array_push($arr3,$arr1[$i]);
}
for ($i = 0; $i < count($arr2);$i++){
    array_push($arr3,$arr2[$i]);
}
print_r($arr3);