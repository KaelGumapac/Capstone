<?php
session_start();
include "includes/db_inc.php";
if(isset($_GET['del']))
$conn = mysqli_connect("localhost","root", "", "hotel");
$id = $_GET['del'];
$del = "DELETE FROM roomsprice where id = '$id'";
$results = mysqli_query($data, $del);

if($results){
  $_SESSION['status'] = "DATA DELETED";
  $_SESSION['status_code'] = "error";
  header("Location: roomscategory.php");
}


?>








