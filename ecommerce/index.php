<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sports Shop</title>
    
    <!-- Bootstrap CSS -->
    <link href="NewPages/css/bootstrap.min.css" rel="stylesheet">  
    <!-- Animate CSS -->
    <link href="NewPages/css/animate.min.css" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="NewPages/stylesheet" href="css/owl.carousel.css">
    <!-- Font awesome CSS -->
    <link href="NewPages/css/font-awesome.min.css" rel="stylesheet">   
    <!-- Custom CSS -->
    <link href="NewPages/css/style.css" rel="stylesheet">
    <link href="NewPages/css/style-color.css" rel="stylesheet">
  </head>
  
  <body>
    
    <!-- wrapper -->
    <div class="wrapper" id="home">
    
      <!-- header area -->
      <header>
        <!-- primary menu -->
        <nav class="navbar navbar-fixed-top navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <!-- logo area -->
              <a class="navbar-brand" href="#home">
                <!-- logo image -->
                <img class="img-responsive" src="img/logo/logo.png" alt="" />
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                 <li><a href="NewPages/about.php">About</a></li>
                          <li><a href="products.php">Products</a></li>
                          <li><a href="cart.php">View Cart</a></li>
                          <li><a href="orders.php">My Orders</a></li>
                          <li><a href="NewPages/contact.html">Contact</a></li>
                           <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>  
      </header>
      <!--/ header end -->
      
      <!-- banner area -->
      <div class="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="NewPages/img/banner/b1.jpg" alt="...">
              <div class="container">
                <!-- banner caption -->
                <div class="carousel-caption slide-one">
                  <!-- heading -->
                  <h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Welcome to our Website!</h2>
                  <!-- paragraph -->
                  <h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit. Lorem ipsum dolor sit amet, consectetur elit.</h3>
                  <!-- button -->
                </div>
              </div>
            </div>
            <div class="item">
              <img src="NewPages/img/banner/b2.jpg" alt="...">
              <div class="container">
                <!-- banner caption -->
                <div class="carousel-caption slide-two">
                  <!-- heading -->
                  <h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Ecommerce Website...</h2>
                  <!-- paragraph -->
                  <h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit. Lorem ipsum dolor sit amet, consectetur elit.</h3>
                  <audio controls>
                    <source src="./NewPages/img/song.ogg" type="audio/ogg">
                    <source src="./NewPages/img/song.mp3" type="audio/mpeg">
                  </audio>
                </div>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="fa fa-arrow-left" aria-hidden="true"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa-arrow-right" aria-hidden="true"></span>
          </a>
        </div>
      </div>
      <!--/ banner end -->
      
      <!-- block for animate navigation menu -->

      
    </div>
    
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="NewPages/js/jquery.js"></script>  
    <!-- Bootstrap JS -->
    <script src="NewPages/js/bootstrap.min.js"></script>
  </body> 
</html>