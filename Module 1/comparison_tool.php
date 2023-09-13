<?php
//Task 6: Comparison Tool

if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 > $num2? $num1 : $num2 ;  
    
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
       
        
        <div><input type="submit" value="Submit" name='submit'></div>
        <div><h2><?php if(isset($_POST['submit'])) {
            echo $result;
        } ?></h2></div>
    </form>
</body>
</html>