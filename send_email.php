<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $location = $_POST["Location"];
    $message = $_POST["Message"];
    
    $to = "parknavigo@gmail.com"; // Replace with the recipient's email address
    $subject = "Business Proposal from $name";
    
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nLocation: $location\nMessage: $message";
    
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // You can add additional logic here, such as displaying a thank you message or redirecting to a thank you page.
    // For example:
     header("./thankyou.html");
     exit;
}
?>
