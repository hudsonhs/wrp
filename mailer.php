<?php
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to      = "wesleyanrefugeeproject@gmail.com";
  $headers = "From: $email" . "\r\n" .
    "Name: $name" . "\r\n" .
    "Reply-to: $email" . "\r\n";

  if( mail($to,$subject,"New message from: $name\r\nMessage: " . $message,$headers))
  {
      echo '<div class="alert alert-success alert-dismissible m-t-1" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>Thank you for your email! We will get back to you shortly.</div>';
  }
  else
  {
      echo '<div class="alert alert-error alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>Sorry, there was an error.</div>';
  }
?>
