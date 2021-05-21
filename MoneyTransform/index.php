<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Money Transform</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
<form method="post">
    <h1 style="color: red">Money Transform</h1>
    <table>
        <tr>
            <td>Money amount<span>*</span>:</td>
            <td><input type="text" name="amount" </td>
        </tr>
        <tr>
            <td></td>
            <td>from<span>*</span>:<select name="from">
                    <option></option>
                    <option value="usd">USD</option>
                    <option value="vnd">VND</option>
                </select>
                to<span>*</span>: <select name="to">
                    <option></option>
                    <option value="vnd">VND</option>
                    <option value="usd">USD</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Transform"></td>
        </tr>
    </table>
    <h1 style="color: green">Result:</h1>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $money_amount = $_POST["amount"];
        $from = $_POST["from"];
        $to = $_POST["to"];
        $VND = 23000;

        if(empty($money_amount) || empty($from) || empty($to)){
            echo "Please fill in all"." <span>*</span> "."marked.";
        }elseif($money_amount < 0){
            echo "Money amount must over 0";
        }elseif ($from == "usd" && $to == "vnd"){
            echo $money_amount * $VND." VND";
        }elseif ($from == "vnd" && $to == "usd"){
            echo $money_amount / $VND." USD";
        }elseif ($from == "usd" && $to == "usd"){
            echo $money_amount." USD";
        }elseif ($from == "vnd" && $to == "vnd"){
            echo $money_amount." VND";
        }
    }
?>
</body>
</html>
