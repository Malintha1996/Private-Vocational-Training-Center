<!-- Adding relevent module codes to the left panel -->

<?php
  $connection = mysqli_connect("localhost", "root", "", "courses_details");
  $id = $_POST["id"];
  $output = '';
  $query = "SELECT module_id,module_name FROM module_details WHERE lecturer='$id'";
  $result = mysqli_query($connection, $query);

  while( $row = mysqli_fetch_array($result) ){
    $output .= ' <li><a href="#" data-id=" ';
    $output .= (string)$row[0];
    $output .= ' " class="mod_link"> ';
    $output .= (string)$row[1];
    $output .= ' </a></li> ';
  }

  mysqli_close($connection);

  echo $output;
?>
