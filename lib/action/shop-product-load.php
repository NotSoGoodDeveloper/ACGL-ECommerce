<?php
  include '../db.php';

  $sql = "SELECT * FROM products";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $i = 1;
    while ($row = $result->fetch_assoc()) {
      if ($i == 1) {
      ?>
        <row class="row">
      <?php
      }
    ?>
      <div class="col-xs-4">
        <img class="img-responsive" src="../image/products/<?=$row['picture']?>">
        <button class="btn btn-block btn-primary btn-cart">ADD TO CART</button>
        <h4 class="product-title"><?=$row['name']?></h4>
        <h5><?=$row['price']?></h5>
        <h6><?=$row['description']?></h6>
      </div>
    <?php
      if ($i == 3) {
      ?>
        </row>
      <?php
      }
      if ($i == 3) {
        $i = 0;
      }
      $i++;
    }
  }
?>
