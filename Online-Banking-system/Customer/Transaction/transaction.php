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

<h1 style="text-align: center; font-size:40px; color:#a8e7ff; padding-top: 10px; padding-bottom:10px; border-radius:100px;margin-left:100px; margin-right:100px; margin-top:30px; border-bottom:5px solid #a8e7ff; background-color:black; font-size:30px;" >Welcome to Transaction</h1>

  <div id="pageintro" class="hoc clear "> 
</div>
<div class="wrapper row3 " style="padding-top:15%;">
  <main class="hoc container clear"> 
    <section id="introblocks">
      <ul class="nospace group btmspace-80 elements elements-four">
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-hand-rock"></i></a>
            <h6 class="heading">Transfer Amount</h6>
            <p>Transfer money to you Friend or family click me..</p>
            <!-- <button class="bttn">Click me</button> -->
          </article>
          <button  onclick="document.getElementById('id01').style.display='block'" class="Ai1-tag">Apply Me</button>
           <div id="id01" class="modal">
      
	      <form class="modal-content animate" action="transactiondb.php"  method="Post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	          <input type="text" placeholder="Transfer Account" name="Tnumber" required>
	          <input type="text" placeholder="Amount" name="Amount" required>
	          <input class="bttn" type="submit" value="Apply" name = "Tran" >  
	        </div>
	      </form>
	    </div>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-dove"></i></a>
            <h6 class="heading">Withdraw amount</h6>
            <p>Having to much money in your account do some Transaction</p>
          </article>
          <button onclick="document.getElementById('id02').style.display='block'" class="Ai2-tag">Apply Me</button>
          <div id="id02" class="modal">
      
	      <form class="modal-content animate" action="transactiondb.php"  method="Post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	          <!-- <input type="text" placeholder="Account number" name="Anumber" required style="color:black;s"> -->
	          <!-- <input type="Password" placeholder="Password" name="pass" required> -->
	          <input type="text" placeholder="Amount" name="Amount" required>
	          <input class="bttn" type="submit" value="Apply" name = "Withdraw" >
	        </div>
	      </form>
	    </div>

        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-history"></i></a>
            <h6 class="heading">Deposit Money</h6>
            <p>Having low balance in you account. Add some</p>
          </article>
          <button onclick="document.getElementById('id03').style.display='block'" class="Ai3-tag">Apply Me</button>
          <div id="id03" class="modal">
      
	      <form class="modal-content animate" action="transactiondb.php" method="Post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	           <!-- <input type="text" placeholder="Account number" name="Anumber" required style="color:black;s"> -->
	          <!-- <input type="Password" placeholder="Password" name="pass" required> -->
	          <input type="text" placeholder="Amount" name="Amount" required>
	          <input class="bttn" type="submit" value="Apply" name = "Deposit" >
	        </div>
	      </form>
	    </div>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-heartbeat"></i></a>
            <h6 class="heading">Bill Paynment</h6>
            <p>wana need to pay Bill. Click me</p>
          </article>
          <button onclick="document.getElementById('id04').style.display='block'" class="Ai4-tag">Apply Me</button>
          <div id="id04" class="modal">
      
	      <form class="modal-content animate" action="transactiondb.php"  method="Post">
	        <div class="imgcontainer">
	          <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
	          <img src="images.jpg" alt="Avatar" class="avatar">
	        </div>

	        <div class="container">
	        <!-- <input type="text" placeholder="Account number" name="Anumber" required style="color:black;s"> -->
	          <!-- <input type="Password" placeholder="Password" name="pass" required> -->
	          <input type="text" placeholder="Ptcl Number" name="PNumber" required>
	          <input type="text" placeholder="Amount" name="Amount" required>
	          <input class="bttn" type="submit" value="Apply" name = "Bill" >
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