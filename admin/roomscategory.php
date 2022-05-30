<?php 

include 'includes/db_inc.php';
      include 'index.php';

  $sql = "SELECT * FROM roomsprice";
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
            <button data-id = "" class="addroom btn btn-warning"> Add Room </button>
        
            </center>
            <br>
            <br>
            <table id="table" class="display responsive nowrap" style="width:100%">
  <thead style="background-color:rgb(171, 207, 228);">
    <tr>
      <th scope="col">Description</th>
      <th scope="col">Images</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
      <?php  
        while($row = mysqli_fetch_array($reserved))  
        {  
              echo '  
              <tr>  
                  <td>'.$row["description"].'</td>  
                  <td><img src="../Gallery/'.$row["rooms"].'" width="200" height="200"></td>  
                  <td>'.$row["price"].'</td> 
                  <td>
                  <a href="roomscategory_delete.php?del='.$row['id'].'"><button type="submit" class=" btn btn-danger"><i class="fa fa-trash-o" style="font-size:15px"></i></button></a>
                  </td>  
              </tr>  
              ';  //<a href="confirm.php?confirm='.$row['id'].'"><button type="button" class=" btn btn-success" > <i class="fa fa-check" style="font-size:15px"></i> </button></a></td>
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
                $('.addroom').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'roomscategory_add.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#galleryModal').modal('show'); 
                        }
                    });
                });
            });
            </script>

        <div class="modal" id="galleryModal" role="dialog">
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