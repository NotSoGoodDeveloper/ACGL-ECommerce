<?php
  include '../db.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $sql = "INSERT INTO user(username, password, email)
   VALUES('$username', '$password', '$email')";
  $result = $conn->query($sql);

  if ($result === TRUE) {
    $status = 1;
  } else {
    $status = 0;
  }

  echo json_encode($status);
  $conn->close();
?>
