<?php
 if(isset($_POST["numad"],$_POST["numch"],$_POST["numamo"]))
 {
   $adultnum = $_POST["numad"];
   $childnum = $_POST["numch"];
   $amountnum = $_POST["numamo"];

   $addtotal = $adultnum + $childnum * $amountnum;
   echo json_encode($addtotal);
 }

?>