<?php 
include 'includes/db_inc.php';
 
$userid = $_POST['userid'];
$sql = "select * from records where id=".$userid;
$result = mysqli_query($data,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table>
<tr>
    <p><b>Name: </b> <?php echo $row['full_name']; ?></p>
    <p><b>Email  : </b><?php echo $row['email']; ?></p>
    <p><b>Phone Number :</b>  <?php echo $row['phone']; ?></p>
    <p><b>Companion :</b>  <?php echo $row['kasama']; ?></p>
    <p><b>Room :</b>  <?php echo $row['room']; ?></p>
    <p><b>Check_In :</b>  <?php echo $row['check_in']; ?></p>
    <p><b>Check_Out :</b>  <?php echo $row['check_out']; ?></p>
    <p><b>Pick-up :</b>  <?php echo $row['pick_up']; ?></p>
    <p><b>Message :</b>  <?php echo $row['message']; ?></p>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
 </div>

    </td>
</tr>
</table>

<?php } ?>

