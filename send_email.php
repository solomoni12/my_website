<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "mwalupani1234@gmail.com";
    $subject = "New message from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    if (mail($to, $subject, $message, $headers)) {
       echo "Email sent successfully!";
    } else {
       echo "Email sending failed.";
    }

}
?>
