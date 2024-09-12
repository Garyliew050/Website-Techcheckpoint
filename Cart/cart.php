<!DOCTYPE HTML>
<html lang='en'>

<head>
  <!-- link css -->
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../style/cart_style.css">
   <!-- link header and navigation -->
  <?php include('../includes/header.php'); ?>
  <?php include('../includes/navigation.php'); ?>
  <title>Shopping Cart</title>

</head>

<body>
  <h1>Shopping Cart</h1>
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

  // Retrieve userID from session
  session_start();
  $user_id = $_SESSION['userID'];


  // insert item added by user according to item id
  if (isset($_GET['item_id'])) {
    $item_id = filter_var($_GET['item_id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM item_list WHERE id = $item_id";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();

      $titles = $row['title'];
      $imgs = $row["img"];
      $prices = $row["price"];

      $sql = "INSERT INTO `cart` (UserID, product_id) VALUES ('$user_id','$item_id')";

      mysqli_query($conn, $sql);

    } else {
      echo "No matching item found.";
    }
  }
  // Get item added by user according to user id
  $querys = "SELECT * FROM `cart` WHERE UserID = $user_id";
  $results = $conn->query($querys);
  if (!$results) {
    die("Error executing query: " . $conn->error);
  }
    // display item added by user 
  if ($results->num_rows > 0) {
    $output = "";
    $total = 0;
    while ($row = $results->fetch_assoc()) {

      $item_id = $row["product_id"];


      $query = "SELECT * FROM item_list WHERE id = $item_id";
      $result = $conn->query($query);
      if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $titles = $row['title'];
        $imgs = $row["img"];
        $prices = $row["price"];

        echo "<div class='quote-container'>
         <div class='quote1'>
          <div class='quote-image-container'>
          <img src='../" . $imgs . "' alt='quote image'> 
          </div>
          <div class='quote2'>
          <h2 class='quote-title'>" . $titles . "</h2>
          <p class='quote-price'> RM " . $prices . "</p>
          <form method='post' action='../search&delete/delete.php'>
        <input type='hidden' name='user_id' value='" . $user_id . "'>
        <input type='hidden' name='item_id' value='" . $item_id . "'> 
        <button class ='delete' type='submit' >Delete</button>
        </form>
        
          </div>
          </div>
          </div>";

        $total = $total + $prices;
      }

    }
    echo "<div class='total'>
        <div class='payment'>
          <a href='payment.php?user_id=$user_id'>
            <p2 class='payments'>Check Out</p2>
          </a>
        </div>
        <div class='payemnt'>
          <p1>Total: RM $total</p1>
        </div>
      </div>";
  } else {
      // if there is no item added
    echo "<div class='noItem'>No item added, add some item !</div>";
  }

  $conn->close();
  ?>
  <!-- link footer -->
  <?php include('../includes/footer.php'); ?>
</body>
</html>