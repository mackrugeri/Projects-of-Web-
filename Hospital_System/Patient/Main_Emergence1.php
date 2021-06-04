<?php
	include "connect.php";
	$Responsing = $_POST['Cp'];
	$Weakness = $_POST['Cp1'];
	$Facial = $_POST['Cp2'];
	$Arm = $_POST['Cp3'];
	$Speech = $_POST['Cp4'];
	$Blur = $_POST['Cp5'];
	$Lose = $_POST['Cp6'];
	$Headache = $_POST['Cp7'];

	$Summary = $Responsing."\n".$Weakness."\n".$Facial."\n".$Arm."\n".$Speech."\n".$Blur."\n".$Lose."\n".$Headache;

	
	$Disease = "Stroke";
	echo($Summary);
	$Need = "Availabilty Dotor One Bed ";
	$Medicine = " anticogualantes Issue Plasminogen activator ";
	$sql = "INSERT INTO summary (Summary, Need, Medicine,dissease) VALUES ('".$Summary."','".$Need."', '".$Medicine."','".$Disease."')";
	echo $sql;
	if($cont->query($sql)){
		echo "weryeoihdg";
	}
	else{
		echo "sdsfdsf";
	}
	header("Location:Emergence.php?Message=$msg");
?>