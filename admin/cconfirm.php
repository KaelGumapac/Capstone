<?php
include "includes/db_inc.php";
if(isset($_GET['cconfirm']))
$conn = mysqli_connect("localhost","root", "", "hotel");
$id3 = $_GET['cconfirm'];
$confirm3 = "INSERT INTO records SELECT * FROM checkin where id = '$id3'";
$results3 = mysqli_query($data, $confirm3);

if($results3){
  $sql = "DELETE FROM checkin WHERE id = '$id3'";
  $delete = mysqli_query($data, $sql);

HEADER("Location: checkin.php");
}