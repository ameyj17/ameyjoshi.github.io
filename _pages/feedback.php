<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $query = $_POST['query'];
    $feedback = $_POST['feedback'];
    $contact = $_POST['contact'];

    // Create an email message
    $to = 'ameyjoshi1011@gmail.com'; // Replace with your email address
    $subject = 'Feedback from ' . $name;
    $message = "Name: $name\n";
    $message .= "Query: $query\n";
    $message .= "Feedback:\n$feedback\n";
    $message .= "Contact Information: $contact\n";

    // Set additional headers
    $headers = 'From: ' . $to . "\r\n" .
        'Reply-To: ' . $to . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Thank you for your feedback! We have received your message.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your feedback.";
    }
} else {
    // Handle invalid form submission (GET request)
    echo "Invalid request.";
}
?>
