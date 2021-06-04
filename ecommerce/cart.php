<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Sports Shop</title>
    
    <!-- Bootstrap CSS -->
    <link href="./NewPages/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Animate CSS -->
    <link href="./NewPages/css/animate.min.css" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="./NewPages/css/owl.carousel.css">
    <!-- Font awesome CSS -->
    <link href="./NewPages/css/font-awesome.min.css" rel="stylesheet">    
    <!-- Custom CSS -->
    <link href="./NewPages/css/style.css" rel="stylesheet">
    <link href="./NewPages/css/style-color.css" rel="stylesheet">
  </head>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
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
                 <li><a href="./NewPages/about.php">About</a></li>
                          <li><a href="products.php">Products</a></li>
                          <li><a href="cart.php">View Cart</a></li>
                          <li><a href="orders.php">My Orders</a></li>
                          <li><a href="./NewPages/contact.html">Contact</a></li>
                          
                      <?php

                      if(isset($_SESSION['username'])){
                        echo'<li><a href="orders.php">My Orders</a></li>';
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
              <img src="./NewPages/img/banner/b1.jpg" alt="...">
              <div class="container">
                <!-- banner caption -->
                <div class="carousel-caption slide-one">
                  <!-- heading -->
                  <h2 class="animated fadeInLeftBig"><i class=""></i> Cart</h2>
                  <!-- paragraph -->
                  <h3 class="animated fadeInRightBig" style = "color: white">Lorem ipsum dolor sit amet, consectetur elit. Lorem ipsum dolor sit amet, consectetur elit</h3>

                </div>
              </div>
            </div>
            <div class="item">
              <img src="./NewPages/img/banner/b2.jpg" alt="...">
              <div class="container">
                <!-- banner caption -->
                <div class="carousel-caption slide-two">
                  <!-- heading -->
                  <h2 class="animated fadeInLeftBig"><i class=""></i>Increase you product</h2>
                  <!-- paragraph -->
                  <h3 class="animated fadeInRightBig" style = "color: white">Lorem ipsum dolor sit amet, consectetur elit.</h3>
                  <!-- button -->
                  <audio controls>
                    <source src="./NewPages/img/song.ogg" type="audio/ogg">
                    <source src="./NewPagesimg/song.mp3" type="audio/mpeg">
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


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>






        <footer style="background-color: rgb(45,45,45);">
        <div class="container">
          <!-- social media links -->
          <div class="social">
            <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
            <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
          </div>
          <!-- copy right -->
          <p class="copy-right">&copy; copyright 2018, All rights are reserved.</p>
        </div>
      </footer>




    <script src="./NewPages/js/jquery.js"></script> 
    <script src="./NewPages/js/bootstrap.min.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
