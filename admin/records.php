<?php 
include 'includes/db_inc.php';
      include 'index.php';
      include 'includes/booking.php';
  
      $sql = "SELECT * FROM records";
      $reserved = mysqli_query($data, $sql);
?>

<!doctype html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<!-- Link for Icon -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- End for Icon -->

<!-- Link for Data Table -->
<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="assets/css/responsive.dataTables.min.css">
<!-- End Link for Data Table -->
</head>

<style>
    .card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}
</style>

<div class="home-content card-body">

  
          <div class="recent-booking box">
            <div class="title"></div>
            <br>
            <table id="table" class="display responsive nowrap" style="width:100%">
  <thead style="background-color:rgb(171, 207, 228);">
    <tr>
    <th scope="col">Guest ID</th>
     <th scope="col">Name</th>
      <th scope="col">Phone #</th>
      <th scope="col">Category</th>
      <th scope="col">Check_in</th>
      <th scope="col">Check_out</th>
      <th scope="col">Mode of Payment</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
      
    
      
    </tr>
  </thead>

  <?php  
                          while($row = mysqli_fetch_array($reserved))  
                          {  
                               echo '  
                               <tr>  
                               <td>'.$row["guest_id"].'</td>  
                               <td>'.$row["full_name"].'</td>  
                               <td>'.$row["phone"].'</td>  
                               <td>'.$row["room"].'</td>  
                               <td>'.$row["check_in"].'</td>  
                               <td>'.$row["check_out"].'</td>
                               <td>'.$row["method"].'</td>  
                               <td><span class="label label-pill label-success">Full Paid</span></td> 
                              
                                    <td><button data-id = "'.$row['id'].'" class="userinfo btn btn-Primary" > <i class="fa fa-eye" style="font-size:15px"></i></button>
                                  
                                
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  

    <script>
    $(document).ready(function() {
       $('#table').DataTable();
     
       
     });
    </script>





<script type='text/javascript'>
            $(document).ready(function(){
                  $("body").on('click', '.userinfo', function (e){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'records_edit.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#viewModal').modal('show'); 
                        }
                    });
                });
            });
            </script>

        <div class="modal" id="viewModal" role="dialog">
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
  
     
</html>
