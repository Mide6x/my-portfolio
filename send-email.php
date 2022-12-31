<?php
  // Get the form values
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'adewoleolumide05@gmail.com';

  // Set the email subject
  $subject = 'Message from ' . $name;

  // Build the email content
  $body = "Name: $name\nEmail: $email\n\n$message";

  // Send the email
  mail($to, $subject, $body);
  
  // Redirect to the homepage
  header('Location: index.html');
?>
