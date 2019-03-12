<?php

$PDO = new PDO('mysql:host=localhost:3306;dbname=employee_db', 'root', 'password');
$statement = $PDO->query("SELECT name FROM employees WHERE position='programmer'");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['name']);

?>