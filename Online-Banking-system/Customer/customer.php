<?php 
    include "connect.php";
    session_start();
    // $user = $_GET['Message'];

        $amount = 0;
        
        $acount_number = $_SESSION["Account_number"];
        $qry = "SELECT `Amdeposit` FROM `customer` WHERE Account_number = ".$acount_number;
        $connt = $cont->query($qry);
        while ($row = $connt->fetch_assoc()) {
            $amount = $row["Amdeposit"];
   

    }

 ?>
<!DOCTYPE html>
<html lang="">

<head>
<title>Online Banking</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="slideDownPage.css">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="customer.php"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="../Front-page/index.php" title="Logout"><i class="fa fa-lg fa-sign-in"></i></a></li>
          
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php" style="color:#a1e3ed;"><?php echo "Total Amount: ".$amount ?></a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Team</a>
            <ul>
              <li><a href="#directors">Board of Director</a></li>
              <li><a href="#managers">Managers</a></li>
            </ul>
          </li>
          <li><a href="#policy">Policy</a></li>
          <li><a href="#problem">Problem</a></li>
         
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading">WELCOME TO<br>
        E-BANKING SYSTEM</h3>
      <p>E banking provides many advantages for banks and customer's .e-banking has made life much easier and banking much faster for both customers and banks. It provides banking throughout the year 24/7 days from any place have internet access.</p>

      <footer>
            <br>
           
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>

<div id="directors">
<div class="adjusting" style="background-image:url('images/demo/backgrounds/04.jpg');">
<div class="wrapper1">
        <h1 style="text-align:center; background-color:#212121; padding: 10px 10px 10px 10px;border-radius: 100px; border-bottom: 5px solid #a1e3ed; color:#a1e3ed ">Board of Directors</h1>
        <ul class="stage clearfix">

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster"></div>
              <div class="info">
                <header>
                  <h1 >Alexander</h1>
                </header>
                <p>
                  A board of directors is a group of people who jointly supervise the activities of an organization, which can be either a for-profit business, nonprofit organization, or a government agency. Such a board's powers, duties, and responsibilities are determined by government regulations (including the jurisdiction's corporations law) and the organization's own constitution and bylaws.
                </p>
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster"></div>
              <div class="info">
                <header>
                  <h1>Matthew</h1>
                </header>
                <p>
                  A board of directors is a group of people who jointly supervise the activities of an organization, which can be either a for-profit business, nonprofit organization, or a government agency. Such a board's powers, duties, and responsibilities are determined by government regulations (including the jurisdiction's corporations law) and the organization's own constitution and bylaws. 
                </p>
              </div>
            </div>
          </li>

          <li class="scene">
            <div class="movie" onclick="return true">
              <div class="poster"></div>
              <div class="info">
                <header>
                  <h1>Jackson</h1>
                </header>
                <p>
                  A board of directors is a group of people who jointly supervise the activities of an organization, which can be either a for-profit business, nonprofit organization, or a government agency. Such a board's powers, duties, and responsibilities are determined by government regulations (including the jurisdiction's corporations law) and the organization's own constitution and bylaws.
                </p>
              </div>
            </div>
          </li>

        </ul>
      </div><!-- /wrapper -->
  </div>
  </div>


<div id="policy">
<div class="wrapper row2 bgded overlay" style="background-image:url('images/demo/backgrounds/02.jpg');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading"> Monetary Policy</h6>
      <p>Lobortis erat at sodales libero malesuada vel curabitur maximus</p>
    </div>
    <ul class="nospace group overview">
      <li class="one_third">
        <article><a href="#"><i class="fa fa-headphones"></i></a>
          <h6 class="heading"><a href="#">About Monetary Policy</a></h6>
          <p>Monetary policy involves central banks’ use of instruments to influence interest rates and/or money supply in the economy with the objective to keep overall prices and financial markets stable.</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fa fa-asl-interpreting"></i></a>
          <h6 class="heading"><a href="#">Monetary Policy Framework in Pakistan</a></h6>
          <p>The preamble of the SBP Act, 1956 envisages these objectives as ‘whereas it is necessary to provide for the constitution of a State Bank to regulate the monetary and credit system of Pakistan</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fa fa-area-chart"></i></a>
          <h6 class="heading"><a href="#">Monetary Policy Decision Making in Pakistan</a></h6>
          <p>Monetary Policy Committee is responsible and fully empowered to decide the monetary policy stance</p>
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="fa fa-balance-scale"></i></a>
          <h6 class="heading"><a href="#">Monetary Policy Implementation in Pakistan</a></h6>
          <p>Implementation of the monetary policy stance, signaled through announcement of the policy rate, entails managing the day-to-day liquidity in the money market by SBP with the objective to keep the short-term interest rates stable and aligned with the policy rate.</p>
        </article>
      </li>
      <li class="one_third" >
        <article><a href="#"><i class="fa fa-comments-o"></i></a>
          <h6 class="heading"><a href="#"> Monetary Policy Communication in Pakistan</a></h6>
          <p>SBP issues Monetary Policy Statement and Decisions six times a year on its website. These documents provide analysis of current economic conditions and sets out the central bank policy rate</p>
        </article>
      </li>
    </ul>
  </section>
</div>
</div>
<div style="background-color:black; padding:20px;border:5px solid white;">	
	<a class=" btn" href="Transaction/transaction.php" style="margin-left:30%;">Transaction</a>
  	<a href="Transaction/transaction-History.php" class="open btn"  >Transaction History</a>
    <a href="Loan_Page/Loan.php" class="open btn">Apply loan</a>
    <a href="Loan_Page/Loan-History.php" class="open btn" >Loan History</a>

</div>   
<div id="managers">
<div class="wrapper row3" style="background-image:url('images/demo/backgrounds/04.jpg');">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <h1 style="text-align:center; background-color:#212121; padding: 10px 10px 10px 10px;border-radius: 100px; border-bottom: 5px solid #a1e3ed; color:#a1e3ed ">Managnment Team</h1>
    <h1></h1>
    <div class="group excerpt">
      <article class="one_third first"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x241.jpg" alt="" ></a>
        <h6 class="heading" style="text-align:center;">Loan Manager</h6>
        <p style="text-align:center;">Approve loans within specified limits, and refer loan applications outside those limits to management for approval.</p>
        
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x243.jpg" alt=""></a>
        <h6 class="heading" style="text-align:center;" >Manager Administration</h6>
        <p style="text-align:center;">Administrative assistants perform clerical duties and administrative tasks to support various types of organizations, and they are employed in offices in almost every business sector.</p>
       
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x242.jpg" alt=""></a>
        <h6 class="heading" style="text-align:center;">Accounts Managers</h6>
        <p style="text-align:center;">Account managers help grow businesses by managing individual accounts and building client relationships. </p>
        
      </article>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
</div>
<div id="problem">
<div class="wrapper row2 bgded overlay" style="background-image:url('images/demo/backgrounds/03.jpg');">
  <section class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Problem</h6>
      <p>If Problem tell us,If you satisfied tell others</p>
    </div>
    <form method="post" action="#">
      <fieldset>
        <input class="btmspace-15" type="text" value="" placeholder="Tell us you Problem">
        <button type="submit" value="submit" style="border-radius:10px;">Submit</button>
      </fieldset>
    </form>
    <!-- ################################################################################################ -->
  </section>
</div>
</div>

<div class="wrapper row4" style="background-image:url('images/demo/backgrounds/04.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="one_quarter first">
      <h6 class="heading" style="text-align:center;">Introduction</h6>
      <p>Online banking system was the first commercial bank to be established in Pakistan in 1947. Over the years, Online banking system has grown its branch network and maintained its position as the largest private sector bank with over 1,750 branches and 2,000 ATMs globally and a customer base exceeding eleven million relationships.</p>
    </article>
   <div class="one_quarter">
      <h6 class="heading" style="text-align:center;">Contact Details</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Fast University Phase 1 Industrial state Hayatabad,Peshawar
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +92 111-222-333</li>
        <li><i class="fa fa-envelope-o"></i> Onlinebanking.pk</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
   <div class="one_quarter">
      <h6 class="heading" style="text-align:center;">About us</h6>
      <ul class="nospace linklist"> 
        <li><a href="#">History</a></li>
        <li><a href="#">Board of Director</a></li>
        <li><a href="#">Management</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading" style="text-align:center;">SBP/SECP/Court Notices</h6>
      <ul class="nospace linklist">
        <li><a href="#">Bank Note Security</a></li>
        <li><a href="#">Bank Note Security Apps</a></li>
        <li><a href="#">Exchange Bank Notes</a></li>
        <li><a href="#">Foreign Exchange information</a></li>
      </ul>
    </div>
    
  </footer>
</div>



<div class="wrapper row5" style="background-color:#000000;">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2018 - MacKrugeri </p>
    <p class="fl_right">Website: www.macbanking.pk</p>
    
  </div>
</div>




<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>