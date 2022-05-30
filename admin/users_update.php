
<?php
//insert.php  
session_start();
$connect = mysqli_connect("localhost", "root", "", "hotel");
if(isset($_POST['update']))
{ 
    $id = $_POST['id'];
    $name =  $_POST["name"];  
    $username = $_POST["username"];  
    $usertype = $_POST["room"];
    $default = md5($_POST['default']);

    $query2 = "
    UPDATE users SET username = '$username', name = '$name' , password = '$default', usertype = '$usertype'  WHERE id = '$id'
    ";
    $result = mysqli_query($connect, $query2);
}
    if($result)
    {
        $_SESSION['status'] = "SUCCESFULLY UPDATED";
        $_SESSION['status_code'] = "success";
        header("Location: users.php");


    }

    
    ?>

    

    