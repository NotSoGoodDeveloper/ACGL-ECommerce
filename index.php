<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACGL | ECommerce Website</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
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

        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a class="page-scroll" href="#about">About</a></li>
            <li><a class="page-scroll" href="#sign">Sign In</a></li>
            <li><a class="page-scroll" href="#project">Project Info</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Intro Header
    ///////////////////////////////////////////////////////////////////////////
    -->
    <header class="intro">
      <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="brand-heading">ACGL</h1>
            <p class="intro-text">ECommerce Website
            <br>Alejo, Cuenco, Gotico and Lungos</p>

            <a href="#about" class="btn btn-circle page-scroll">
              <i class="fa fa-angle-double-down animated"></i>
            </a>
          </div>
        </div>
      </div>
      </div>
    </header>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :About Section
    ///////////////////////////////////////////////////////////////////////////
    -->
    <section id="about" class="container content-section text-center">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>About ACGL</h2>
          <p>ACGL is an online ecommerce website.</p>
          <p>We sell random items here.</p>
          <p>JUST BUY IT!</p>
        </div>
      </div>
    </section>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Sign Section
    ///////////////////////////////////////////////////////////////////////////
    -->
    <section id="sign" class="content-section text-center">
      <div class="sign-section">
        <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>Sign In</h2>
          <p>If you do not have current accout you can register <a href="#">here</a>.</p>
          <button id="sign-btn" class="btn btn-default btn-lg">Sign In</button>
        </div>
        </div>
      </div>
    </section>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Project Info Section
    ///////////////////////////////////////////////////////////////////////////
    -->
    <section id="project" class="container content-section text-center">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>Project Info</h2>
          <p>School: Araullo University</p>
          <p>Subject: Advanced Web Development 2</p>
          <p>Instructor: Navarro, Gian Carlo</p>
          <h3>Created By:</h3>
          <p>Alejo, Jorge Michael</p>
          <p>Cuenco, Russel Roi</p>
          <p>Gotico, Marco</p>
          <p>Lungos, Zaerald</p>
        </div>
      </div>
    </section>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Footer
    ///////////////////////////////////////////////////////////////////////////
    -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; ACGL 2017</p>
      </div>
    </footer>

    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Modals
    ///////////////////////////////////////////////////////////////////////////
    -->
    <!-- Sign in Modal -->
    <div class="modal fade" id="sign-modal" role="dialog">
      <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-info">Sign In</h4>
        </div>

        <form id="sign-form">
          <div class="modal-body">
              <label class="text-primary">Username:</label>
              <input class="form-control" name="username" type="text" required>
              <label class="text-primary">Password:</label>
              <input class="form-control" name="password" type="text" required>
          </div>

          <div class="modal-footer">
            <input class="btn btn-default" type="submit" value="Sign In">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>

      </div>
      </div>
    </div>

    <!-- Sign in Modal -->
    <div class="modal fade" id="sign-error-modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-danger">Error Sign In</h4>
          </div>

          <div class="modal-body">
            <p class="text-danger">Please try again...</p>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>

        </div>
      </div>
    </div>


    <!--
    ///////////////////////////////////////////////////////////////////////////
    :Script
    ///////////////////////////////////////////////////////////////////////////
    -->
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>

  </body>

</html>
