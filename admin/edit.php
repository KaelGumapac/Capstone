
<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "hotel");
if(!empty($_POST))
{
 $output = '';
    $name = mysqli_real_escape_string($connect, $_POST["name"]);  
    $username = mysqli_real_escape_string($connect, $_POST["username"]);  
    $usertype = mysqli_real_escape_string($connect, $_POST["usertype"]);  
    $password = mysqli_real_escape_string($connect, $_POST["password"]);  
    $query = "
    INSERT INTO users(name, username, password, usertype)  
     VALUES('$name', '$username', '$password', '$usertype')
    ";
}
    if (mysqli_query($connect, $query))
    {
        
    }
?>

