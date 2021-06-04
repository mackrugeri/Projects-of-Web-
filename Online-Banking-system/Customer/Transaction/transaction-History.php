<?php 

	include "connect.php";
	session_start();
	$Accnum =$_SESSION['Account_number'];

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

<h1 style="text-align: center; font-size:40px; color:#a8e7ff; padding-top: 10px; padding-bottom:10px; border-radius:100px;margin-left:100px; margin-right:100px; margin-top:30px; border-bottom:5px solid #a8e7ff; background-color:black; font-size:30px;" >Transaction History</h1>

  <div id="pageintro" class="hoc clear "> 
</div>

<?php 
	
	$qry = "SELECT * FROM transfer_amount WHERE `Account_number` = ".$Accnum;
	$res = $cont->query($qry);
	$result = "";
	if ($res->num_rows > 0)
	{
		$result.= '<div class="wrapper row3 " style="padding-top:0%;"> 
			<table id="customers">
			  <tr>	
			  		<th colspan="4" style="text-align:center;">	
			  				Tranfer Amount
			  		</th>
			  </tr>
			  <tr>
				    <th>Account Number</th>
				    <th>Transfer Amount</th>
				    <th>Amount</th>
				    <th>Date</th>
			  </tr>';

		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["Transfer_Account"].'</td>
			    <td>'.$row["Total_amount"].'</td>
			    <td>'.$row["Data"].'</td>
		  </tr>';
		}
		$result .='</table>   
		</div>';
		
	}
	echo $result;



 	$qry = "SELECT * FROM `withdraw_amount` WHERE `Account_number` = ".$Accnum;
 	$res = $cont->query($qry);
 	$result = "";
 	if ($res->num_rows > 0) {
 		$result .='<div class="wrapper row3 " style="padding-top:5%;"> 
					<table id="customers">
					  <tr>	
					  		<th colspan="4" style="text-align:center;">	
					  				Withdraw Amount
					  		</th>
					  </tr>
					  <tr>
						    <th>Account Number</th>
						    <th>Amount</th>
						    <th>Date</th>
					  </tr>';
		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["Total_amount"].'</td>
			    <td>'.$row["Data"].'</td>
		  </tr>';
		}
		$result .= '</table>   
					</div>';
 	}
 	echo $result;

 	$qry = "SELECT * FROM `deposit_amount` WHERE `Account_number` = ".$Accnum;
 	$res = $cont->query($qry);
 	$result = "";
 	if ($res->num_rows > 0) {
 		$result .='<div class="wrapper row3 " style="padding-top:5%;"> 
					<table id="customers">
					  <tr>	
					  		<th colspan="4" style="text-align:center;">	
					  				Deposit Amount
					  		</th>
					  </tr>
					  <tr>
						    <th>Account Number</th>
						    <th>Amount</th>
						    <th>Date</th>
					  </tr>';
		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["Total_amount"].'</td>
			    <td>'.$row["Data"].'</td>
		  </tr>';
		}
		$result .= '</table>   
					</div>';
 	}
 	echo $result;
 	$qry = "SELECT * FROM `ptcl_amount` WHERE `Account_number` = ".$Accnum;
 	$res = $cont->query($qry);
 	$result = "";
 	if ($res->num_rows > 0) {
 		$result .='<div class="wrapper row3 " style="padding-top:5%;"> 
					<table id="customers">
					  <tr>	
					  		<th colspan="4" style="text-align:center;">	
					  				Bill Paynment
					  		</th>
					  </tr>
					  <tr>
						    <th>Account Number</th>
						    <th>Amount</th>
						    <th>Phone Number </th>
						    <th>Date</th>
					  </tr>';
		while ($row= $res->fetch_assoc()) {
			$result .= '<tr>
			    <td>'.$Accnum.'</td>
			    <td>'.$row["Total_amount"].'</td>
			    <td>'.$row["Ptcl_number"].'</td>
			     <td>'.$row["Data"].'</td>
		  </tr>';
		}
		$result .= '</table>   
					</div>';
 	}
 	echo $result;
  ?>  

	<div style="margin-bottom: 100px;"></div>



<!-- / Homepage specific -->
</body>
</html>