<?php
session_start();
include "includes/db_inc.php";
if(isset($_GET['del']))
$conn = mysqli_connect("localhost","root", "", "hotel");
$id = $_GET['del'];
$del = "DELETE FROM check_in where guest_id = '$id'";
$results = mysqli_query($data, $del);

if($results){
  $guest_id = $_GET['del'];
  $user_log = $_SESSION['name'];
  date_default_timezone_set('Asia/Singapore');
  $time_stamp = date("d-M-Y / h:i:s A");
  $ip = $_SERVER['REMOTE_ADDR'];
  $info = " The guest ($guest_id) has been deleted by ($user_log)";
  $logs = "INSERT into activity_logs (time_stamp, ip_address, last_user, activity) VALUES ('$time_stamp' , '$ip' , '$user_log' , '$info')";
  $logs2 = mysqli_query($data, $logs);
  $_SESSION['status'] = "DATA DELETED";
  $_SESSION['status_code'] = "error";
  header("Location: checkin.php");
}


?>








