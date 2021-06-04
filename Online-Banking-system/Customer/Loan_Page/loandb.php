<?php 
	include "connect.php";
	session_start();
	$acount_number =$_SESSION['Account_number'];
	$amount =0;
	$qry = "SELECT  `Amdeposit` FROM `customer` WHERE Account_number = ".$acount_number;
	$res = $cont->query($qry);
	while($row = $res->fetch_assoc())
		{
			$amount = $row["Amdeposit"];
		}
	if(isset($_POST["AutoLoan"]))
	{
		
		$loantype = $_POST["AutoLoan"];
		$item = $_POST["select"];
		$qry = "SELECT `amount`FROM `loan` WHERE productType = '".$item."'";
		$res = $cont->query($qry);
		while($row = $res->fetch_assoc())
		{
			$item_amount = $row["amount"];
			$qry = "INSERT INTO `loanapproval`( `Account_number`, `TypeOfLoanAccount`, `Loantype`, `LoanAmount`, `AmountInBank`) VALUES (".$acount_number.",'".$loantype."','".$item."',".$item_amount.",".$amount.")";
			echo $qry;
			$res = $cont->query($qry);
			header("Location:loan-History.php?Message=$msg");
		}
	}
	if(isset($_POST["HomeLoan"]))
	{
		$loantype = $_POST["HomeLoan"];
		$item = $_POST["select"];
		$qry = "SELECT `amount`FROM `loan` WHERE productType = '".$item."'";
		$res = $cont->query($qry);
		while($row = $res->fetch_assoc())
		{
			$item_amount = $row["amount"];
			$qry = "INSERT INTO `loanapproval`( `Account_number`, `TypeOfLoanAccount`, `Loantype`, `LoanAmount`, `AmountInBank`) VALUES (".$acount_number.",'".$loantype."','".$item."',".$item_amount.",".$amount.")";
			echo $qry;
			$res = $cont->query($qry);
			header("Location:loan-History.php?Message=$msg");
		}
	}
	if(isset($_POST["PersonalLoan"]))
	{
		$loantype = $_POST["PersonalLoan"];
		$item = $_POST["select"];
		$qry = "SELECT `amount`FROM `loan` WHERE productType = '".$item."'";
		$res = $cont->query($qry);
		while($row = $res->fetch_assoc())
		{
			$item_amount = $row["amount"];
			$qry = "INSERT INTO `loanapproval`( `Account_number`, `TypeOfLoanAccount`, `Loantype`, `LoanAmount`, `AmountInBank`) VALUES (".$acount_number.",'".$loantype."','".$item."',".$item_amount.",".$amount.")";
			echo $qry;
			$res = $cont->query($qry);
			header("Location:loan-History.php?Message=$msg");
		}
	}
	if(isset($_POST["BusinessLoan"]))
	{
		$loantype = $_POST["BusinessLoan"];
		$item = $_POST["select"];
		echo $loantype;
		$qry = "SELECT `amount`FROM `loan` WHERE productType = '".$item."'";
		$res = $cont->query($qry);
		while($row = $res->fetch_assoc())
		{
			$item_amount = $row["amount"];
			$qry = "INSERT INTO `loanapproval`( `Account_number`, `TypeOfLoanAccount`, `Loantype`, `LoanAmount`, `AmountInBank`) VALUES (".$acount_number.",'".$loantype."','".$item."',".$item_amount.",".$amount.")";
			echo $qry;
			$res = $cont->query($qry);
			header("Location:loan-History.php?Message=$msg");
		}
	}
 ?>