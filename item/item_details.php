<!DOCTYPE HTML>
<html lang='en'>

<head>

  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../style/detail_style.css">
  <?php include('../includes/header.php'); ?>
  <?php include('../includes/navigation.php'); ?>
</head>

<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tech_checkpoint";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //get item id from URL
  if (isset($_GET['item_id'])) {
    $item_id = filter_var($_GET['item_id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM item_list WHERE id = $item_id";
    $result = $conn->query($query);
    //dispay the item
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $title = $row['title'];
      $img = $row["img"];
      $price = $row["price"];
      $type = $row["type"];
      $details = $row["details"];
      echo "<title>$title</title>";

    } else {
      echo "No matching item found.";
    }
  }
  $conn->close();
  ?>
  <!--this is a quote that display the item details-->
  <div class="quote-container">
    <!--the quote1 contains image-->
    <div class="quote1">
      <div class="quote-image-container">
        <img src="../<?php echo $img; ?>" alt="quote image">
      </div>
    </div>
    <!--quote2 contains title, type, price and another quote-->
    <div class="quote2">
      <h2 class="quote-title">
        <?php echo $title; ?>
      </h2>
      <p class="quote-type">
        <?php echo $type; ?>
      </p>
      <!--this quote3 contains the details about the item-->
      <div class="quote3">
        <p class="quote-details">
          <?php echo $details; ?>
        </p>
      </div>
      <p class="quote-price">RM
        <?php echo $price; ?>
      </p>
      <!--a button that add this to cart-->
      <a href="../Cart/cart.php?item_id=<?php echo $item_id; ?>">
        <p2 class="add_to_cart">Add to Cart</p2>
      </a>
    </div>
  </div>


  <?php include('../includes/footer.php'); ?>
</body>

</html>