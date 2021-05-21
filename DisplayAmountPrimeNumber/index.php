<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Any Amount Prime Numbers</title>

</head>
<body>
<form method="get">
    <h1>Display Prime Numbers</h1>
    <div>Amount: <input type="text" name="amount"></div>
    <input type="submit" value="Display">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $amount = $_GET["amount"];
    $i=2;
    $count = 0;
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
    echo "Display {$amount} prime number is :";
    while($count < $amount){
        if(isPrimeNumber($i)){
            echo $i."&nbsp;";
            $count++;
        }
        $i++;
    }
}

?>
</body>
</html>
