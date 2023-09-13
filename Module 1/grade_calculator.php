<?php
//Task 3: Grade Calculator

if(isset($_POST['submit'])) {
    $test1 = $_POST['test1'];
    $test2 = $_POST['test2'];
    $test3 = $_POST['test3'];
    $calculation = ($test1 + $test2 + $test3) / 3;  
    $result = "";  
    if($calculation >= 80) {
        $result = "your avrage mark is ".intval($calculation)." And your Grade is A";
    }elseif ($calculation >= 60) {
        $result = "your avrage mark is ".intval($calculation)." And your Grade is B";
    }elseif ($calculation >= 50) {
        $result = "your avrage mark is ".intval($calculation)." And your Grade is C";
    }elseif ($calculation >= 33) {
        $result = "your avrage mark is ".intval($calculation)." And your Grade is D";
    }elseif ($calculation < 33) {
        $result = "your avrage mark is ".intval($calculation)." And your Grade is F";
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
        <div><input type="number" name="test1" id="test1" required value='<?php if(isset($_POST['test1'])) {
            echo $test1;
        } ?>'></div>
        <div><input type="number" name="test2" id="test2" required value='<?php if(isset($_POST['test2'])) {
            echo $test2;
        } ?>'></div>
        <div><input type="number" name="test3" id="test3" required value='<?php if(isset($_POST['test3'])) {
            echo $test3;
        } ?>'></div>
        
        <div><input type="submit" value="Submit" name='submit'></div>
        <div><h2><?php if(isset($_POST['submit'])) {
            echo $result;
        } ?></h2></div>
    </form>
</body>
</html>