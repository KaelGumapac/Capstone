<?php 
include 'includes/db_inc.php';
      include 'index.php';
      include 'includes/booking.php';
      $sql = "SELECT * FROM booking";
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

<style>
  body {
      font-size: 140%;
  }
  table.dataTable th,
  table.dataTable td {
      white-space: nowrap;
  }
        .card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}
.searchStyle
{
padding: 5px 12px;
margin-top: -28px;
font-size: 100px;
}
  </style>
</head>

<!-- Card Dashboard -->
<div class="home-content card-body">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">New booking</div>
              <div class="number"><?php echo $count; ?></div>
            </div>
            <i class='bx bxs-book-reader top '></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Reserved</div>
              <div class="number"><?php echo $reserved_count; ?></div>
            </div>
            <i class='bx bxs-calendar top two'></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Check in</div>
              <div class="number"><?php echo $checkin_count; ?></div>
            </div>
            <i class='bx bx-bookmark-alt-plus top three'></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Records</div>
              <div class="number"><?php echo $records_count; ?></div>
            </div>
            <i class='bx bx-bookmark-alt-minus top four' ></i>
          </div>
        </div>

<!-- End of  Card Dashboard -->

<!-- Table -->
<div class="recent-booking box">
<table id="table" class="display responsive nowrap" style="width:100%">
<thead style="background-color:rgb(171, 207, 228);">
    <tr>
      <th data-priority="0"class="td.dt-control"></th>
      <th data-priority="9"scope="col">Guest ID</th>
      <th data-priority="1"scope="col">Name</th>
      <th data-priority="7"scope="col">Phone #</th>
      <th data-priority="1"scope="col">Category</th>
      <th data-priority="4"scope="col">Check_in</th>
      <th data-priority="5"scope="col">Check_out</th>
      <th data-priority="8"scope="col">Mode of Payment</th>
      <th data-priority="6"scope="col">Status</th>
      <th data-priority="2"scope="col">Action</th>   
    </tr>
  </thead>

  <?php  
        while($row = mysqli_fetch_array($reserved))  
        {  
              echo '  
              <tr>  
                  <td></td>
                  <td>'.$row["guest_id"].'</td>  
                  <td>'.$row["full_name"].'</td>  
                  <td>'.$row["phone"].'</td>  
                  <td>'.$row["room"].'</td>  
                  <td>'.$row["check_in"].'</td>  
                  <td>'.$row["check_out"].'</td>
                  <td>'.$row["method"].'</td>  
                  <td><span class="label label-pill label-success">Full Paid</span></td> 
            
                  <td><button data-id = "'.$row['id'].'" class="userinfo btn btn-Primary" > <i class="fa fa-eye" style="font-size:15px"></i></button>
                  <a href="home-delete.php?del='.$row['guest_id'].'"><button type="button" class=" btn btn-danger"><i class="fa fa-trash-o" style="font-size:15px"></i></button></a>
                  <button data-id = "'.$row['id'].'" class="checkroom btn btn-success" > <i class="fa fa-check" style="font-size:15px"></i></button</td>  
              </tr>  
              ';  //<a href="confirm.php?confirm='.$row['id'].'"><button type="button" class=" btn btn-success" > <i class="fa fa-check" style="font-size:15px"></i> </button></a></td>
        }  
        ?>  
    </table>  

<script>      
$(document).ready( function () {
    $('#table').DataTable();
} );

</script>


      <!-- modal -->
<script type='text/javascript'>
            $(document).ready(function(){
                  $("body").on('click', '.userinfo', function (e){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'home-edit.php',
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

        <script type='text/javascript'>
            $(document).ready(function(){
                  $("body").on('click', '.checkroom', function (e){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'home-assign.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#assignModal').modal('show').find('.modal-content').load($(this).attr('href')); 
                        }
                    });
                });
            });

            
            </script>


        <div class="modal" id="assignModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                          
                            <h4 class="modal-title">Confirmation</h4>
                          <button type="button" class="close" data-bs-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                        </div>

                    </div>
                </div>
        </div>
          </body>
</html>