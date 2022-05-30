<?php
session_start();
include 'includes/db_inc.php';
 
$userid = $_POST['userid'];
$sql = "select * from booking where id =".$userid;
$result = mysqli_query($data, $sql);
$row = mysqli_fetch_array($result); 


$family = $_SESSION['family'];
$twin = $_SESSION['twin'];
$backpacker = $_SESSION['backpacker'];
$couple = $_SESSION['couple'];
$couple2 = $_SESSION['couple2'];
$attic = $_SESSION['attic'];


$room = $row['room'];

if($row['room'] == 'Family Room') 
{
$sql2 = "select * from addroom where rcategory='$room' AND status='$family'";
$result2= mysqli_query($data, $sql2);
}
elseif($row['room'] == 'Attic Room') 
{
$sql2 = "select * from addroom where rcategory='$room' AND status='$attic'";
$result2= mysqli_query($data, $sql2);
}
elseif($row['room'] == 'Backpacker Room') 
{
$sql2 = "select * from addroom where rcategory='$room' AND status='$backpacker'";
$result2= mysqli_query($data, $sql2);
}
elseif($row['room'] == 'Couple Room') 
{
$sql2 = "select * from addroom where rcategory='$room' AND status='$couple'";
$result2= mysqli_query($data, $sql2);
}
elseif($row['room'] == 'Couple Room') 
{
$sql2 = "select * from addroom where rcategory='$room' AND status='$couple2'";
$result2= mysqli_query($data, $sql2);
}
elseif($row['room'] == 'Twinsharing Room') 
{
$sql2 = "select * from addroom where rcategory='$room' AND status='$twin'";
$result2= mysqli_query($data, $sql2);
}



?>


  	<form method="post" id="insert_form" action="assign2.php">
     <label>Name</label>
	 <input type ="hidden" value="<?php echo $userid;?>" name="id">
       <input type ="hidden" value="<?php echo $row['guest_id']; ?>" name="guest_id">
     <input type="text" name="name" value="<?php echo $room; ?>" id="name" class="form-control"  readonly/>
     <br />
     <label> Room Name: </label> 
        <select name="room" style="height: 50px"  id="LocationId" class="form-control" onChange="getPrice(this.value);">
        <?php while($row2 = mysqli_fetch_array($result2)):;?>
	    <option value="<?php echo $row2['roomname'];?>"><?php echo $row2['roomname'];?></option>
        <?php endwhile;?>
	    </select>
    <div class="modal-footer">
     <br />
     <button type="submit" class = "btn btn-success" name="room_number"> Add Room </button>
    </form>


    
 
  	<div> 
        <br>
    

  	</div>
  </form>
