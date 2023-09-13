<?php
//Task 2: Temperature Converter

if(isset($_POST['submit'])) {
    $num = $_POST['num'];
    $method = $_POST['method'];
    $result = '';
    switch($method) {
        case "c2f":
            $result = $num*(9/5) + 32;
            break;
        case "f2c":
            $result = ($num-32)*(5/9);
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
        <div><input type="number" name="num" id="num" required value='<?php if(isset($_POST['num'])) {
            echo $num;
        } ?>'></div>
        <div>
            <select name="method" id="method">
                <option value="c2f">Celsius to Fahrenheit</option>
                <option value="f2c">Fahrenheit to Celsius</option>
            </select>
        </div>
        <div><input type="submit" value="Submit" name='submit'></div>
        <div><h2><?php if(isset($_POST['submit'])) {
            echo $result;
        } ?></h2></div>
    </form>
</body>
</html>