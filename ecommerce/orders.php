<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
include 'config.php';
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}

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
    




    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>My COD Orders</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>

    <script src="./NewPages/js/jquery.js"></script> 
    <script src="./NewPages/js/bootstrap.min.js"></script>
    <script src="js/vendor/jquery.js"></script>
      <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
