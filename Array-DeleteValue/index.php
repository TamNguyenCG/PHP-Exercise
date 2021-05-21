<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Value in Array</title>
    <style>
        h1{
            color: green;
        }
        span {
            color: red;
        }
    </style>
</head>
<body>
<form action="" method="get">
    <h1>Check and Delete value in Array</h1>
    <table>
        <tr>
            <td>Input value of array(separate with ",")<span>*</span>:</td>
            <td><input type="text" name="input_array"><br></td>
        </tr>
        <tr>
            <td>Input the value that you want to delete<span>*</span>:</td>
            <td><input type="text" name="delete_value"><br></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="delete_ele" value="Delete"></td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $value = $_GET["input_array"];
    $delete = $_GET["delete_value"];
    //Tách chuỗi thành 1 mảng
    $arr = explode(",", $value);
    $flag = false;
    for ($i = 0; $i < count($arr); $i++) {
        if ($delete == $arr[$i]) {
            array_splice($arr, $i, 1);
            $flag = true;
        }

    }
    if ($flag) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    } else {
        echo "<span>Cannot found $delete in array</span>";
    }
}
?>
</body>
</html>