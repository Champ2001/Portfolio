<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'sarnavamohanta2001@gmail.com'; // Replace with your desired email address

    $subject = 'Contact Form Submission: ' . $subject;

    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n\n";
    $message_body .= "Message:\n$message";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message_body, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Error sending message.';
    }
}
?>
