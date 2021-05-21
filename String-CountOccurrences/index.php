<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count Occurrences of String</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <h1 style="color: blue">Count Occurrences of String</h1>
    <table>
        <tr>
            <td>Input String<span>*</span>:</td>
            <td><input type="text" name="input_string"></td>
        </tr>
        <tr>
            <td>Letter<span>*</span>:</td>
            <td><input type="text" name="count_string"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Count"></td>
        </tr>
    </table>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $input = $_POST["input_string"];
        $letter = $_POST["count_string"];
        $count = 0;
        $flag = false;
        //split the string into an array
        $arr = str_split($input);
        if (empty($input) || empty($letter)) {
            echo "Please fill in <span>*</span> marked.";
        } else {
            for ($i = 0; $i < count($arr);$i++){
                if($letter == $arr[$i]){
                    $count++;
                    $flag = true;
                }
            }
        }
        if($flag){
            echo "The character <b>'".$letter."'</b> was found $count time(s)";
        }else{
            echo "The character <b>'".$letter."'</b> doesn't exist in String";
        }
    }
        //dem toan bo ky tu trong string va tra ve so lan xuat hien cua cac ky tu
/*foreach (count_chars($input,1) as $key => $item) {
    echo "The character <b>'".chr($key)."'</b> was found $item time(s) <br>";
}*/
?>
</body>
</html>
