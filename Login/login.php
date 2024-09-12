<?php
// Connect to database
$host = "localhost";
$user = "root";
$password = "";
$db = "tech_checkpoint";

$connection = mysqli_connect($host, $user, $password, $db);
if (!$connection) {
    die('Unable to connect database server' . mysqli_error($con));
}

if (empty($_POST['email']) || empty($_POST['password'])) {
    header('location:../index.php?loginValidate=Please fill in all fields and try again.');
} else {
    // Fetch from form
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    // Run query
    $check_user_query = "SELECT * FROM users WHERE email = '$email'";
    $check_user_result = mysqli_query($connection, $check_user_query) or die("not found in query" . mysqli_error($connection));

    if ($check_user_result) {
        // Check if email exist
        if (mysqli_num_rows($check_user_result) == 0) {
            echo "<script> alert('No record found. Please register account');
                window.location.href='../index.php';
                </script>";
        } else {
            // Check the password exist, generate an array
            $fetch_user_result = mysqli_fetch_array($check_user_result);
            $fetched_password = $fetch_user_result[4];

            //fetch the information from $fetch_user_result  if password same with the password from an array 
            if ($password == $fetched_password) {
                session_start();
                $_SESSION['fName'] = $fetch_user_result[1];
                $_SESSION['lName'] = $fetch_user_result[2];
                $_SESSION['email'] = $fetch_user_result[3];
                //query the id from table
                $querys = "SELECT id FROM users WHERE email= '$email'";
                $result = mysqli_query($connection, $querys);
                $row = mysqli_fetch_array($result);
                $_SESSION['userID'] = $row[0];

                echo "<script> alert('Welcome back " . $fetch_user_result[1] . "');
                        window.location.href='../Home/main_page.php';
                        </script>";
            } else {
                echo "<script> alert('Incorrect Password. Please try again');
                    window.location.href='../index.php';
                    </script>";
            }
        }
    }
}
?>