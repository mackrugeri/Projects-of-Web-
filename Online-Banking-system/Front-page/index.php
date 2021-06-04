<?php
    include "connect.php"; 
    if($_GET["Message"])
    {
      $qry = "SELECT `Account_number`,`Email` FROM `customer` WHERE Name = '".$_GET["Message"]."'";
        $connt = $cont->query($qry);
        while ($row = $connt->fetch_assoc()) {
            $accnum = $row["Account_number"];
            $email = $row["Email"];
            require 'PHPMailer/PHPMailerAutoload.php';
          require 'credential.php';

          $mail = new PHPMailer;

          // $mail->SMTPDebug = 4;                               // Enable verbose debug output

          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = EMAIL;                 // SMTP username
          $mail->Password = PASS;                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

          $mail->setFrom(EMAIL, 'Mac Banking');
          $mail->addAddress($email);     // Add a recipient

          $mail->addReplyTo(EMAIL);
          // print_r($_FILES['file']); exit;
          for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
            $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
          }
          $mail->isHTML(true);                                  // Set email format to HTML

          $mail->Subject = "Account Number";            // Email Subject must be Written in it
          $mail->Body    = 'You account number is'.$accnum;           // Mesasge must be written in it 
          $mail->AltBody = "mackrugeri";

          if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          } else {
              echo 'Message has been sent';
              header("Location:index.php");
          }
    }
  }

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
  <header class="v-header container">
    <div class="fullscreen-video-wrap">
     <video autoplay muted loop id="myVideo">
        <source src="rain.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
       <div class="wrap">
  </div>
          <h1 class="control">Welcome To Mac E-Banking System</h1>
          <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id temporibus perferendis necessitatibus numquam amet impedit explicabo? Debitis quasi ullam aperiam!</p>
    <!--  <a class="btn">Sign in</a>
          <a class="btn">Sign up</a> -->
          <button class="bttn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
          
          <!-- <button class="btn ">sign up</button> -->

    <div id="id01" class="modal">
      
      <form class="modal-content animate" action="Sigin-page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        	  <select style="color:black;" name = "Status">
  	          <option value = "state">Status</option>
  					  <option value="Emp">Employee</option>
  					  <option value="Cus">Customer</option>
			  </select>
          <!-- <label for="uname"><b>Username</b></label> -->
          <input type="text" placeholder="Enter Username" name="uname" required>

          <!-- <label for="psw"><b>Password</b></label> -->
          <input type="password" placeholder="Enter Password" name="psw" required>
          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
            
          <button class="bttn" type="submit">Login</button>
        </div>
      </form>
    </div>
        <button class="bttn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign up</button>

    <div id="id02" class="modal">
      
      <form class="modal-contenting animate" action="Signup.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
    <select style="color:black;" name = "Acctype">
      		  <option class = "slect">Account type</option>
			  <option value="Default Account">Default Account</option>
			  <option value="Saving Account">Saving Account</option>
			  <option value="Current Account">Current Account</option>
	  </select>
          <input type="text" placeholder="Enter your Name" name="Nme" required>
          <input type="text" placeholder="Enter Father Name" name="FthNme" required>
          <input type="text" placeholder="Enter Email Address" name="Emailing" required>
          <input type="text" placeholder="Enter CNIC" name="CNIC" required>
          <input type="text" placeholder="Enter Phone Number" name="Pnumber" required>
          <input type="text" placeholder="Deposit Amount" name="Depamount" required>
          <input type="Password" placeholder="Password" name="Password" required>
          <input type="text" name="Address" placeholder="Address">
          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
            
          <button class="bttn" type="submit">Login</button>
        </div>

          <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"></button> -->
      </form>
    </div>
    </div>
  </header>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
