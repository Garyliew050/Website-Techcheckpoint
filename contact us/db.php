<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "tech_checkpoint";

// Create connection to database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Verify the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert form data into database
if (!empty($_POST['email']) && !empty($_POST['feedback'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $feedback = $conn->real_escape_string($_POST['feedback']);

    $sql = "INSERT INTO feedback (email, feedback) VALUES ('$email', '$feedback')";
    //verify the connection
    if (mysqli_query($conn, $sql)) {
        echo "<p>Your feedback has been submitted successfully!</p>";
    } else {
        echo "<p>Sorry, there was an error sending your feedback. Please try again later.</p>";
    }
}

mysqli_close($conn);
?>