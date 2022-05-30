<?php
session_start();
include 'db_inc.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);   /*trim ung data para maiwasan ang mga html injectionshits */
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    
    }
    $username = validate($_POST['username']);
    $password = md5(validate($_POST['password']));

    if (empty($username)){
        header("Location: ../login.php?error=Username is required");
        exit();
    }
    else if (empty($password)){
        header("Location: ../login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE username ='$username' AND password='$password' ";

        $result = mysqli_query($data, $sql);
        
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row ['password'] === $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['usertype'] = $row['usertype'];           
                header("Location: ../home.php");
                exit();
            }else{
                header("Location: ../login.php?error=Incorrect Username or Password");
                exit();
            }
        }
        else{
             header("Location: ../login.php?error=Incorrect Username or Password");
            exit();
         }
            
        
    }
}
else{
    header("Location: ../login.php?error");
    exit();
}

    




