<?php
include "includes/db_inc.php";
if(isset($_GET['rConfirm']))
$conn = mysqli_connect("localhost","root", "", "hotel");
$id2 = $_GET['rConfirm'];
$confirm2 = "INSERT INTO checkin SELECT * FROM reserved where id = '$id2'";
$results2 = mysqli_query($data, $confirm2);

if($results2){
  
  $sql = "DELETE FROM reserved WHERE id = '$id2'";
  $delete = mysqli_query($data, $sql);

HEADER("Location: reserved.php");
}
?>

