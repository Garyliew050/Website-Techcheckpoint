<!DOCTYPE HTML>
<html lang='en'>

<head>
  <title>Products</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../style/list_style.css">
  <?php include('../includes/header.php'); ?>
  <?php include('../includes/navigation.php'); ?>
</head>

<body>
  <main>
    <?php include('../search&delete/search.php'); ?>
    <div class="filter">
      <!-- filter that user can quickly choose according to Category-->
      <form>
        Category Filter:
        <a href="item_list.php?item_type=keybord">Keyboard</a>
        <a href="item_list.php?item_type=headset">Headset</a>
        <a href="item_list.php?item_type=mice">Mice</a>

      </form>
    </div>
  </main>

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

  // SQL query to fetch all data
  $content = "";
  $item_img = "";
  $result = NULL;
  //create a function that display the items
  function display_items($result)
  {
    $output = "";
    while ($row = $result->fetch_assoc()) {
      $content = "<div class='quote-content'>";
      $content .= "<p>" . substr($row["title"], 0, 50) . "</p>";
      $content .= "<p>RM " . $row["price"] . "</p>";
      $content .= "</div>";
      $item_img = '<div class="quote-image-container"><a href="item_details.php?item_id=' . $row["id"] . '"><img src="../' . $row["img"] .
        '" alt="Image" width="300" height="200"></a></div>';
      $output .= "<blockquote style='text-align: left;' class='eachitem'>";
      $output .= "<div class='quote-output'>";
      $output .= $item_img;
      $output .= $content;
      $output .= "</div>";
      $output .= "</blockquote>";
    }
    echo "<blockquote class='listpart'>" . $output . "</blockquote>";
  }

  //check the filter which be chosen
  if (isset($_GET['item_type'])) {
    //get the chosen type as variable
    $item_type = filter_var($_GET['item_type']);
    //search the variable in database 
    $query = "SELECT * FROM item_list WHERE type = '$item_type'";
    $result = $conn->query($query);
    if ($result->num_rows != 1) {
      //display the matched-type items
      display_items($result);
    }
  } else {
    //display all items
    $query = "SELECT * FROM item_list";
    $result = $conn->query($query);
    display_items($result);
  }
  $conn->close();
  ?>
  <?php include('../includes/footer.php'); ?>

</body>

</html>