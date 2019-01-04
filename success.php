<?php

$myemail = "johnathanward@hotmail.co.uk";
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = _POST['message'];

'Name': $name
'Email': $email
'Subject': $subject
'Message': $message


mail($name, $myemail, $subject, $message);
?>

