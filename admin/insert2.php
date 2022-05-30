
<?php
//insert.php  
session_start();
$connect = mysqli_connect("localhost", "root", "", "hotel");
if(isset($_POST['update']))
{ 
    $guest_id = $_POST['guest_id'];
    $id = $_POST['id'];
    $email = $_POST["email"];  
    $phone =  $_POST["phone"];  
    $kasama = $_POST["kasama"];
    $room = $_POST["room"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $pick_up = $_POST["pick_up"];
    $message = $_POST["message"];
    $query2 = "
    UPDATE booking SET  email = '$email' , phone = '$phone', kasama = '$kasama' , room = '$room' 
    , check_in = '$check_in' , check_out = '$check_out' , pick_up = '$pick_up' , message = '$message' WHERE id = '$id'
    ";
    $result = mysqli_query($connect, $query2);
}
    if($result)
    {
        $user_log = $_SESSION['name'];
        date_default_timezone_set('Asia/Singapore');
        $time_stamp = date("d-M-Y / h:i:s A");
        $ip = $_SERVER['REMOTE_ADDR'];
        $info = " The guest ($guest_id) has been updated by ($user_log)";
        $logs = "INSERT into activity_logs (time_stamp, ip_address, last_user, activity) VALUES ('$time_stamp' , '$ip' , '$user_log' , '$info')";
        $logs2 = mysqli_query($connect, $logs);
        $_SESSION['status'] = "SUCCESFULLY UPDATED";
        $_SESSION['status_code'] = "success";
        header("Location: home.php");
        
    }

    
    ?>

    

    