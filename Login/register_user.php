<?php
// Connect to database
$host = "localhost";
$user = "root";
$password = "";
$db = "tech_checkpoint";

//check the connection
$connection = mysqli_connect($host, $user, $password, $db) or die("Unable to connect to database server" . mysqli_error($con));

// if the user fill in a unvalid input
if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['password'])) {
    header('location: ../index.php?registerValidate=Please fill in all fields and try again.');
} else {
    // Fetch data from form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "member";

    // Run query
    $query = "SELECT * FROM users WHERE email = '$email'";

    // Execute query
    $result = mysqli_query($connection, $query);

    // Check if email exists
    if (mysqli_num_rows($result) > 0) {
        echo "<script> alert('This email already exists. Please try again');
            window.location.href='../index.php';
            </script>";
    } else {
        //insert the data into table
        session_start();
        $session = session_id();
        $insert = "INSERT INTO users VALUES(null, '$firstName', '$lastName', '$email', '$password')";
        //verify the connection
        mysqli_query($connection, $insert) or die("Data error" . mysqli_error($connection));

        if ($insert) {
            $_SESSION['firstName'] = $firstName;
            $_SESSION['lastName'] = $lastName;
            $_SESSION['email'] = $email;


            header("location:../Home/main_page.php");
        } else {
            echo "<script> alert('Error signing up. Please try again');
                window.location.href='../index.php';
                </script>";
        }
    }
}