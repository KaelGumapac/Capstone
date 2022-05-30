<?php
session_start();
include "includes/db_inc.php";
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
?>

  <script>
  swal({
 title: "<?php echo $_SESSION['status']; ?>",
 text: "",
 icon: "<?php echo $_SESSION['status_code']; ?>",
 button: "Close",
     });
   </script>
   <?php
   unset($_SESSION['status']);
}

$db = mysqli_connect("localhost", "root", "", "hotel");

      // Initialize message variable
      $msg = "";
    
      // If upload button is clicked ...
      if (isset($_POST['POST'])) {
          // Get image name
          $image = $_FILES['image']['name'];
          $category = $_POST['category'];
         
          // Get text
          $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    
          // image file directory
          $target = "../Gallery/".basename($image);
    
          $sql = "INSERT INTO roomsprice (rooms, price, description) VALUES ('$image', '$category', '$image_text') ";
          // execute query
          mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $user_log = $_SESSION['name'];
          date_default_timezone_set('Asia/Singapore');
          $time_stamp = date("d-M-Y / h:i:s A");
          $ip = $_SERVER['REMOTE_ADDR'];
          $info = " New Room Category ($image_text) was added by ($user_log)";
          $logs = "INSERT into activity_logs (time_stamp, ip_address, last_user, activity) VALUES ('$time_stamp' , '$ip' , '$user_log' , '$info')";
          $logs2 = mysqli_query($data, $logs);
            $_SESSION['status'] = "UPLOADED SUCCESFULLY";
            $_SESSION['status_code'] = "success";
            header("Location: roomscategory.php");
        }
    }



?>

  
    
  <form method="POST" action="roomscategory_add.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
          <label> Upload Photo: </label>
  	  <input type="file" name="image" required >
        <br>
        <label> Room Price: </label>
        <input type="number" name="category" class="form-control" required>
        <br>
  	</div>
  	<div>
        <label> Description: </label>
      <textarea
      	id="text" 
      	cols="67" 
      	rows="7" 
      	name="image_text" 
        required
        class="form-control"
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
        <br>
        <button type="submit" class = "btn btn-success" name="POST"> POST </button>
    
     
  	</div>
  </form>
     <br />
     
    </form>

    
 


