<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace the following with your email address and desired subject
    $to = "bahle18004034@gmail.com";
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n\n";
    $messageBody .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Message sent successfully. We will get back to you shortly.";
    } else {
        echo "Error sending the message. Please try again later.";
    }
}
?>
