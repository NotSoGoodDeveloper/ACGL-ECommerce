<?php
  $conn = new mysqli('localhost', 'root', '', 'acgl-ecommerce');

  if ($conn->connect_error) {
    die('Connection failed!' . $conn->connect_error);
  }
?>
