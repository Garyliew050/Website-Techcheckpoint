<!DOCTYPE html>
<html lang='en'>

<head>
  <title>TechCheckpoint</title>
  <!-- add style to the page -->
  <link rel="stylesheet" type="text/css" href="../style/style.css">

  <!-- include header, navigation and search file -->
  <?php include('../includes/header.php'); ?>
  <?php include('../includes/navigation.php'); ?>
  <?php include('../search&delete/search.php'); ?>

  <!-- set max width of the image and height to auto -->
  <style>
    img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  
  <?php
  //set database details
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tech_checkpoint";

  // Establish a connection to a MYSQL database
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>

  <!-- display a picture --> 
  <img id="promoPic" src="../img/promotion.jpg" alt="Promotion Picture">

  <!-- include footer file -->
  <?php include('../includes/footer.php'); ?>
</body>

</html>