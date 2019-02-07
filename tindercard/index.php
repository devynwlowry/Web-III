<?php 
    $name = "John Wick"; //Define variable "name" as John Wick
    $age = 54; //Define variable "age" as 54
    $interests = array("1969 Mustang", "My dog", "My dead wife", "Revenge"); //Make an array with values
    if(isset($name, $age, $interests)) {
        print true;
    } else {
        print false;
    }   //check to see if these variables are set and returns true if they are and false if they arent
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>John Wick | Parabellum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div id="box">
        <img src="john-wick.jpg">
        <h1 class="name"><?php echo "$name, $age"?></h1>
        <ul class="list">
            <?php 
            foreach ($interests as $interest ) :
                echo "<li>$interest</li>";
            endforeach;
            ?>
        </ul>
        <i class="fas fa-heart fa-3x"></i>
        <i class="fas fa-star fa-3x"></i>
        <i class="fas fa-ban fa-3x"></i>
    </div>
</body>
</html>