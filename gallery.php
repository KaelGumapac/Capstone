<?php include 'navbar.php';

include 'admin/includes/db_inc.php';
$gallery  = "SELECT * FROM gallery";
$gallery2 = mysqli_query($data, $gallery);

$pool  = "SELECT * FROM pool";
$pool2 = mysqli_query($data, $pool);

$room  = "SELECT * FROM rooms";
$room2 = mysqli_query($data, $room);

$resto  = "SELECT * FROM resto";
$resto2 = mysqli_query($data, $resto);

$event  = "SELECT * FROM event";
$event2 = mysqli_query($data, $event);

?>
 <title>Gallery</title>
    <link rel="stylesheet" href="links/Gallery/glightbox.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="links/Gallery/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="links/Gallery/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="links/Gallery/images/zAS.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>


      <div class="container">
        <div class="row">
          <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="text-center">
              <button class="btn btn-default filter-button" id="all" onclick="call(this.id)">All</button>
              <button class="btn btn-default filter-button" id="pool" onclick="call(this.id)">Pool</button>
              <button class="btn btn-default filter-button" id="beach" onclick="call(this.id)">Beach</button>
              <button class="btn btn-default filter-button" id="rooms" onclick="call(this.id)">Rooms</button>
              <button class="btn btn-default filter-button" id="restaurant" onclick="call(this.id)">Restaurant</button>
              <button class="btn btn-default filter-button" id="eventcenter" onclick="call(this.id)">Event Center</button>
            </div>
          </div>
<?php
while ($gallery3 = mysqli_fetch_array($gallery2))
{
?>

          <a href="Gallery/<?php echo $gallery3['beach'];?>"
            class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter beach">
            <img src="Gallery/<?php echo $gallery3['beach'];?>" style="height: 300px">
          </a>
<?php
}
?>
        
<?php
while ($pool3 = mysqli_fetch_array($pool2))
{
?>

          <a href="Gallery/<?php echo $pool3['pool'];?>"
            class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pool">
            <img src="Gallery/<?php echo $pool3['pool'];?>" style="height: 300px">
          </a>
<?php
}
?>

<?php
while ($room3 = mysqli_fetch_array($room2))
{
?>

          <a href="Gallery/<?php echo $room3['rooms'];?>"
            class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter rooms">
            <img src="Gallery/<?php echo $room3['rooms'];?>" style="height: 300px">
          </a>
<?php
}
?>

<?php
while ($resto3 = mysqli_fetch_array($resto2))
{
?>

          <a href="Gallery/<?php echo $resto3['resto'];?>"
            class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter restaurant">
            <img src="Gallery/<?php echo $resto3['resto'];?>" style="height: 300px">
          </a>
<?php
}
?>

<?php
while ($resto3 = mysqli_fetch_array($resto2))
{
?>

          <a href="Gallery/<?php echo $resto3['resto'];?>"
            class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter restaurant">
            <img src="Gallery/<?php echo $resto3['resto'];?>" style="height: 300px">
          </a>
<?php
}
?>

<?php
while ($event3 = mysqli_fetch_array($event2))
{
?>

          <a href="Gallery/<?php echo $event3['event'];?>"
            class="glightbox gallery_product col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter eventcenter">
            <img src="Gallery/<?php echo $event3['event'];?>" style="height: 300px">
          </a>
<?php
}
?>
        </div>
      </div>

  
          <script src="links/Gallery/script.js"></script>
          <script src="links/Gallery/glightbox.min.js"></script>
          <Script src="links/Gallery/index.js"></Script>
<?php include 'footer.php'?>