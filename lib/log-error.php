<?php
  session_start();

  if (isset($_GET['out'])) {
    if ($_GET['out'] == 1) {
      $_SESSION['username'] = '';
      echo "gone";
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
    <link href="../css/style.css" rel="stylesheet">
  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
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
      </div> <!-- :END container -->
    </nav>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Error Header
    ///////////////////////////////////////////////////////////////////////////
    -->
    <header class="intro">
      <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="brand-heading">ACGL</h1>
            <p class="intro-text">You had been logged out! Go back to login page.</p>

            <a href="../index.php#sign" class="btn btn-circle page-scroll">
              <i class="fa fa-arrow-left animated"></i>
            </a>
          </div>
        </div>
      </div>
      </div>
    </header> <!-- :END header intro -->


    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Script
    ///////////////////////////////////////////////////////////////////////////
    -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>

  </body>

</html>
