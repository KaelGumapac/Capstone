
<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
 
?>
<?php include 'includes/db_inc.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/scripts.php';?>
<?php

}
else
{
  header("Location: login.php?");
  exit();
}
?>

<script src="js/sweetalert.min.js"></script>



<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
?>

  <script>
  swal({
 title: "<?php echo $_SESSION['status']; ?>",
 icon: "<?php echo $_SESSION['status_code']; ?>",
 button: "Close",
     });
   </script>
   <?php
   unset($_SESSION['status']);
}
?>
  

