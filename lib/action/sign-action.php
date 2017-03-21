<?php
  include '../db.php';
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $data['status'] = 1;
    $row = $result->fetch_assoc();
    $data['username'] = $row['username'];
    $_SESSION['user_id'] = $row['id'];
  } else {
    $data['status'] = 0;
  }

  echo json_encode($data);
  $conn->close();
?>
