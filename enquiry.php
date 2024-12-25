<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $qualification = htmlspecialchars($_POST['qualification']);
    $course = htmlspecialchars($_POST['course']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email
        echo "Invalid email format. Please provide a valid email address.";
        exit;
    }

    // Set recipient email address
    $to = 'Ware8604@gmail.com'; // Change this to your email address

    // Email subject
    $subject = 'Enquiry From Website: ' . $name;

    // Email message
    $message = "Name: $name\n";
    $message .= "Mobile no: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Location: $address\n";
    $message .= "Qualification: $qualification\n";
    $message .= "Course: $course\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    $mail_status = mail($to, $subject, $message, $headers);

    if ($mail_status) {
        // Return success response
        echo "success";
    } else {
        // Return error response
        echo "error";
    }
} else {
    // Method not allowed
    echo "Method not allowed.";
}
?>
