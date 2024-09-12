<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css Link -->
    <link rel="stylesheet" href="../style/contact.css">
    <link rel="stylesheet" href="../style/style.css">

    <title>Contact Us</title>
</head>

<body>
    <!-- header and navigation Link -->
    <?php include('../includes/header.php'); ?>
    <?php include('../includes/navigation.php'); ?>

    <!-- contact header  -->
    <div class="contactusHeader">
        <div class="contact1stHeader">
            <h1 id="contactH"> TechCheckpoint Customer Service</h1>
            <h4 id="contact2ndH"> Thank you for your interest in TechCheckpoint! To get in touch with us, please use the
                information below: </h4>
        </div>


    </div>

    <div class="Body">
        <div class="contactBodyHead">

            <h1> Contact us with email or phone call </h1>
            <br>

            <h2> You can directly contact us through the email given </h2>

            <h3> You also can contact the service phone number (8 AM to 10 PM only everyday ) </h3>
        </div>
        <!-- contact phone  -->
        <div id="phoneNav">
            <ul id="phoneButton">
                <li><a href="tel:+60171234567"><i class="fa fa-phone" aria-hidden="true"></i> 0171234567</a></li>
            </ul>
        </div>
        <hr>
        <div class="contactBodyHead">

            <h1> Contact us through the Email </h1>
            <h2> Our team would reply on next working day. </h2>
            <br>
        </div>
        <!-- contact email -->
        <div id="EmailContactNav">
            <ul id="EmailButton">
                <li><a href="mailto:feedback@techcheckpoint.my"><i class="fas fa-envelope" aria-hidden="true"></i> Our
                        Email: feedback@techcheckpoint.my </a></li>
            </ul>
        </div>

        <hr>
        <div class="contactBodyHead">
            <h1> Drop your message here, our service team will contact you as soon as possible
                , please remember to fill your email address </h1>
        </div>
        <!-- feed back field  -->
        <div class="contactLabel">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <label for="email">Your email address:</label><br>
                <input type="email" id="email" name="email" required><br>
                <br>
                <label for="feedback">Your feedback:</label><br>
                <textarea id="feedback" name="feedback" required></textarea><br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

    </div>
    <!-- link db.php  -->
    <?php include('../contact us/db.php'); ?>
    <!-- link footer  -->
    <?php include('../includes/footer.php'); ?>
</body>

</html>