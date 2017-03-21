<?php
  session_start();
  // check if username exists
  $username = $_SESSION['username'];
  if (isset($username)) {
    if ($username == "") {
      header("Location: log-error.php");
    }
  }
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
            <li><a href="#">Shop</a></li>
            <li><a href="#">View Cart</a></li>
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
        <h1>Products</h1>
      </div>

      <div id="product-container"></div>
      
    </div>

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
