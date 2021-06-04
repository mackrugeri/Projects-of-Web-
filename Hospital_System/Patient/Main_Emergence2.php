<?php
	include "connect.php";
	$Responsing = $_POST['Cp'];
	$Weakness = $_POST['Cp1'];
	$Facial = $_POST['Cp2'];
	$Arm = $_POST['Cp3'];
	$Speech = $_POST['Cp4'];

	$Summary = $Responsing."\n".$Weakness."\n".$Facial."\n".$Arm."\n".$Speech;

	
	$Disease = "RTA/Fall";
	$Need = "Blood Painkillers Availabilty Dotor One Bed ";
	$Medicine = "Titanes Vaccine";
	// echo($Summary);
	

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