

<?php
include "includes/db_inc.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from records where id=".$userid;
$result = mysqli_query($data,$sql);


while( $row = mysqli_fetch_array($result) )
{

?>
<html>
<head>
</head>
<body>
  <form method="post" id="insert_form" action="reserved_update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="guest_id" value="<?php echo $row['guest_id']; ?>">
    <div class="row">
      <div class="col">
     <label>Guest ID: </label>
     <input type="text" name="guest_id" value="<?php echo $row['guest_id']; ?>" id="name" class="form-control" readonly/>
      </div>
     <br />
      <div class="col">
     <label>Name: </label>
     <input type name="name" value="<?php echo $row['full_name']; ?>" id="username" class="form-control" readonly></textarea>
     </div>
  </div>
     <br/>
     <label>Email</label>
     <input type name="email" value="<?php echo $row['email']; ?>" id="username" class="form-control"  readonly></textarea>
     <br /> 
     <div class="row">
      <div class="col">
     <label>Phone Number: </label>
     <input type="text" name="phone" value="<?php echo $row['phone']; ?>" id="name" class="form-control" readonly />
      </div>
     <br />
      <div class="col">
     <label>Companion: </label>
     <input type name="kasama" value="<?php echo $row['kasama']; ?>" id="username" class="form-control"  readonly/></textarea>
     </div>
  </div>
     <br />
     <label>Room</label>
     <input type name="room" value="<?php echo $row['room']; ?>"id="username" class="form-control" readonly></textarea>
     <br />
     <div class="row">
      <div class="col">
     <label>Check-in</label>
     <input type="date" id="checkin" name="check_in"  value="<?php echo $row['check_in']; ?>" class="form-control"readonly></textarea>
     </div>
     <br />
       <div class="col">
     <label>Check-out</label>
     <input type="date" id="checkout" name="check_out"  value="<?php echo $row['check_out']; ?>" class="form-control"readonly></textarea>
     </div>
  </div>
     <br />
     <label>Pick-up</label>
     <input type name="pick_up"  value="<?php echo $row['pick_up']; ?>"id="username" class="form-control"readonly ></textarea>
     <br />
     <label>Message</label>
     <input type name="message"  value="<?php echo $row['message']; ?>"id="username" class="form-control" readonly></textarea>
     <br />
     <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
    </form>

</body>
</html>


<?php } ?>










