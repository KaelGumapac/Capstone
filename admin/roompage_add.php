<?php
session_start();
include 'includes/db_inc.php';



if(isset($_POST['submit'])){

  $roomname = $_POST['roomname'];
  $roomcategory = $_POST['location'];
  $status = 'Available';
  $limit = 1;



  if($roomcategory == 'ROOMS')
  {
    $_SESSION['status'] = "No Room Assigned";
    $_SESSION['status_code'] = "info";
    HEADER("Location: roompage.php");
  }
 elseif($roomname ==  '')
 {
  $_SESSION['status'] = "Please input details";
  $_SESSION['status_code'] = "info";
  HEADER("Location: roompage.php");
 }
 else
 {
  $sql = "INSERT into addroom (roomname, rcategory, status, number) VALUES ('$roomname' , '$roomcategory' , '$status' , '$limit')";
  $sql2 = mysqli_query($data, $sql);
 }
  
 if($sql2)
 {
  $roomname = $_POST['roomname'];
  $user_log = $_SESSION['name'];
  date_default_timezone_set('Asia/Singapore');
  $time_stamp = date("d-M-Y / h:i:s A");
  $ip = $_SERVER['REMOTE_ADDR'];
  $info = " New room ($roomname) was added by ($user_log)";
  $logs = "INSERT into activity_logs (time_stamp, ip_address, last_user, activity) VALUES ('$time_stamp' , '$ip' , '$user_log' , '$info')";
  $logs2 = mysqli_query($data, $logs);
  $_SESSION['status'] = "Succesfully Add Room";
  $_SESSION['status_code'] = "success";
  HEADER("Location: roompage.php");
 }

}
?>



<form method="POST" action="roompage_add.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
      <label> Room name </label>
      <input type ="text" name="roomname"style="height: 50px" id="price" class="form-control" >
    <br>
  	<div>
          
        <label> Room Category: </label> 
        <select name="location" style="height: 50px"  id="LocationId" class="form-control" onChange="getPrice(this.value);">
        <?php while($row2 = mysqli_fetch_array($result)):;?>
	    <option value="<?php echo $row2['rooms'];?>"><?php echo $row2['rooms'];?></option>
        <?php endwhile;?>
	    </select>
  	</div>
      <br>
 
  
  	<div>
        <br>
        <button type="submit" name ="submit" class=" btn btn-success" > <i class="fa fa-plus" style="font-size:15px"> Room </i> </button>
    <br>
     <br>
  	</div>
  </form>

  

