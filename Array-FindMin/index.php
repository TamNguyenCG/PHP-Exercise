<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Min in Array</title>
    <style>
        h1 {
            color: red;
        }

        span {
            color: red;
        }
    </style>
</head>
<body>
<form method="get">
    <h1>Find Min in Array:</h1>
    Input the value of Array(separate with ",")<span>*</span>:<input type="text" name="input">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $value = $_GET["input"];
    $arr = explode(",", $value);
    if (empty($value)) {
        echo "Please fill in <span>*</span> marked ";
    } else {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        $min = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($min > $arr[$i]) {
                $min = $arr[$i];
            }
        }
        echo "<span>Min of Array is $min</span>";
    }
}
?>
</body>
</html>