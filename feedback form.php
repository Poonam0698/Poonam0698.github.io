<?php
     $name = $_POST['name'];
     $visitor_email = $_POST['email'];
     $message = $_POST['message']


$email_form = 'krinaashah98gmail.com';

$email_subject = "New form submission";

$email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                   "User Message: $message.\n";


$to = "sawantpoonam19998@gmail.com"

$headers = "Form: $email_form \r\n";

$headers = "Reply-To: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>