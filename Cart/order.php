<?php
// inter the order into database after payment
if (isset($_POST['submit'])) {
  $product_id = $_POST['product_id'];
  $total_price = $_POST['total_price'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $option = $_POST['selection'];

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
  $sql = "INSERT INTO `orders` (name, phone, address, method_option, all_product_id, total_price) VALUES (' $name','$phone','$address',' $option','$product_id', '$total_price')";

  if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('Order Successful!');window.location.href='../item/item_list.php';</script>";

  }
}



?>