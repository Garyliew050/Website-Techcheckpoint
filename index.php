<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="style/auth.css">
</head>

<body>
    <div class="container" id="container">
 <!-- switch to register part if register validate null and true-->
 <?php
        if (@$_GET['registerValidate'] == true) {
            echo "<script>container.classList.add('right-panel-active');</script>";
        }
        ?>
        <div class="form-container sign-up-container">
            <form method="POST" action="Login/register_user.php">
                <h1>Create Account</h1>
                <span>or use your email for registration</span>
                <input type="text" name="firstName" placeholder="First Name" />
                <input type="text" name="lastName" placeholder="Last Name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button>Sign Up <i class='fa fa-sign-in'></i></button>
                 <!-- display red fonts warning if register validate null and true-->
                 <?php
                if (@$_GET['registerValidate'] == true) {
                    echo "<p style='color:red'>" . $_GET['registerValidate'] . "</p>";
                }
                ?>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="Login/login.php">
                <h1>Sign in</h1>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                 <!-- display red fonts warning if login validate null and true-->
                 <a href="Login/forgot_password.php">Forgot your password?</a>
                <button>Sign In <i class='fa fa-sign-in'></i></button>
                <?php
                if (@$_GET['loginValidate'] == true) {
                    echo "<p style='color:red'>" . $_GET['loginValidate'] . "</p>";
                }
                ?>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome!</h1><br>

                    <p>Register an account enjoy the promotion with TechCheckpoint now on today! <br><br> Already have
                        an account?</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Back! <br> TechCheckpoint.co</h1><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>Every user needed an account to access our website. <br> Don't have an account?</p>
                    <button class="ghost" id="signUp" inputmode="submit">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JS Scripts -->
    <script type="text/javascript" src="javascript/Authentitcation.js"></script>
</body>

</html>