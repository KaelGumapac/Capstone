<?php
include "includes/db_inc.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from users where id=".$userid;
$result = mysqli_query($data,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
  <form method="post" id="insert_form" action="users_update.php">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     <label>Name</label>
     <input type="text" name="name" value="<?php echo $row['name']; ?>" id="name" class="form-control" />
     <br />
     <label>Username</label>
     <input type name="username" value="<?php echo $row['username']; ?>" id="username" class="form-control"></textarea>
     <br />
  
     <label>Usertype</label>
     <select class="form-control" style="height: 40" name="room"> </textarea>
								<option value="user"> user </option>
								<option value="superadmin"> superadmin </option>
							</select>
    <br />
    <label>Reset Password</label>
    <select class="form-control" style="height: 40" name="default"> </textarea>
		<option value="123"> Default Password </option>
		</select>
    <div class="modal-footer">
     <br />
     <button type="submit" class = "btn btn-success" name="update"> Update </button>
    </form>

    
 
<?php } ?>








