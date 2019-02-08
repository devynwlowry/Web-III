<pre>

<?php 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style type="text\css">
        label {
            display: block;
        }
    </style>
</head>
<body>
    <form action="process_email.php" method="POST">
        <label>Name <input type="text" name="name" value="" placeholder="Type Your Name"></label>
        <label>Email <input type="email" name="email" value="" placeholder="username@domain.com"></label>
        <label>Subject <input type="text" name="subject" value="" placeholder="What is this About?"></label>
        <label>Message <br>
        <textarea name="message" id="" cols="30" row="10"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>