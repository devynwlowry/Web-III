<?php 

$PDO = new PDO('mysql:host=localhost:3306;dbname=employee_db', 'root', 'password');

$q = trim($_GET['q']);

if($q !=null) {
    $statement = $PDO->prepare("SELECT * FROM employees WHERE name LIKE ':q'");
    $statement->execute(['q' => $q]);
    while($row = $statement->fetch()) {
        echo "" . $row-> .'(' .$row-> );
    }
}







?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form>
        <input type="text" name="search" placeholder="search" method="get"></input>
        <input type="submit" class="searchButton"></input>
    </form>
    

    
</body>
</html>