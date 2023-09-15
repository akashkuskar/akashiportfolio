<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "topworldtours@example.com"; // Replace with your recipient's email address

    // Set the subject of the email
    $sub = "Contact Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_subject  = "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Set the headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Send the email
    if (mail($to,$sub,$email_message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>
