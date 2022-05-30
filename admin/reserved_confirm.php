<?php
session_start();
include "includes/db_inc.php";
if(isset($_GET['confirm']))
$conn = mysqli_connect("localhost","root", "", "hotel");
$id = $_GET['confirm'];
$confirm = "INSERT INTO check_in SELECT * FROM reserved where guest_id = '$id'";
$results1 = mysqli_query($data, $confirm);

if($results1){
  $sql = "DELETE FROM reserved WHERE guest_id = '$id'";
  $delete = mysqli_query($data, $sql);
  $guest_id = $_GET['confirm'];
  $user_log = $_SESSION['name'];
  date_default_timezone_set('Asia/Singapore');
  $time_stamp = date("d-M-Y / h:i:s A");
  $ip = $_SERVER['REMOTE_ADDR'];
  $info = " The guest ($guest_id) goes to check_in by ($user_log)";
  $logs = "INSERT into activity_logs (time_stamp, ip_address, last_user, activity) VALUES ('$time_stamp' , '$ip' , '$user_log' , '$info')";
  $logs2 = mysqli_query($data, $logs);
 $_SESSION['status'] = "SUCCESFULLY CHECK-IN";
 $_SESSION['status_code'] = "success";
 header("location: reserved.php");
}
?>





