<!DOCTYPE html>
<html lang="">
<head>
<title>Chillaid</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layouting/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layouting/styles/login.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
</head>
<body style="background-image:url('background.png')">

<h1 style="text-align: center; font-size:40px; color:#a8e7ff; padding-top: 10px; padding-bottom:10px; border-radius:100px;margin-left:100px; margin-right:100px; margin-top:30px; border-bottom:5px solid #a8e7ff; background-color:black; font-size:30px;" >Welcome to Applying for Loan</h1>

  <div id="pageintro" class="hoc clear "> 
</div>
<div class="wrapper row3 " style="padding-top:15%;">
  <main class="hoc container clear"> 
    <section id="introblocks">
      <ul class="nospace group btmspace-80 elements elements-four">
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-hand-rock"></i></a>
            <h6 class="heading">Auto Loan</h6>
            <p>By Auto loan you will become owner of your own car</p>
            <!-- <button class="bttn">Click me</button> -->
          </article>
          <button onclick="document.getElementById('id01').style.display='block'" class="Ai1-tag">Apply Me</button>
           <div id="id01" class="modal">
      
	      <form class="modal-content animate" action="loandb.php" method="post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	          <!-- <label for="uname"><b>Username</b></label> -->
	          <!-- <label for="psw"><b>Password</b></label> -->
	          <select style="color:black;" placeholder="Enter type of Auto" name ="select">
	          		  <option class = "slect">Select</option>
					  <option value="Bike">MotorCycle</option>
					  <option value="HondaCity">Honda City</option>
					  <option value="HondaCivic">Honda Civic</option>
					  <option value="LandCruiser">Land cruiser</option>
			  </select>
	           <textarea id="subject" name="subject" placeholder="Pledge and Its amount" name="Pledge"></textarea>
	          <!-- <label>
	            <input type="checkbox" checked="checked" name="remember"> Remember me
	          </label> -->
	          <input class="bttn" type="submit" value = "AutoLoan" name = "AutoLoan">  
	        </div>
	      </form>
	    </div>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-dove"></i></a>
            <h6 class="heading">Home Finance</h6>
            <p>By Home Finance you will become owner of you  House</p>
          </article>
          <button onclick="document.getElementById('id02').style.display='block'" class="Ai2-tag">Apply Me</button>
          <div id="id02" class="modal">
      
	      <form class="modal-content animate" action="loandb.php" method="post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	          <!-- <label for="uname"><b>Username</b></label> -->

	          <!-- <label for="psw"><b>Password</b></label> -->
	          <select style="color:black;" placeholder="Enter type of Auto" name ="select">
	          		  <option class = "slect">Area of Hourse</option>
					  <option value="1kanal">1 Kanal</option>
					  <option value="20Marla">20 Marla</option>
					  <option value="10Marla">10 Marla</option>
					  <option value="5Marla">5 Marla</option>
			  </select>
	           <textarea id="subject" name="subject" placeholder="Pledge and Its amount" name="Pledge"></textarea>
	          <!-- <label>
	            <input type="checkbox" checked="checked" name="remember"> Remember me
	          </label> -->
	           <input class="bttn" type="submit" value = "HomeLoan" name = "HomeLoan">
	        </div>
	      </form>
	    </div>

        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-history"></i></a>
            <h6 class="heading">Personal loan</h6>
            <p>By Personal loan you will able to reduce your tension</p>
          </article>
          <button onclick="document.getElementById('id03').style.display='block'" class="Ai3-tag">Apply Me</button>
          <div id="id03" class="modal">
      
	      <form class="modal-content animate" action="loandb.php" method="post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	          <!-- <label for="uname"><b>Username</b></label> -->
	          <!-- <input type="text" placeholder="Account number" name="uname" required> -->

	          <!-- <label for="psw"><b>Password</b></label> -->
	          <!-- <input type="text" placeholder="Amount" name="psw" required> -->
	           <select style="color:black;" placeholder="Enter type of Auto" name ="select">
	          		  <option class = "slect">Amount</option>
					  <option value="50thousand">50000</option>
					  <option value="1lack">100000</option>
					  <option value="5lack">500000</option>
					  <option value="10lack">1000000</option>
			  </select>
	           <textarea id="subject" name="subject" placeholder="Pledge and Its amount" name="Pledge" ></textarea>
	          <!-- <label>
	            <input type="checkbox" checked="checked" name="remember"> Remember me
	          </label> -->
	           <input class="bttn" type="submit" value = "PersonalLoan" name = "PersonalLoan">
	        </div>
	      </form>
	    </div>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-heartbeat"></i></a>
            <h6 class="heading">Business Loan</h6>
            <p>By Credit loan you are able to do  Shopping from it</p>
          </article>
          <button onclick="document.getElementById('id04').style.display='block'" class="Ai4-tag">Apply Me</button>
          <div id="id04" class="modal">
      
	      <form class="modal-content animate" action="loandb.php" method="post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	          <!-- <label for="uname"><b>Username</b></label> -->
	          <!-- <input type="text" placeholder="Account number" name="uname" required> -->

	          <!-- <label for="psw"><b>Password</b></label> -->
	          <!-- <input type="text" placeholder="Amount" name="psw" required> -->
	           <select style="color:black;" placeholder="Enter type of Auto" name ="select">
	          		  <option class = "slect">Amount</option>
					  <option value="5lack">500000</option>
					  <option value="20lack">2000000</option>
					  <option value="50lack">5000000</option>
					  <option value="1Core">10000000</option>
			  </select>
	           <textarea id="subject" name="subject" placeholder="Pledge and Its amount" name="Address"></textarea>
	          <!-- <label>
	            <input type="checkbox" checked="checked" name="remember"> Remember me
	          </label> -->
	            <input class="bttn" type="submit" value = "BusinessLoan" name = "BusinessLoan">
	        </div>
	      </form>
	    </div>
        </li>
      </ul>
    </section>
</div>
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

// Get the modal
var modal2 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal2.style.display = "none";
    }
}
var modal3 = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal3.style.display = "none";
    }
}
</script>


<!-- / Homepage specific -->
</body>
</html>