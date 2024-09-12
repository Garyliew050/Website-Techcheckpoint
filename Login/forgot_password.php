<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archive</title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../style/forgot_password.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <!-- FORM FOR USER TO ENTER EMAIL -->
            <form method="POST" action="forgot_password_script.php">
                <h1>Forgot Password</h1>
                <input type="email" name="email" placeholder="Email" />
                <!--a submit button with an icon paper plain. The "onclick" attribute specifies the JavaScript function that should be executed when the button is clicked.-->
                <button type="button" onclick="submit()">Submit <i class='fa fa-send-o'></i></button>
                <?php
                // go to the script if the user type a valid email address
                if (@$_GET['forgotPasswordValidate'] == true) {
                    echo "<p style='color:red'>" . $_GET['forgotPasswordValidate'] . "</p>";
                }
                ?>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Still unable to remember your password? No worry! We got you!</h1>
                    <p>Don't worry, we would help you. Fill in the field with your email and a link will be sent to your
                        account to reset your password. </p>
                    <!--a button that contains arrow pointing to the left, back() function and transparent background and border-->
                    <button class="ghost" type="button" onclick="back()"><i class='fa fa-arrow-left'></i> Go
                        Back</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JS Scripts -->
    <script type="text/javascript">
        function back() {
            window.location.href = '../index.php';
        }
    </script>
</body>

</html>