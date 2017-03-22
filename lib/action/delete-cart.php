<?php
  include '../db.php';
  session_start();

  $id_user = $_SESSION['user_id'];
  $id_products = $_GET['id_products'];
  $sql = "DELETE FROM user_cart WHERE id_user = $id_user AND id_products = $id_products";
  if ($conn->query($sql) === TRUE) {
    echo "ok";
  } else {
    echo "fail";
  }

?>
