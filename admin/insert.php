
<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "hotel");
if(isset($_POST['insert']))
{
    $name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$usetype = $_POST['usertype'];
	
    $sql = "INSERT INTO users(name, username, password, usertype)  
     VALUES('$name', '$username', '$password', '$usertype')
    ";
    $result = mysqli_query($connect, $sql);
}
    if ($result)
    {
       $_SESSION['status'] = "SUCCESFULLY CHECK-IN";
       $_SESSION['status_code'] = "success";
       HEADER("Location: users.php");
    }
?>

