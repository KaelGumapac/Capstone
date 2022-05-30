<?php 
include 'includes/db_inc.php';
 
$userid = $_POST['userid'];
$sql = "select * from reserved where id=".$userid;
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
    <td><button data-id = "<?php echo $row['id']; ?>" class="editinfo btn btn-Primary"> Edit </button>
    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
 </div>

    </td>
</tr>
</table>

<?php } ?>

<script type='text/javascript'>
            $(document).ready(function(){
                $("body").on('click', '.editinfo', function (e){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'reserved_edit.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#updateModal').modal('show'); 
                        }
                    });
                });
            });
            </script>

  <div class="modal" id="updateModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Guest Information</h4>
                          <button type="button" class="close" data-bs-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>

                    </div>
                </div>
        </div>
  
