<?php
$array = [];
$LENGTH = 100;
for ($i = 0; $i < $LENGTH; $i++) {
array_push($array, rand(1, 100));
}
var_dump($array);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Index</title>
</head>
<body>
<h1>Check value of index</h1>
<form action="" method="post">
    <table>
        <tr>
            <th>Index:</th>
            <td><input type="text" name="input"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Check"></td>
        </tr>
    </table>
</form>
<?php

if ($_POST) {
    $index = $_POST['input'];

    /**
     * @throws Exception
     */
    function checkValue($arr, $index)
    {
        $length = count($arr);
        if(empty($index)){
            echo "Input is empty ! Pls input index !!!";
        }elseif ($index < 0 || $index >= $length) {
            throw new Exception("The index is out of range");
        } else {
            for ($i = 0; $i < count($arr); $i++) {
                if ($index == $i) {
                    echo "The value of index $index in array is: " . $arr[$i];
                }
            }
        }
        return $index;
    }

    try {
        checkValue($array, $index);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
</body>
</html>



