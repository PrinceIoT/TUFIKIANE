<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'user_db');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into database
$name = $_POST["name"];
$contact = $_POST["contact"];
$location = $_POST["location"];

$sql = "INSERT INTO donations (name, contact, location) VALUES ('$name', '$contact', '$location')";

if (mysqli_query($conn, $sql)) {
    // Data inserted successfully, now send notification via SMS
    $recipientContact = "+254706864222"; // Replace with recipient's phone number
    $message = "Hi, recipient, $name wants to donate to you. Link up with him/her with contact: $contact and location: $location attached.";

    // Send SMS via SMS gateway
    $smsGatewayURL = "https://mmy424.api.infobip.com"; // Replace with the SMS gateway URL
    $smsGatewayParams = http_build_query([
        'recipient' => $recipientContact,
        'message' => $message,
        'api_key' => '60f2ef5006f57b6c56fb3e3eaf897a6d-7699188e-a4ea-46c5-a115-da26dce73d31', // Replace with your SMS gateway API key
    ]);

    $smsGatewayResponse = file_get_contents($smsGatewayURL . '?' . $smsGatewayParams);
    if ($smsGatewayResponse === FALSE) {
        echo "Form submitted successfully but failed to send SMS.";
    } else {
        echo "Form submitted successfully and SMS sent!";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
