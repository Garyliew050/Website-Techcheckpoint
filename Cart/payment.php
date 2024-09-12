<!DOCTYPE HTML>
<html lang='en'>

<head>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../style/payment_style.css">
  <?php include('../includes/header.php'); ?>
  <?php include('../includes/navigation.php'); ?>
  <title>Payment</title>
</head>

<body>
  <h1>Payment</h1>
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
  // get the item that is in the user cart according to user id
  if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $querys = "SELECT * FROM `cart` WHERE UserID = $user_id";
    $results = $conn->query($querys);
    if (!$results) {
      die("Error executing query: " . $conn->error);
    }
    if ($results->num_rows > 0) {
      $output = "";
      $total = 0;
      $all_order = "";
      while ($row = $results->fetch_assoc()) {

        $item_id = $row["product_id"];


        $query = "SELECT * FROM item_list WHERE id = $item_id";
        $result = $conn->query($query);
        // dispaly the item that is in the user cart 
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
           <p class='quote-price'> RM " . number_format($prices, 2) . "</p>
            </div>
          </div></div>";
          $all_order = $all_order . "," . $item_id;
          $total = $total + $prices;
        }
      }
    }
    // shipping fee
    $shipping_fee = 5.50;
    // calculate the total price
    echo "<div class='price'><p1>RM" . number_format($total, 2) . "</p1></div>";
    echo "<div class='shipping'>
    <p>Shipping fee: RM" . number_format($shipping_fee, 2) . "</p>
    <hr><p>Total Payment: RM" . number_format($total + $shipping_fee, 2) . "</p> 
  </div>";

  } else {
    echo "No product to check Out";
  }
  $conn->close();
  ?>
  <!-- form for user to enter order detail -->
  <form name="myForm" onsubmit="return validateForm()" method="post" action="order.php">
    <input type='hidden' id="product_id" name='product_id' value="<?php echo $all_order ?>">
    <input type='hidden' id="total_price" name='total_price' value="<?php echo $total ?>">
    <label for="name">Receiver Name:</label>
    <input type="text" name="name" id="name" required>
    <br><br>
    <label for="phone">Receiver Phone Number:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{7}" required
      title="Please enter phone number in the format of 012-3456789">
    <br><br>
    <label for="address">Receiver Address:</label>
    <textarea id="address" name="address" rows="5" cols="40" required></textarea>
    <br><br>
    <label for="selection">Select an option:</label>
    <select name="selection" id="selection" required>
      <option value="">--Please choose a Payment Method--</option>
      <option value="Cash On Delivery">Cash On Delivery</option>
    </select>
    <br><br>
    <button type="submit" name="submit" value="submit">Place Order</button>
  </form>
  <!-- form validation -->
  <script type="text/javascript">
    function validateForm() {
      var name = document.forms["myForm"]["name"].value;
      var phone = document.forms["myForm"]["phone"].value;
      var address = document.forms["myForm"]["address"].value;
      var selection = document.forms["myForm"]["selection"].value;
      if (name == "") {
        alert("Please enter your name.");
        return false;
      }
      if (phone == "") {
        alert("Please enter your phone number.");
        return false;
      }
      if (address == "") {
        alert("Please enter your address.");
        return false;
      }
      if (selection == "") {
        alert("Please make a selection of Payment method.");
        return false;
      }
    }
  </script>

  <!-- link footer -->
  <?php include('../includes/footer.php'); ?>
</body>

</html>