
<?php
//insert.php  
session_start();
$connect = mysqli_connect("localhost", "root", "", "hotel");
if(isset($_POST['update']))
{ 
    $id = $_POST['id'];
    $name =  $_POST["name"];  
    $username = $_POST["username"];  
    $password = 1234;
    $password2 =  md5($password); 
    $usertype = $_POST["usertype"];
   
    $duplicate = mysqli_query($connect ,"select * from users where username='$username'");

    if (mysqli_num_rows($duplicate)>0)
    {
        $_SESSION['status'] = "Username already taken!!";
        $_SESSION['status_code'] = "info";
        header("Location: users.php"); 
    }
    elseif($usertype == "")
    {
        $_SESSION['status'] = "Please select what type of user";
        $_SESSION['status_code'] = "info";
        header("Location: users.php"); 
    }
    else
    {
        $query2 = "INSERT INTO users(name, username, password, usertype)  
        VALUES('$name', '$username', '$password', '$usertype')";
        $result = mysqli_query($connect, $query2);
       $_SESSION['status'] = "Succesfully Added";
       $_SESSION['status_code'] = "success";
       header("Location: users.php");
    }
}

    
    ?>