<?php
//Task 4: Even or Odd Checker

if(isset($_POST['submit'])) {
    $num = $_POST['num'];
    $calculation = $num % 2;
    $result = '';
    
    if($calculation == 0) {
        $result = $num. " is even number.";
    }else {
        $result = $num. " is odd number.";
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
        
        <div><input type="submit" value="Submit" name='submit'></div>
        <div><h2><?php if(isset($_POST['submit'])) {
            echo $result;
        } ?></h2></div>
    </form>
</body>
</html>