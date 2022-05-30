<?php 
include 'includes/db_inc.php';
      include 'index.php';
      include 'includes/booking.php';
  
      $sql = "SELECT * FROM activity_logs";
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
    <th scope="col">Time Stamp</th>
     <th scope="col">Activity</th>
      <th scope="col">IP address #</th>
      
    
      
    </tr>
  </thead>

  <?php  
                          while($row = mysqli_fetch_array($reserved))  
                          {  
                               echo '  
                               <tr>  
                               <td>'.$row["time_stamp"].'</td>  
                               <td>'.$row["activity"].'</td>  
                               <td>'.$row["ip_address"].'</td>  
            
                              
              
                                  
                                
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

     
</html>
