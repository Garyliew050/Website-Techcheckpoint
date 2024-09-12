<?php
// Get the ID of the element to delete
$user_id = $_POST['user_id'];
$item_id = $_POST['item_id'];


// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tech_checkpoint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check if the connection is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Delete the element from the database
$sql = "DELETE FROM `cart` WHERE UserID = '$user_id' AND product_id = '$item_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully.";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
header("Location: ../Cart/cart.php");
?>