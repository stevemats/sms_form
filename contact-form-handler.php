<?php
    $name = $_post['name'];
    $visitor email = $_post['email'];
    $message = $_post['message'];
\*the above code will be responsible for
  strg of viz info. post method is more secure
 than get method in the event that you don't want to show
 the backed retrieval of msg
*/

 $email_from = 'fkinaro@worldweb.com';
 $email_subject = "New Form Submission";
 $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n"
                 "User Message: $message.\n"

$to ="stevemats@Hujambo.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To": $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>
