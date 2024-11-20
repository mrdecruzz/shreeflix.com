<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "shreeflixphotography@gmail.com.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from your website contact form.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
