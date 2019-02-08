<?php


$to = 'devyn.lowry@uconn.edu';
$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$body = "Email from contact form on \n\n";

$body .= 'Name: ' . $name . "\n";
$body .= 'Email: ' . $email . "\n";
$body .= 'Message: ' . $message . "\n";

if( mail($to, $subject, $body) ) {
    header("Location: localhost:3000/contact-form/thanks.php");
} else {
    echo "There was a problem sending this message";
}

?>