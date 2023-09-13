<?php
//Task 5: Weather Report

if(isset($_POST['submit'])) {
    $num = $_POST['num'];
    
    $result = '';
    
    if($num > 15) {
        $result = "It's warm.";
    }else if($num > 5){
        $result = "It's cool.";
    }else {
        $result = "It's freezing!";
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