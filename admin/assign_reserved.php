<?php
session_start();
include 'includes/db_inc.php';

 
$userid = $_POST['userid'];
$sql = "select * from reserved where id=".$userid;
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result); 


?>


<form method="POST" action="" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<h1><b></h1><p> ARE YOU SURE YOU WANT TO CHECKIN THIS GUEST? </p></b></h1>
  	<div>
        <br>
        <a href="reserved_confirm.php?confirm=<?php echo $row['guest_id'];?>"><button type="button" class=" btn btn-success" > <i class="fa fa-success">Done </i> </button></a>
    

  	</div>
  </form>
