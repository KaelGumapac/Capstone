<?php
include "includes/db_inc.php";

?>
  <form method="post" id="insert_form" action="users_add2.php">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     <label>Name: </label>
     <input type="text" name="name" value="" id="name" class="form-control" required />
     <br />
     <label>Username: </label>
     <input type name="username" value="" id="username" class="form-control" />
     <br />
     <label>Password: </label>
     <input type name="password"  placeholder="Default Password" id="username" class="form-control" readonly>
     <br />
     <label>Usertype:</label>
     <select class="form-control" style="height: 40" name="usertype" required>
								<option disabled selected hidden> Select User Type </option>
                <option value="user"> User </option>
                <option value="superadmin"> Superadmin </option>
							</select>
    <div class="modal-footer">
     <br />
     <button type="submit" class = "btn btn-success" name="update"> Add User </button>
    </form>

    
 


