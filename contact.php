<?php
  // Check if the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the data (optional)

    // Send the email
    mail('ofodiledaniel20@gmail.com', 'New message from ' . $name, $message, 'From: ' . $

