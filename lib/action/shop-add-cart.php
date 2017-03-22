<?php
  include '../db.php';

  $id_user = $_GET['id_user'];
  $id_products = $_GET['id_products'];

  // check if values exists
  $sql = "SELECT * FROM user_cart WHERE id_user = $id_user AND id_products = $id_products";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo json_encode(2);
    return;
  }

  $sql = "INSERT INTO user_cart VALUES('$id_user', $id_products)";

  if ($conn->query($sql) === TRUE) {
    echo json_encode(1);
  } else {
    echo json_encode(0);
  }

?>
