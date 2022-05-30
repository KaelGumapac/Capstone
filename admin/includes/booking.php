<?php
include 'db_inc.php';
$sql = "SELECT * FROM booking";
      $numbers = mysqli_query($data, $sql);
      $count = mysqli_num_rows($numbers);

// reserved  
      $sql = "SELECT * FROM reserved";
      $reserved = mysqli_query($data, $sql);
      $reserved_count = mysqli_num_rows($reserved);

// checkin
      $sql = "SELECT * FROM check_in";
      $check_in = mysqli_query($data, $sql);
      $checkin_count = mysqli_num_rows($check_in);

//records
      $sql = "SELECT * FROM records";
      $records = mysqli_query($data, $sql);
      $records_count = mysqli_num_rows($records);


// Availability of Rooms Category

     

    


   


      