<!<!DOCTYPE html>
<html>
<head>
	<title>Patient Main Page</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>


.topnav {
  overflow: hidden;
  background-color: #165589;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #aad8ff;
  color: black;
}

.topnav a.active {
  background-color: #70adac;
  color: white;
}
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.btn{
	margin-top:20px;
	padding:10px;
	padding-left:50px;
	padding-right:50px;
	margin-bottom:10px;
	margin-right:100%;
}
.bttn{
  margin-top:20px;
  padding-left:50px;
  padding-right:50px;
  padding-top:10px;
  padding-bottom:10px;
  margin-bottom:10px;
  color:white;
  background-color:blue;
  border:0px;
}
.Fornt_Change{
  font-family: Arial, Helvetica, sans-serif;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body style="background-color:#000;">

<div class="topnav">
  <div class="dropdown" style="padding-left:1770px;">
  <button class="dropbtn">Ahsan Chughtai</button>
  <div class="dropdown-content">
    <a href="#">Balance</a>
    <a href="#">Profile</a>
  </div>
</div>
</div>
<link rel="stylesheet" type="text/css" href="pricetag.css">
<div class="pricing-table">
  
  <div class="pricing-table pricing-item">

    <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\ipd_center.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Emergence</b></H2></li>
      <a class="bttn" type="button" style="width:auto;" href="Emergence.php">Enter</a>
    </ul>
  </div>

   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\doctor.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Online Doctor</b></H2></li>
     <a class="bttn" type="button" style="width:auto;" href="OnlineDoctor.html">Enter</a>
    </ul>
  </div>
  <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\Blood_Bank_Logo.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Blood Bank</b></H2></li>
      <a class="bttn" type="button" style="width:auto;" href="bloodbank.html">Enter</a>
    </ul>
  </div>

  
  <br>
  <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\Inventory.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Laboratory</b></H2></li>
      <a class="bttn" type="button" style="width:auto;" href="Lab.html">Enter</a>
    </ul>
  </div>
  <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\Administration.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Phamacy</b></H2></li>
      <a class="bttn" type="button" style="width:auto;" href="Medinces.html">Enter</a>
    </ul>
  </div>

<footer style="background-color:gray; color:white; padding:5px;">
	<h6 style="padding-bottom:10px; font-size:15px;" >Copyright © Lezareto</h6>
</footer>
</body>
</html>