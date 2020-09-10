<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'ashfarooqui22@gmail.com';

  $email_subject = "New form submission";

  $emai_body = "User Name: $name.\n".
                  "User Email: $email.\n".
                      "User Subject: $subject.\n".
                          "User Message: $message.\n";
  $to = "ashufaroouqui22@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to, $email_subject, $emai_body, $headers);

  header("Location: index.html");

?>
