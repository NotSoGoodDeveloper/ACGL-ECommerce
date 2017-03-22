<?php
  include '../db.php';
  $id_user = $_GET['id_user'];

  $sql = "SELECT p.id, p.name, p.price
  FROM products AS p, user AS u, user_cart AS uc
  WHERE uc.id_products = p.id AND uc.id_user = u.id AND uc.id_user = " . $id_user;

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $total_price = 0;
    while ($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['price']?></td>
        <td class="control"><button class="btn btn-danger btn-remove" data-id="<?=$id_user?>" data-prod="<?=$row['id']?>"><span class="fa fa-close"></span></button></td>
      </tr>
    <?php
      $total_price += $row['price'];
    }
    ?>
      <tr>
        <td>Total</td>
        <td><?=$total_price?></td>
      </tr>
    <?php
  } else {
    ?>
    <tr>
      <td>Please go to shop and add some items to cart.</td>
    </tr>
    <?php
  }
?>
