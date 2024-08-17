<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "silvergateloans@financier.com";
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message. We will get back to you soon! Pease check your email for our reply";
        header("refresh:3;url=index.html");
        exit;
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "Oops! There was a problem with your submission. Please try again.";
}
?>
