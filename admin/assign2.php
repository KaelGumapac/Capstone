<?php

include 'includes/db_inc.php';
session_start();
if(isset($_POST['room_number']))
{   
    $id = $_POST['id'];
	$room_number = $_POST['room'];

	$sql =  "UPDATE booking SET room_number = '$room_number' WHERE id = '$id'
    ";
	$sql2 = mysqli_query($data, $sql);

    if($sql2)
    {
        $insert = "INSERT into reserved SELECT * FROM booking where id = $id";
        $insert2 = mysqli_query($data, $insert);
        
        if($insert2)
        {
        $guest_id = $_POST['guest_id'];
        $user_log = $_SESSION['name'];
        date_default_timezone_set('Asia/Singapore');
        $time_stamp = date("d-M-Y / h:i:s A");
        $ip = $_SERVER['REMOTE_ADDR'];
        $info = " The guest ($guest_id) has been assigned to ($room_number) and goes to reserved by ($user_log)";
        $logs = "INSERT into activity_logs (time_stamp, ip_address, last_user, activity) VALUES ('$time_stamp' , '$ip' , '$user_log' , '$info')";
        $logs2 = mysqli_query($data, $logs);
            if($logs2)
            {   
                $delete = "DELETE from booking where id = $id";
                $delete2 = mysqli_query($data, $delete);
                $_SESSION['status'] = "Assigned Room and succesfully reserved!";
                $_SESSION['status_code'] = "success"; 
                header("Location: home.php");
            }
        }
    }
}

?>