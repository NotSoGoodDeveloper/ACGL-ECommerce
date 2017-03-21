<?php
  include '../db.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $status = 1;
  } else {
    $status = 0;
  }

  echo json_encode($status);
  $conn->close();
?>
