<?php 
include 'includes/db_inc.php';
      include 'index.php';
      include '../room_insert.php';

  $sql = "SELECT * FROM addroom";
  $reserved = mysqli_query($data, $sql);

  
  $deluxed = "SELECT COUNT(*) as total FROM reserved where room_number = 'Attic Room 1'";
  $numbers = mysqli_query($data, $deluxed);
  $count = mysqli_fetch_assoc($numbers);

  if($count['total'] < 1 )
  {
    $_SESSION['attic'] = 'Available';
  }
  else
  {
    $_SESSION['attic'] = 'Unavailable';
  }



  $deluxed = "SELECT COUNT(*) as total FROM reserved where room_number = 'Backpacker Room 1'";
  $numbers = mysqli_query($data, $deluxed);
  $count = mysqli_fetch_assoc($numbers);

  if($count['total'] < 1 )
  {
    $_SESSION['backpacker'] = 'Available';
  }
  else
  {
    $_SESSION['backpacker'] = 'Unavailable';
  }

  $deluxed = "SELECT COUNT(*) as total FROM reserved where room_number = 'Couple Room 1'";
  $numbers = mysqli_query($data, $deluxed);
  $count = mysqli_fetch_assoc($numbers);

  if($count['total'] < 1 )
  {
    $_SESSION['couple'] = 'Available';
  }
  else
  {
    $_SESSION['couple'] = 'Unavailable';
  }

  $deluxed = "SELECT COUNT(*) as total FROM reserved where room_number = 'Couple Room 2'";
  $numbers = mysqli_query($data, $deluxed);
  $count = mysqli_fetch_assoc($numbers);

  if($count['total'] < 1 )
  {
    $_SESSION['couple2'] = 'Available';
  }
  else
  {
    $_SESSION['couple2'] = 'Unavailable';
  }

  $deluxed = "SELECT COUNT(*) as total FROM reserved where room_number = 'Family Room 1'";
  $numbers = mysqli_query($data, $deluxed);
  $count = mysqli_fetch_assoc($numbers);

  if($count['total'] < 1 )
  {
    $_SESSION['family'] = 'Available';
  }
  else
  {
    $_SESSION['family'] = 'Unavailable';
  }

  $deluxed = "SELECT COUNT(*) as total FROM reserved where room_number = 'Twin-sharing Room 1'";
  $numbers = mysqli_query($data, $deluxed);
  $count = mysqli_fetch_assoc($numbers);

  if($count['total'] < 1 )
  {
    $_SESSION['twin'] = 'Available';
  }
  else
  {
    $_SESSION['twin'] = 'Unavailable';
  }


  







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
 
            <!-- <button data-id = "<?php echo $row['id']; ?>" class="addroom btn btn-warning"> Add Room </button> -->
            <br>
            <br>

            <table id="table" class="display responsive nowrap" style="width:100%">
  <thead style="background-color:rgb(171, 207, 228);">
    <tr>
      <th scope="col">Room Name</th>
      <th scope="col">Room Category #</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>


        <tr>  
            <td>Family Room</td>  
            <td>Family Room 1</td> 
            <td><?php echo $_SESSION['family']; ?></td>
        </tr>  
        <tr>  
            <td>Twinsharing Room</td>  
            <td>Twin-sharing Room 1</td> 
            <td><?php echo $_SESSION['twin']; ?></td>
        </tr>  
        <tr>  
            <td>Backpacker Room</td>  
            <td>Backpacker Room 1</td> 
            <td><?php echo $_SESSION['backpacker']; ?></td>
        </tr>  
        <tr>  
            <td>Couple Room</td>  
            <td>Couple Room 1</td> 
            <td><?php echo $_SESSION['couple']; ?></td>
        </tr>  
        <tr>  
            <td>Couple Room</td>  
            <td>Couple Room 2</td> 
            <td><?php echo $_SESSION['couple2']; ?></td>
        </tr> 
        <tr>  
            <td>Attic Room</td>  
            <td>Attic Room 1</td> 
            <td><?php echo $_SESSION['attic']; ?></td>
        </tr> 





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
                        url: 'roompage_add.php',
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
                          
                            <h4 class="modal-title">Guest Information</h4>
                          <button type="button" class="close" data-bs-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>

                    </div>
                </div>
        </div>
  
     
</html>
