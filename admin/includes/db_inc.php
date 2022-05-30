<?php
$host="localhost";
$user="root";
$password="";
$db="hotel";

$data = mysqli_connect($host,$user,$password,$db);

if(!$data){
  die("Could not conenct to mysql" . mysqli_connect_error());
}