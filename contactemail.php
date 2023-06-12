<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $companyName = $_POST['companyName'];
    $country = $_POST['country'];
    $areaOfInterest = $_POST['areaOfInterest'];
    $message = $_POST['message'];

    // Compose email
    $to = 'enquiry@techcreate.com.sg';
    $subject = $areaOfInterest ;
    $messageBody = "First Name: " . $firstName . "\n" .
                   "Last Name: " . $lastName . "\n" .
                   "Email: " . $email . "\n" .
                   "Designation/Job Title: " . $designation . "\n" .
                   "Company Name: " . $companyName . "\n" .
                   "Country: " . $country . "\n" .
                   "Area of Interest: " . $areaOfInterest . "\n" .
                   "Message: " . $message;

    // Set headers
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
