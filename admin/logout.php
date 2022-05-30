
<?php
session_start();
$_SESSION['status'] = " LOGOUT ";
$_SESSION['status_code'] = "success";
session_unset();
session_destroy();

header("location:login.php");

?>