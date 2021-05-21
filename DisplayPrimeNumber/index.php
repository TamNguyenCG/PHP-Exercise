<?php
function isPrimeNumber($n){
    if($n < 2){
        return false;
    }
    for ($i = 2; $i <= sqrt($n);$i++){
        if($n % $i == 0 ){
            return false;
        }
    }
    return true;
}
echo "Prime number from 0 to 100 is: <br>";
for ($i = 0; $i < 100;$i++){
    if(isPrimeNumber($i)){
        echo $i." - ";
    }
}