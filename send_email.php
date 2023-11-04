<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $message = $_POST["Message"];
    
    $to = "parknavigo@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    // Include the phone number in the email message
    $message = "Phone: $phone\n\n$message";
    
    $emailSent = mail($to, $subject, $message, $headers);
    
    if ($emailSent) {
        // Email sent successfully, then redirect to thank you page
        header("Location: ./thank_you.html");
        exit;
    } else {
        // Handle the case where the email couldn't be sent, e.g., display an error message
        echo "Email could not be sent. Please try again later.";
    }
}
?>
