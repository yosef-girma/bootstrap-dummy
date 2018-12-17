<?php
$to = "zanoynmouscity@gmail.com";
$subject = "Test";
$message = "Hello! This is a simple email message.";
$from = "yosef.gkel@gmail.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>