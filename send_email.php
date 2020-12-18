<?php

$msg = $msg . " My email is " . $email;

<?php
$to      = 'rahulnsanku@gmail.com';
$email = $_POST['email'];
$name = $_POST['name'];
$subject = 'Email from ' . $name;
$msg = $_POST['message'];
$msg = wordwrap($msg,70);
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $msg, $headers);
?>



 ?>
