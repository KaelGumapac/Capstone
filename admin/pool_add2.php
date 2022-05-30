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
      if (isset($_POST['Beach'])) {
          // Get image name
          $image = $_FILES['image']['name'];
          $category = $_POST['category'];
         
          // Get text
          $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    
          // image file directory
          $target = "../Gallery/".basename($image);
    
          $sql = "INSERT INTO gallery (beach, price, description) VALUES ('$image', '$category', '$image_text') ";
          // execute query
          mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $_SESSION['status'] = "UPLOADED SUCCESFULLY";
            $_SESSION['status_code'] = "success";
            header("Location: gallery.php");
        }
    }

    if (isset($_POST['Pool'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        $category = $_POST['category'];
       
        // Get text
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  
        // image file directory
        $target = "../Gallery/".basename($image);
  
        $sql = "INSERT INTO pool (pool, price, description) VALUES ('$image', '$category', '$image_text') ";
        // execute query
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $_SESSION['status'] = "UPLOADED SUCCESFULLY";
          $_SESSION['status_code'] = "success";
          header("Location: pool_add.php");
      }else
      {
          $_SESSION['status'] = "PLEASE TRY AGAIN";
          $_SESSION['status_code'] = "error";
          header("Location: pool_add.php");
      }
    }

      if (isset($_POST['Event'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        $category = $_POST['category'];
       
        // Get text
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  
        // image file directory
        $target = "../Gallery/".basename($image);
  
        $sql = "INSERT INTO event (event, price, description) VALUES ('$image', '$category', '$image_text') ";
        // execute query
        mysqli_query($db, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $_SESSION['status'] = "UPLOADED SUCCESFULLY";
          $_SESSION['status_code'] = "success";
          header("Location: gallery.php");
      }else
      {
          $_SESSION['status'] = "PLEASE TRY AGAIN";
          $_SESSION['status_code'] = "error";
          header("Location: gallery.php");
        }
    }

      //
      if (isset($_POST['Rooms'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        $category = $_POST['category'];
       
        // Get text
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  
        // image file directory
        $target = "../Gallery/".basename($image);
  
        $sql = "INSERT INTO rooms (rooms, price, description) VALUES ('$image', '$category', '$image_text') ";
        // execute query
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $_SESSION['status'] = "UPLOADED SUCCESFULLY";
          $_SESSION['status_code'] = "success";
          header("Location: gallery.php");
      }else
      {
          $_SESSION['status'] = "PLEASE TRY AGAIN";
          $_SESSION['status_code'] = "error";
          header("Location: gallery.php");
      }
    }
      //
      if (isset($_POST['Resto'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        $category = $_POST['category'];
       
        // Get text
        $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  
        // image file directory
        $target = "../Gallery/".basename($image);
  
        $sql = "INSERT INTO resto (resto, price, description) VALUES ('$image', '$category', '$image_text') ";
        // execute query
        mysqli_query($db, $sql);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $_SESSION['status'] = "UPLOADED SUCCESFULLY";
          $_SESSION['status_code'] = "success";
          header("Location: gallery.php");
      }else
      {
          $_SESSION['status'] = "PLEASE TRY AGAIN";
          $_SESSION['status_code'] = "error";
          header("Location: gallery.php");
      }
  }


?>

  
    
<form method="POST" action="pool_add2.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
          <label> Upload Photo: </label>
  	  <input type="file" name="image" required >
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
        <button type="submit" class = "btn btn-success" name="Pool"> POST </button>
    
     
  	</div>
  </form>
     <br />
     
    </form>
 


