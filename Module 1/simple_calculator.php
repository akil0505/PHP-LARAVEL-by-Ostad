<?php
//Task 2: Temperature Converter

if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $method = $_POST['method'];
    $result = '';
    switch($method) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "sub":
            $result = $num1 - $num2;
            break;
        case "multi":
            $result = $num1 * $num2;
            break;
        case "div":
            if($num2 == 0 ) {
                $result = "you can't devide by 0";
            } else {
                $result = $num1 / $num2;
            }
            break;
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <div><input type="number" name="num1" id="num1" required value='<?php if(isset($_POST['num1'])) {
            echo $num1;
        } ?>'></div>
        <div><input type="number" name="num2" id="num2" required value='<?php if(isset($_POST['num2'])) {
            echo $num2;
        } ?>'></div>
        <div>
            <select name="method" id="method">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="multi">*</option>
                <option value="div">/</option>
            </select>
        </div>
        <div><input type="submit" value="Submit" name='submit'></div>
        <div><h2><?php if(isset($_POST['submit'])) {
            echo $result;
        } ?></h2></div>
    </form>
</body>
</html>