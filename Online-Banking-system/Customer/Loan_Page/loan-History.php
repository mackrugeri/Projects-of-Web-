<?php 

	include "connect.php";
	session_start();
	$Accnum =$_SESSION['Account_number'];

	date_default_timezone_set('Australia/Melbourne');
	$date = date('m/d/Y ');
	// echo $date;

 ?>
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
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-left:5%;
}

#customers td, #customers th {
 
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr{background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #73c2c6;
  color: white;
}
.color-change{
	background-color: #7398c6;
}
</style>
<body style="background-image:url(background.png)">

<h1 style="text-align: center; font-size:40px; color:#a8e7ff; padding-top: 10px; padding-bottom:10px; border-radius:100px;margin-left:100px; margin-right:100px; margin-top:30px; border-bottom:5px solid #a8e7ff; background-color:black; font-size:30px;" >Loan History</h1>
 <div id="pageintro" class="hoc clear "> 
					</div>
					<div class="wrapper row3 " style="padding-top:0%;"> 
						<table id="customers">
						  <tr>	
						  		<th colspan="4" style="text-align:center;">	
						  				Auto loan
						  		</th>
						  </tr>
<?php  
$qry = "SELECT * FROM `autoloan` WHERE `Account_number` = ".$Accnum;
 	$res = $cont->query($qry);
 	$result = "";
 	if ($res->num_rows > 0) {
 		$result .=' 
						  <tr>
							    <th>Account Number</th>
							    <th>Type</th>
							    <th>Item Amount</th>
							    <th>Date</th>
						  </tr>';
		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["TypeOfAutoLoan"].'</td>
			    <td>'.$row["LoanAmount"].'</td>
			     <td>'.$date.'</td>
		  </tr>';
		}
		$result .= '</table>   
					</div>';
 	}
 	echo $result;
?>
<div class="wrapper row3 " style="padding-top:5%;"> 
					<table id="customers">
						  <tr>	
						  		<th colspan="4" style="text-align:center;">	
						  				Home Loan
						  		</th>
						  </tr>
<?php
 	$qry = "SELECT * FROM `homeloan` WHERE `Account_number` = ".$Accnum;
 	$res = $cont->query($qry);
 	$result = "";
 	if ($res->num_rows > 0) {
 		$result .='
						  <tr>
							     <th>Account Number</th>
							    <th>Type</th>
							    <th>Amount</th>
							    <th>Date</th>
						  </tr>';
		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["TypeOfHomeLoan"].'</td>
			    <td>'.$row["LoanAmount"].'</td>
			     <td>'.$date.'</td>
		  </tr>';
		}
		$result .= '</table>   
					</div>';
 	}
 	echo $result;
?>
<div class="wrapper row3 " style="padding-top:5%;"> 
					<table id="customers">
						  <tr>	
						  		<th colspan="4" style="text-align:center;">	
						  				Personal Loan
						  		</th>
						  </tr>
<?php
 	$qry = "SELECT * FROM `personalloan` WHERE `Account_number` = ".$Accnum;
 	$res = $cont->query($qry);
 	$result = "";
 	if ($res->num_rows > 0) {
 		$result .='
						  <tr>
							     <th>Account Number</th>>
							    <th>Amount</th>
							    <th>Date</th>
						  </tr>';
		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["LoanAmount"].'</td>
			     <td>'.$date.'</td>
		  </tr>';
		}
		$result .= '</table>   
					</div>';
 	}
 	echo $result;
?>
	<div class="wrapper row3 " style="padding-top:5%;"> 
					<table id="customers">
						  <tr>	
						  		<th colspan="4" style="text-align:center;">	
						  				Business Loan
						  		</th>
						  </tr>
<?php

 	$qry = "SELECT * FROM `businessloan` WHERE `Account_number` = ".$Accnum;
 	$res = $cont->query($qry);
 	$result = "";
 	if ($res->num_rows > 0) {
 		$result .='
						  <tr>
							     <th>Account Number</th>>
							    <th>Amount</th>
							    <th>Date</th>
						  </tr>';
		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["LoanAmount"].'</td>
			     <td>'.$date.'</td>
		  </tr>';
		}
		$result .= '</table>   
					</div>';
 	}
 	echo $result;
?>

	<div style="margin-bottom: 100px;"></div>
</div>


<!-- / Homepage specific -->
</body>
</html>