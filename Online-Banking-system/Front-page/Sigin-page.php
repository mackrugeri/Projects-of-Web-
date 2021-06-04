<?php 
  include "connect.php";

  session_start();

  $status = $_POST["Status"];
  $username = $_POST["uname"];
  $pswrd = $_POST["psw"];
  $_SESSION['Account_number'] = $username; 
  // echo "The Seesion is".$_session["Account_number"];
  if ($status == "Emp") {
     $qry = "SELECT `Emp-id`,`Password`, `Email` FROM `employee`";
     $res = $cont->query($qry);
      while ($row = $res->fetch_assoc()) {
          $usname = $row["Emp-id"];
          // echo $usname;
          if ($usname == $username) {
          		$psswrd = $row["Password"];
          		if ($pswrd == $psswrd) {
                // echo $pswrd;
          			echo "you are login Successfull";
          			header("Location:../admin/admin.php?Message=$msg");
          			
          		}
          		 else
		          {
		          	echo "<script type='text/javascript'>";
					echo "alert('Your Password is Wrong');";
					echo "</script>";
		          	header("Location:index.php?Message=$msg");
		          }
          }
          else
          {
			// header("Location:index.php?Message=$msg");
          	echo "<script type='text/javascript'>";
			echo "alert('Your Username is Wrong');";
			echo "</script>";
          }
      }
  }
  if ($status == "Cus") {
     $qry = "SELECT `Account_number`,`password`, `Email` FROM `customer`";
     $res = $cont->query($qry);
      while ($row = $res->fetch_assoc()) {
          $usname = $row["Account_number"];
          // echo $usname;
          if ($usname == $username) {
              $psswrd = $row["password"];
              // echo $psswrd;
              if ($pswrd == $psswrd) {
                echo "you are login Successfull";
                 echo "<script type='text/javascript'>";
              echo "alert('you are login Successfull');";
              echo "</script>";
                header("Location:../Customer/customer.php?Message=$msg");
                
              }
               else
              {
                echo "<script type='text/javascript'>";
              echo "alert('Your Password is Wrong');";
              echo "</script>";
                // header("Location:index.php?Message=$msg");
              }
          }
          else
          {
      // header("Location:index.php?Message=$msg");
            echo "<script type='text/javascript'>";
      echo "alert('Your Username is Wrong');";
      echo "</script>";
          }
      }
  }
  else{
	  	echo "<script type='text/javascript'>";
		echo "alert('You have chosen wrong Status');";
		echo "</script>";	
  }

 ?>
 