<?php 
	include "connect.php";
	session_start();
	$Accountype = $_POST["Acctype"];
	$Name = $_POST["Nme"];
	$fthname = $_POST["FthNme"];
	$email	= $_POST["Emailing"];
	$cnic	= $_POST["CNIC"];
	$phoneNo =$_POST["Pnumber"];
	$DepositAmount =$_POST["Depamount"];
	$Password =$_POST["Password"];
	$Add=$_POST["Address"];

	$_Session["Account-number"] = $Accountype;

	
			    echo 'Message has been sent';
			    $qry ="INSERT INTO `customer`( `Account_type`, `Name`, `Fname`, `Email`, `Cnic`, `Phnumber`, `Amdeposit`, `Address`, `password`)VALUES ('".$Accountype."','".$Name."','".$fthname."','".$email."','".$cnic."','".$phoneNo."',".$DepositAmount.",'".$Add."','".$Password."')";
				$cont->query($qry);
				$_Session["Name"] = $Name;
				$_Session["Email"] = $email;
				echo $qry;
				$msg = $Name;
			    header("Location:index.php?Message=$msg");
 ?>