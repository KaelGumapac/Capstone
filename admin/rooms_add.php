<?php 

include 'includes/db_inc.php';
      include 'index.php';

  $sql = "SELECT * FROM rooms";
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
            <button data-id = "<?php echo $row['id']; ?>" class="addroom btn btn-warning"> <i class='fas fa-umbrella-beach'></i> Add Photos in Rooms </button>
            <center><a href="gallery.php"> <button type="submit" class = "btn btn-success" name="Beach"> Beach </button></a>
  <a href="pool_add.php"><button type="submit" class = "btn btn-success" name="Pool"> Pool </button> </a>
  <a href="rooms_add.php"><button type="submit" class = "btn btn-success" name="Rooms"> Rooms </button> </a>
  <a href="resto_add.php"><button type="submit" class = "btn btn-success" name="Resto"> Resto </button></a> 
  <a href="event_add.php"> <button type="submit" class = "btn btn-success" name="Event"> Event </button></a>  
            </center>
            <br>
            <table id="table" class="display responsive nowrap" style="width:100%">
  <thead style="background-color:rgb(171, 207, 228);">
    <tr>
      <th scope="col" width="500">Images</th>
      <th scope="col">Description</th>
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
                  <td>
                  <a href="rooms_delete.php?del='.$row['id'].'"><button type="button" class=" btn btn-danger"><i class="fa fa-trash" style="font-size:30px"></i></button></a>     
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
                        url: 'rooms_add2.php',
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
                          
                            <h4 class="modal-title">Add photos in Rooms</h4>
                          <button type="button" class="close" data-bs-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>

                    </div>
                </div>
        </div>
  
     
</html>