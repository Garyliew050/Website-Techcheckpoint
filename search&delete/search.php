<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tech_checkpoint";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<main>
  <div style="text-align:center">
    <form action="../item/item_list.php" method="POST">
      <input type="text" id="search" name="search" style="width:600px; height:30px;margin-right: 20px;">
      <input type="submit" id="submit-search" value="Search" style="width:80px; height:30px;">
    </form>
  </div>
</main>
<?php
// macthing the user key word and product
if (isset($_POST['search'])) {
  $searchTerm = $_POST['search'];
  $searchTerm = strtolower($searchTerm);
  if (!empty($searchTerm)) {
    $query = "SELECT * FROM item_list WHERE LOWER(title) 
      LIKE '%$searchTerm%' OR LOWER(type) LIKE '%$searchTerm%'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      display_items($result);
    } else {
      echo 'No Matching Item';
    }
  } else {
    $query = "SELECT * FROM item_list";
    $result = $conn->query($query);
    display_items($result);
  }
}

?>