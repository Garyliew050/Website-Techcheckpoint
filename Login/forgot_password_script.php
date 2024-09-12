<?php
 // jump to forgot password and display the error message if user submit a blank email
if (empty($_POST['email'])) {
    header('location:forgot_password.php?forgotPasswordValidate=Please fill in all fields and try it again.');
} else {
    // Fetch from form
    $email = $_POST["email"];

    echo "<script> alert('A link has been successfully sent to your email, login and press the link in your email!');
        window.location.href='../index.php';
        </script>";
}
?>