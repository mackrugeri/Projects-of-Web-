<!<!DOCTYPE html>
<html>
<head>
	<title>Emergence</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="login.css">

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
      <li class="keywords"><H2 class="Fornt_Change"><b>RTA/Fall</b></H2></li>
      <button class="bttn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Enter</button>
    </ul>
  </div>

   <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\doctor.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Burn</b></H2></li>
      <button class="bttn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Enter</button>
    </ul>
  </div>
  <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\Blood_Bank_Logo.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Stock</b></H2></li>
      <button class="bttn" onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Enter</button>
    </ul>
  </div>

  
  <br>
  <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\Inventory.jpg">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Malariea</b></H2></li>
       <button class="bttn" onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Enter</button>
    </ul>
  </div>
  <div class="pricing-item pricing-featured">
     <div ><img style="border-radius:100px; padding-top:10px;"width="200px" height="200px" src="Pictures\Administration.png">
    </div>
    <ul class="pricing-features">
      
      <li class="keywords"></li>
      <li class="keywords"><H2 class="Fornt_Change"><b>Typhoid</b></H2></li>
       <button class="bttn" onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Enter</button>
    </ul>
  </div>
</div>
   <div id="id01" class="modal">
      
      <form class="modal-content animate" action="Main_Emergence2.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div>
          <h1>Bleading</h1>       
          <label style="font-size:20px;">
             <select required name="Cp" style="">
              <option >Select on</option>
              <option  value="Patient Bleading..">yes</option>
              <option value="Patient not Bleading..">No </option>
            </select>
          </label>
          <br>
            <h1>Response</h1> 
                 
          <label style="font-size:20px;">
            <select required name="Cp1" style="">
              <option >Select on</option>
              <option  value="Patient Responding..">yes</option>
              <option value="Patient not Responding..">No </option>
            </select> 
          </label>
          <br>
            <h1>Fracture</h1>       
          <label style="font-size:20px;">
             <select required name="Cp2" style="">
              <option >Select on</option>
              <option  value="Patient Fracture..">yes</option>
              <option value="Patient not Fracture..">No </option>
            </select> 
          </label>
          <br>
            <h1>Dislocation</h1>       
          <label style="font-size:20px;">
            <select required name="Cp3" style="">
              <option >Select on</option>
              <option  value="Patient Dislocation..">yes</option>
              <option value="Patient not Dislocation..">No </option>
            </select> 
          </label>
          <br>
           <h1>Breathing Difficulty</h1>       
          <label style="font-size:20px;">
             <select required name="Cp4" style="">
              <option >Select on</option>
              <option  value="Patient has Breathing Difficulty..">yes</option>
              <option value="Patient has not Breathing Difficulty...">No </option>
            </select> 
          </label>
          <br>
            
          <button class="bttn" type="submit">Submit</button>
        </div>
      </form>
    </div>
    <div id="id02" class="modal">
      
      <form class="modal-content animate" action="Main_Emergence.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div>
          <!-- <label for="uname"><b>Username</b></label> -->
          <h1>Burn to</h1>       
          <label style="font-size:30px;">
             <select required name="Cp" style="">
              <option >Select on</option>
              <option  value="Hands">Hands</option>
              <option value="Face">Face </option>
              <option  value="Genitalia">Genitalia</option>
              <option  value="Perineium">Perineium</option>
              <option  value="Major Joints">Major Joints</option>
              <option  value="All">All</option>
            </select>
          </label>
          <br>
            <h1>Causes</h1>       
          <label style="font-size:30px;">
             <select required name="Cps" style="">
              <option >Select on</option>
              <option  value="Electric Shock">Electric Shock</option>
              <option value="Chemical Burn">Chemical Burn </option>
              <option  value="Inhalational Injury">Inhalational Injury</option>
              <option  value="Fire">Fire</option>
            </select>
          </label>
          <br>
            
          <button class="bttn" type="submit">Submit</button>
        </div>
      </form>
    </div>
    <div id="id03" class="modal">
      
      <form class="modal-content animate" action="Main_Emergence1.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div>
          <!-- <label for="uname"><b>Username</b></label> -->
          <h1>Response</h1>       
          <label style="font-size:20px;">
             <select required name="Cp" style="">
              <option >Select on</option>
              <option  value="Patient Responsing..">yes</option>
              <option value="Patient not Responsing..">No </option>
            </select>
          </label>
          <br>
            <h1>Sudden Body Weakness</h1>       
          <label style="font-size:20px;">
             <select required name="Cp1" style="">
              <option >Select on</option>
              <option  value="Sudden Body Weakness..">yes</option>
              <option value="No SuddenBody Weakness..">No </option>
            </select>
          </label>
          <br>
            <h1>Facial Weakness</h1>       
          <label style="font-size:20px;">
             <select required name="Cp2" style="">
              <option >Select on</option>
              <option  value="Facial Weakness..">yes</option>
              <option value="No Facial Weakness..">No </option>
            </select>
          </label>
          <br>
            <h1>Arm Weakness</h1>       
          <label style="font-size:20px;">
             <select required name="Cp3" style="">
              <option >Select on</option>
              <option  value="Arm Weakness..">yes</option>
              <option value="No Arm weakness..">No </option>
            </select>
          </label>
          <br>
           <h1>Speech Difficulty</h1>       
          <label style="font-size:20px;">
             <select required name="Cp4" style="">
              <option >Select on</option>
              <option  value="Speech Difficulty..">yes</option>
              <option value="No Speech Difficulty..">No </option>
            </select>
          </label>
          <br>
           <h1>Blur Vision</h1>       
          <label style="font-size:20px;">
             <select required name="Cp5" style="">
              <option >Select on</option>
              <option  value="Blur Vision..">yes</option>
              <option value="No Blur Vision..">No </option>
            </select>
          </label>
          <br>
          <h1>Lose of Balance</h1>       
          <label style="font-size:20px;">
             <select required name="Cp6" style="">
              <option >Select on</option>
              <option  value="Lose of Balance..">yes</option>
              <option value="No Lose of Balance..">No </option>
            </select>
          </label>
          <br>
          <h1> Headache</h1>       
          <label style="font-size:20px;">
             <select required name="Cp7" style="">
              <option >Select on</option>
              <option  value="Headache..">yes</option>
              <option value="No Headache..">No </option>
            </select>

          </label>
          <br>
           
          <button class="bttn" type="submit">Submit</button>
        </div>
      </form>
    </div>
    <div id="id04" class="modal">
      
      <form class="modal-content animate" action="main_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div>
          <!-- <label for="uname"><b>Username</b></label> -->
          <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
           <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            
          <button class="bttn" type="submit">Submit</button>
        </div>
      </form>
    </div>
    <div id="id05" class="modal">
      
      <form class="modal-content animate" action="main_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div>
          <!-- <label for="uname"><b>Username</b></label> -->
          <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
           <h1>Bleading</h1>       
          <label style="font-size:20px;">
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> yes
            <input type="checkbox"  name="remember" style="width:20px; height: 20px;"> No
          </label>
          <br>
            
          <button class="bttn" type="submit">Submit</button>
        </div>
      </form>
    </div>
<footer style="background-color:gray; color:white; padding:5px;">
	<h6 style="padding-bottom:10px; font-size:15px;" >Copyright © Lezareto</h6>
</footer>

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
var modal1 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
var modal1 = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
var modal1 = document.getElementById('id05');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>