<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sendTo = $_POST['send_to'];

  $subject = "New form submission from $name";
  $headers = "From: $email\r\n";

  if (mail($sendTo, $subject, $message, $headers)) {
    http_response_code(200);
    echo 'Form submitted successfully';
  } else {
    http_response_code(500);
    echo 'Error sending email';
  }
}

?>
