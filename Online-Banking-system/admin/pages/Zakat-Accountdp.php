<?php 
    include "connect.php";
    $Minimum = $_POST["Min"];
    $Per = $_POST["per"];
    echo "-----------------------------------------------------------------------------------------------------------------".$Per;
    if (isset($_POST["Apply"])) {
    $qry = "insert into zakat(Account_number, Total_amount, zakat_given)
        select Account_number,Amdeposit-(Amdeposit*".$Per."), (Amdeposit*".$Per.") from customer where amdeposit >".$Minimum;
    $res = $cont->query($qry);
    echo $qry;

    $qry =  "update customer
            set amdeposit = amdeposit - (amdeposit*".$Per.")
            where amdeposit >".$Minimum;
    echo $qry;
     $res = $cont->query($qry);
    } 
    header("Location:Zakat-Account.php")
 ?>