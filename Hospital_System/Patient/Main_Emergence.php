<?php
	include "connect.php";
	$Burn_to = $_POST['Cp'];
	 	$Burn_on = "Patient has ";
		$Burn_on .= $Burn_to;
		$Burn_on .= " Burn";
 

	$Causes = $_POST['Cps'];
	$Causes_with = " And Cause of the Burn is ";
	$Causes_with .= $Causes;


	$Summary = $Burn_on." ".$Causes_with;
	$Disease = "Stock";
	$Need = " Availabilty Dotor One Bed  Mangement of Burn pain ";
	$Medicine = "Iv Burn Fluid";
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