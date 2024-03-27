<?php
$conn = mysqli_connect('localhost','root','','user_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $organization = $_POST["organization"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $items = $_POST["items"];
    $description = $_POST["description"];

    // SQL to insert data into the database
    $sql = "INSERT INTO recipient_info (organization, address, email, items, description)
            VALUES ('$organization', '$address', '$email', '$items', '$description')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo '<script>
                alert("Information received successfully. It will be poasted on the donors page for donation. Good luck!");
                setTimeout(function() {
                    window.location.href = "index.html";
                }, 2000);
              </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
