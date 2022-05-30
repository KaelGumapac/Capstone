<?php 
include 'includes/db_inc.php';
      include 'index.php';

  $sql = "SELECT * FROM users";
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
            <div class="title">Recent booking</div>
            <br>
            <button data-id = "" class="adduser btn btn-warning"> Add User </button>
            <br>
            <br>

            
            <table id="table" class="display responsive nowrap" style="width:100%">
           <thead style="background-color:rgb(171, 207, 228);">
  <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
 
      <th scope="col">Usertype</th>
  
      <th scope="col">Action</th>
    </tr>
  </thead>

<?php

while($row = mysqli_fetch_array($reserved))  
                          {  
                               echo '  
                               <tr>                             
<td>'.$row["name"].'</td>  
<td>'.$row["username"].'</td>  
<td>'.$row["usertype"].'</td>  

                                    <td><button data-id = "'.$row['id'].'" class="userinfo btn btn-Primary" > <i class="fa fa-eye" style="font-size:15px"></i></button>
                                    <a href="users_delete.php?del='.$row['id'].'"><button type="button" class=" btn btn-danger"><i class="fa fa-trash-o" style="font-size:15px"></i></button></a>
                                
                               </tr>   
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
                        url: 'users_edit.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>

        <div class="modal" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                          
                            <h4 class="modal-title">Edit User Information</h4>
                          <button type="button" class="close" data-bs-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">]
                          dasdas
                        </div>

                    </div>
                </div>
        </div>

     
  

       <!-- add user-->

       <script type='text/javascript'>
            $(document).ready(function(){
                  $("body").on('click', '.adduser', function (e){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'users_add.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>

        <div class="modal" id="addModal" role="dialog">
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
