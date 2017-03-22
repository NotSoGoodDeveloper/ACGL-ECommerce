<?php
  include '../db.php';
  $id_user = $_GET['id_user'];
  // $id_products = $_GET['id_products'];

  echo "USERID: $id_user";

  $sql = "SELECT p.name, p.price
  FROM products AS p, user AS u, user_cart AS uc
  WHERE uc.id_products = p.id AND uc.id_user = " . $id_user;

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['price']?></td>
        <td class="control"><button class="btn btn-danger btn-remove" data-id="<?=$id_user?>" data-prod="<?=$id_products?>"><span class="fa fa-close"></span></button></td>
      </tr>
    <?php
    }
  }
?>
