<?php
  session_start();
  include 'db.php';

  // check if username exists
  $user_id = $_SESSION['user_id'];
  if (isset($user_id)) {
    if ($user_id == "") {
      header("Location: log-error.php");
    }
  }

  // get name
  $sql = "SELECT username FROM user WHERE id = " . $user_id;
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACGL | ECommerce Website</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style-shop.css" rel="stylesheet">
  </head>

  <body>
    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Navigation
    ///////////////////////////////////////////////////////////////////////////
    -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            Menu <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">
            <i class="fa fa-play-circle"></i> <span class="light">ACGL</span> ECommerce
          </a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li><a href="shop.php">Shop</a></li>
            <li><a href="view-cart.php">View Cart</a></li>
            <li><a href="../index.php?out=1">Logout</a></li>
          </ul>
        </div> <!-- :END navbar-collapse -->
      </div> <!-- :END container -->
    </nav>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Products
    ///////////////////////////////////////////////////////////////////////////
    -->
    <div class="container products">
      <div class="row">
        <h1>Hello <?=$row['username']?>!</h1>
      </div>

      <div class="row">
        <h1>Products</h1>
      </div>

      <div id="product-container"></div>

    </div>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Modals
    ///////////////////////////////////////////////////////////////////////////
    -->
    <!-- Prompt Modal -->
    <div class="modal fade" id="prompt-modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-info">Title</h4>
          </div>

          <div class="modal-body">
            <p class="modal-body-text text-info">Content</p>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div> <!-- :END modal-content -->
      </div> <!-- :END modal-dialog -->
    </div> <!-- :END prompt-modal -->

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Script
    ///////////////////////////////////////////////////////////////////////////
    -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="./js/jquery-easing.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script-shop.js"></script>

  </body>
</html>
