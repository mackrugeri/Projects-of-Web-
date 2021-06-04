<?php 
	include "connect.php";
	session_start();
	if (isset($_POST["Tran"])) {
		$Accnum =$_SESSION['Account_number'];
		$qry1  = "SELECT  `Email` FROM `customer` WHERE Account_number = ".$Accnum;
		echo $qry1;
		$res1 = $res = $cont->query($qry1);
		while ($row = $res->fetch_assoc()) {
			$Emailing = $row["Email"];
		}

		$Tran_num =$_POST["Tnumber"];
		$amount = $_POST["Amount"];
      	$qry = "SELECT `Amdeposit` FROM `customer` WHERE Account_number =".$Tran_num;
    	$res = $cont->query($qry);
    		if($res->fetch_assoc() > 0){
    				// echo "Hello World";
    				$qry = "SELECT * FROM `customer` WHERE Account_number =".$Accnum;
    				echo $qry;
    				echo "\n";
    				$res = $cont->query($qry);
    				while ($row = $res->fetch_assoc()) {
	          			$Accnum1 = $row["Amdeposit"];

	              		if ($Accnum1 >= $amount) {
	              			$qry = "INSERT INTO `transfer_amount`( `Account_number`, `Transfer_Account`, `Total_amount`, `Data`) VALUES (".$Accnum.",".$Tran_num.",".$amount.",'2019-5-16')";
	              			echo $qry;
							$res  = $cont->query($qry);
							require 'PHPMailer/PHPMailerAutoload.php';
							require 'credential.php';

							$mail = new PHPMailer;

					// $mail->SMTPDebug = 4;                               // Enable verbose debug output

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = EMAIL;                 // SMTP username
							$mail->Password = PASS;                           // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							$mail->Port = 587;                                    // TCP port to connect to

							$mail->setFrom(EMAIL,'Transfer Amount');
							$mail->addAddress($Emailing);     // Add a recipient

							$mail->addReplyTo(EMAIL);
							// print_r($_FILES['file']); exit;
							for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
								$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
							}
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = "Transfer Amount";						// Email Subject must be Written in it
							$mail->Body    = 'You have successfully Tranfer Amount  on Mac E-banking system';						// Mesasge must be written in it 
							$mail->AltBody = "mackrugeri";

							if(!$mail->send()) {
							    echo 'Message could not be sent.';
							    echo 'Mailer Error: ' . $mail->ErrorInfo;
							    echo "<script type='text/javascript'>";
								echo "alert('Your Email is Wrong');";
								echo "</script>";
								
							    
							} 
							else {
							    echo 'Message has been sent';
								header("Location:transaction-History.php?Message=$msg");
							}
		     		 }
		            else
		              	{
		              		echo "<script type='text/javascript'>";
					        echo "alert('Less Amount in You Account');";
					        echo "</script>";
					        header("Location:transaction.php?Message=$msg");
		              		}
	            	}
	            }
	            else
		            {
		              	echo "<script type='text/javascript'>";
					    echo "alert('Wrong Transfer Amount Number');";
					    echo "</script>";
				    	header("Location:transaction.php?Message=$msg");
	            }
	}
	if (isset($_POST["Withdraw"])) {
		$Accnum =$_SESSION['Account_number'];
		$amount = $_POST["Amount"];
		$qry = "INSERT INTO `withdraw_amount`(`Account_number`, `Total_amount`, `Data`) VALUES (".$Accnum.",".$amount.",'2019-5-16')";
		$res = $cont->query($qry);
		$qry1  = "SELECT  `Email` FROM `customer` WHERE Account_number = ".$Accnum;
		echo $qry1;
		$res1 = $res = $cont->query($qry1);
		while ($row = $res->fetch_assoc()) {
			$Emailing = $row["Email"];
		}
		require 'PHPMailer/PHPMailerAutoload.php';
							require 'credential.php';

							$mail = new PHPMailer;

					// $mail->SMTPDebug = 4;                               // Enable verbose debug output

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = EMAIL;                 // SMTP username
							$mail->Password = PASS;                           // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							$mail->Port = 587;                                    // TCP port to connect to

							$mail->setFrom(EMAIL, 'Withdraw Amount');
							$mail->addAddress($Emailing);     // Add a recipient

							$mail->addReplyTo(EMAIL);
							// print_r($_FILES['file']); exit;
							for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
								$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
							}
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = "Withdraw Amount";						// Email Subject must be Written in it
							$mail->Body    = 'You have successfully Withdraw Amount  on Mac E-banking system';						// Mesasge must be written in it 
							$mail->AltBody = "mackrugeri";

							if(!$mail->send()) {
							    echo 'Message could not be sent.';
							    echo 'Mailer Error: ' . $mail->ErrorInfo;
							    echo "<script type='text/javascript'>";
								echo "alert('Your Email is Wrong');";
								echo "</script>";
								
							    
							} 
							else {
							    echo 'Message has been sent';
								header("Location:transaction-History.php?Message=$msg");
							}

		// header("Location:transaction-History.php?Message=$msg");
	}
	if (isset($_POST["Deposit"])) {
		$Accnum =$_SESSION['Account_number'];
		echo $Accnum;
		$amount = $_POST["Amount"];
		$qry = "INSERT INTO `deposit_amount`(`Account_number`, `Total_amount`, `Data`) VALUES (".$Accnum.",".$amount.",'2019-5-16')";
		$res = $cont->query($qry);
		$qry1  = "SELECT  `Email` FROM `customer` WHERE Account_number = ".$Accnum;
		echo $qry1;
		$res1 = $res = $cont->query($qry1);
		while ($row = $res->fetch_assoc()) {
			$Emailing = $row["Email"];
		}
		require 'PHPMailer/PHPMailerAutoload.php';
							require 'credential.php';

							$mail = new PHPMailer;

					// $mail->SMTPDebug = 4;                               // Enable verbose debug output

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = EMAIL;                 // SMTP username
							$mail->Password = PASS;                           // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							$mail->Port = 587;                                    // TCP port to connect to

							$mail->setFrom(EMAIL, 'Deposit Amount');
							$mail->addAddress($Emailing);     // Add a recipient

							$mail->addReplyTo(EMAIL);
							// print_r($_FILES['file']); exit;
							for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
								$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
							}
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = "Deposit Amount";						// Email Subject must be Written in it
							$mail->Body    = 'You have successfully Deposit Amount  on Mac E-banking system';						// Mesasge must be written in it 
							$mail->AltBody = "mackrugeri";

							if(!$mail->send()) {
							    echo 'Message could not be sent.';
							    echo 'Mailer Error: ' . $mail->ErrorInfo;
							    echo "<script type='text/javascript'>";
								echo "alert('Your Email is Wrong');";
								echo "</script>";
								
							    
							} 
							else {
							    echo 'Message has been sent';
								header("Location:transaction-History.php?Message=$msg");
							}
		// header("Location:transaction-History.php?Message=$msg");
	}
	if (isset($_POST["Bill"])) {
		$amount = $_POST["Amount"];
		$phone = $_POST["PNumber"];
		$Accnum =$_SESSION['Account_number'];
		$qry = "INSERT INTO `ptcl_amount`(`Account_number`, `Ptcl_number`, `Total_amount`, `Data`) VALUES(".$Accnum.",".$phone.",".$amount.",'2019-5-16')";
		echo $qry;
		$res = $cont->query($qry);
		$qry1  = "SELECT  `Email` FROM `customer` WHERE Account_number = ".$Accnum;
		echo $qry1;
		$res1 = $res = $cont->query($qry1);
		while ($row = $res->fetch_assoc()) {
			$Emailing = $row["Email"];
		}
		require 'PHPMailer/PHPMailerAutoload.php';
							require 'credential.php';

							$mail = new PHPMailer;

					// $mail->SMTPDebug = 4;                               // Enable verbose debug output

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = EMAIL;                 // SMTP username
							$mail->Password = PASS;                           // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
							$mail->Port = 587;                                    // TCP port to connect to

							$mail->setFrom(EMAIL, 'Bill Paynment');
							$mail->addAddress($Emailing);     // Add a recipient

							$mail->addReplyTo(EMAIL);
							// print_r($_FILES['file']); exit;
							for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
								$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
							}
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = "Bill Paynment";						// Email Subject must be Written in it
							$mail->Body    = 'You have successfully Paid Bill from Amount  on Mac E-banking system';						// Mesasge must be written in it 
							$mail->AltBody = "mackrugeri";

							if(!$mail->send()) {
							    echo 'Message could not be sent.';
							    echo 'Mailer Error: ' . $mail->ErrorInfo;
							    echo "<script type='text/javascript'>";
								echo "alert('Your Email is Wrong');";
								echo "</script>";
								
							    
							} 
							else {
							    echo 'Message has been sent';
								header("Location:transaction-History.php?Message=$msg");
							}
		// header("Location:transaction-History.php?Message=$msg");
	}
 ?>