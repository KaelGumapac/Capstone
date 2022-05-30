<?php
session_start(); 
include 'navbar.php'; 
include 'admin/includes/db_inc.php';

if(isset($_POST['home_submit']))
{
  $_SESSION['home_checkin'] = $_POST['checkin'];
  $_SESSION['home_checkout'] = $_POST['checkout'];
  $_SESSION['home_days'] = $_POST['home_days'];


}

//Family  Room
$deluxed = "SELECT COUNT(*) as total FROM booking where room = 'Family Room'";
$numbers = mysqli_query($data, $deluxed);
$count1 = mysqli_fetch_assoc($numbers);

$deluxed = "SELECT COUNT(*) as total FROM reserved where room = 'Family Room'";
$numbers = mysqli_query($data, $deluxed);
$count11 = mysqli_fetch_assoc($numbers);

$deluxed = "SELECT COUNT(*) as total FROM check_in where room = 'Family Room'";
$numbers = mysqli_query($data, $deluxed);
$count111 = mysqli_fetch_assoc($numbers);

//All
$count1111 = $count1['total'] + $count11['total'] + $count111['total'];


//Family Room

//Twinsharing Room
$deluxed = "SELECT COUNT(*) as total FROM booking where room = 'Twinsharing Room'";
$numbers = mysqli_query($data, $deluxed);
$count2 = mysqli_fetch_assoc($numbers);

$deluxed = "SELECT COUNT(*) as total FROM reserved where room = 'Twinsharing Room'";
$numbers = mysqli_query($data, $deluxed);
$count22 = mysqli_fetch_assoc($numbers);

$deluxed = "SELECT COUNT(*) as total FROM check_in where room = 'Twinsharing Room'";
$numbers = mysqli_query($data, $deluxed);
$count222 = mysqli_fetch_assoc($numbers);

//All
$count2222 = $count2['total'] + $count22['total'] + $count222['total'];
//Twinsharing Room

//Couple Room
$deluxed = "SELECT COUNT(*) as total FROM booking where room = 'Couple Room'";
$numbers = mysqli_query($data, $deluxed);
$count3 = mysqli_fetch_assoc($numbers);
$deluxed = "SELECT COUNT(*) as total FROM reserved where room = 'Couple Room'";
$numbers = mysqli_query($data, $deluxed);
$count33 = mysqli_fetch_assoc($numbers);
$deluxed = "SELECT COUNT(*) as total FROM check_in where room = 'Couple Room'";
$numbers = mysqli_query($data, $deluxed);
$count333 = mysqli_fetch_assoc($numbers);

//All
$count3333 = $count3['total'] + $count33['total'] + $count333['total'];
//Couple Room

//Attic Room
$deluxed = "SELECT COUNT(*) as total FROM booking where room = 'Attic Room'";
$numbers = mysqli_query($data, $deluxed);
$count4 = mysqli_fetch_assoc($numbers);
$deluxed = "SELECT COUNT(*) as total FROM reserved where room = 'Attic Room'";
$numbers = mysqli_query($data, $deluxed);
$count44 = mysqli_fetch_assoc($numbers);
$deluxed = "SELECT COUNT(*) as total FROM check_in where room = 'Attic Room'";
$numbers = mysqli_query($data, $deluxed);
$count444 = mysqli_fetch_assoc($numbers);

//All
$count4444 = $count4['total'] + $count44['total'] + $count444['total'];
//Attic Room


// Backpacker Room
$deluxed = "SELECT COUNT(*) as total FROM booking where room = 'Backpacker Room'";
$numbers = mysqli_query($data, $deluxed);
$count5 = mysqli_fetch_assoc($numbers);

$deluxed = "SELECT COUNT(*) as total FROM reserved where room = 'Backpacker Room'";
$numbers = mysqli_query($data, $deluxed);
$count55 = mysqli_fetch_assoc($numbers);
$deluxed = "SELECT COUNT(*) as total FROM check_in where room = 'Backpacker Room'";
$numbers = mysqli_query($data, $deluxed);
$count555 = mysqli_fetch_assoc($numbers);

//All
$count5555 = $count5['total'] + $count55['total'] + $count555['total'];
//Backpacker

?>
    <title>Rooms</title>
    <link rel="stylesheet" href="links/mainRoom/room-pircelistFin/css/style.css?v=<?php echo time();?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<!-- Link for Icon -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- End for Icon -->
  <div class="about">
    <div class="content">
      </div>
      </div>
      <!-- 2x2 -->
      <section class="offer mtop" id="services">
    <div class="container-r">
      <div class="heading">
        <h5>BOOK NOW ! </h5>
        <h2>Cheap prices with amazing views</h2>
      </div>
  <form method ="POST" action="bookform/bookform.php">
    <input type="hidden" name="room" value="Family Room">
    <input type="hidden" name="price" value="4000">
      <div class="content-r grid2 mtop">
        <div class="box-r flex">
          <div class="left-r">
            <img src="assets/Img/5.jpg" alt="">
          </div>
          <div class="right-r">
            <h4>Family Room  </h4>
            <br>
            <p> <i class='bx bxs-check-square'></i> Free Breakfast for 7 pax </p>
            <p> <i class='bx bxs-check-square'></i> Inclusive of Toiletries </p>
            <p> <i class='bx bxs-check-square'></i> Towels are provided.</p>
            <p> <i class='bx bxs-check-square'></i> 2 PM (Check in) - 12 Noon (Check out) </p>
            <p> <i class='bx bxs-check-square'></i> 370 PHP charge for extra person </p>
            <br>
            <h2>P5000/night</h2>
            <?php
              if($count1111 < 1)
              {
              echo '<button class="flex1" name="book_submit"><span><a href="#">BOOK NOW</a></span><i class="fas fa-arrow-circle-right"></i></button>';
              }
              else
              {
                echo '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
              }
            ?>
          </div>
        </div>
    </form>



  <form method ="POST" action="bookform/bookform.php">
    <input type="hidden" name="room" value="Twinsharing Room">
    <input type="hidden" name="price" value="2000">
        <div class="box-r flex">
          <div class="left-r">
            <img src="assets/Img/1.jpg" alt="">
          </div>
          <div class="right-r">
          <h4>Twin-sharing Room </h4>
            <br>
            <p> <i class='bx bxs-check-square'></i> Free Breakfast for 3 pax </p>
            <p> <i class='bx bxs-check-square'></i> Inclusive of Toiletries </p>
            <p> <i class='bx bxs-check-square'></i> Towels are provided </p>
            <p> <i class='bx bxs-check-square'></i> 2 PM (Check in) - 12 Noon (Check out) </p>
            <p> <i class='bx bxs-check-square'></i> 370 PHP charge for extra person </p>
            <br>
            <h2>P2000/night</h2>
            
            <?php
              if($count2222 < 1)
              {
              echo '<button class="flex1" name="book_submit"><span><a href="#">BOOK NOW</a></span><i class="fas fa-arrow-circle-right"></i></button>';
              }
              else
              {
                echo '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
              }
            ?>
          </div>
        </div>
      </form>




    <form method ="POST" action="bookform/bookform.php">
    <input type="hidden" name="room" value="Backpacker Room">
    <input type="hidden" name="price" value="2000">
        <div class="box-r flex">
          <div class="left-r">
            <img src="assets/Img/2.jpg" alt="">
          </div>
          <div class="right-r">
          <h4>Backpacker Room </h4>
            <br>
            <p> <i class='bx bxs-check-square'></i> Free Breakfast per pax </p>
            <p> <i class='bx bxs-check-square'></i> Inclusive of Toiletries </p>
            <p> <i class='bx bxs-check-square'></i> Towels are provided </p>
            <p> <i class='bx bxs-check-square'></i> 2 PM (Check in) - 12 Noon (Check out) </p>
            <p> <i class='bx bxs-check-square'></i> 370 PHP charge for extra person </p>
            <br>
            <h2>P2000/night</h2>
            <?php
              if($count5555 < 1)
              {
              echo '<button class="flex1" name="book_submit"><span><a href="#">BOOK NOW</a></span><i class="fas fa-arrow-circle-right"></i></button>';
              }
              else
              {
                echo '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
              }
            ?>
          </div>
        </div>
  </form>




  <form method ="POST" action="bookform/bookform.php">
    <input type="hidden" name="room" value="Couple Room">
    <input type="hidden" name="price" value="2000">
        <div class="box-r flex">
          <div class="left-r">
            <img src="assets/Img/3.jpg" alt="">
          </div>
          <div class="right-r">
          <h4>Couple Room </h4>
            <br>
            <p> <i class='bx bxs-check-square'></i> Free Breakfast for 2 pax </p>
            <p> <i class='bx bxs-check-square'></i> Inclusive of Toiletries </p>
            <p> <i class='bx bxs-check-square'></i> Towels are provided </p>
            <p> <i class='bx bxs-check-square'></i> 2 PM (Check in) - 12 Noon (Check out) </p>
            <p> <i class='bx bxs-check-square'></i> 370 PHP charge for extra person </p>
            <br>
            <h2>P2000/night</h2>
            <?php
              if($count3333 < 1)
              {
              echo '<button class="flex1" name="book_submit"><span><a href="#">BOOK NOW</a></span><i class="fas fa-arrow-circle-right"></i></button>';
              }
              else
              {
                echo '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
              }
            ?>
          </div>
        </div>
  </form>

<form method ="POST" action="bookform/bookform.php">
    <input type="hidden" name="room" value="Attic Room">
    <input type="hidden" name="price" value="800">
        <div class="box-r flex">
          <div class="left-r">
            <img src="assets/Img/4.jpg" alt="">
          </div>
          <div class="right-r">
          <h4>Attic Room </h4>
            <br>
            <p> <i class='bx bxs-check-square'></i> Free Breakfast for 2 pax </p>
            <p> <i class='bx bxs-check-square'></i> Inclusive of Toiletries </p>
            <p> <i class='bx bxs-check-square'></i> Towels are provided </p>
            <p> <i class='bx bxs-check-square'></i> 2 PM (Check in) - 12 Noon (Check out) </p>
            <p> <i class='bx bxs-check-square'></i> 370 PHP charge for extra person </p>
            <p> <i class='bx bxs-check-square'></i> Non-aircon with separate Comfort Room </p>
            <br>
            <h2>P800/night</h2>
            <?php
              if($count4444 < 1)
              {
              echo '<button class="flex1" name="book_submit"><span><a href="#">BOOK NOW</a></span><i class="fas fa-arrow-circle-right"></i></button>';
              }
              else
              {
                echo '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
              }
            ?>
          </div>
        </div>
</form>



<form method ="POST" action="bookform/bookform.php">
    <input type="hidden" name="room" value="Couple Room">
    <input type="hidden" name="price" value="3000">
        <div class="box-r flex">
          <div class="left-r">
            <img src="assets/Img/main1.jpg" alt="">
          </div>
          <div class="right-r">
          <h4>Couple Room with Private Pool Room </h4>
            <br>
            <p> <i class='bx bxs-check-square'></i> Free Breakfast for 2 pax </p>
            <p> <i class='bx bxs-check-square'></i> Inclusive of Toiletries </p>
            <p> <i class='bx bxs-check-square'></i> Towels are provided </p>
            <p> <i class='bx bxs-check-square'></i> 2 PM (Check in) - 12 Noon (Check out) </p>
            <p> <i class='bx bxs-check-square'></i> 370 PHP charge for extra person </p>
            <p> <i class='bx bxs-check-square'></i> Exclusive Swimming Pool Attached </p>
            <br>
            <h2>P3000/night</h2>
            <?php
              if($count5['total'] < 1)
              {
              echo '<button class="flex1" name="book_submit"><span><a href="#">BOOK NOW</a></span><i class="fas fa-arrow-circle-right"></i></button>';
              }
              else
              {
                echo '<span class="label label-pill label-danger">NOT AVAILABLE</span>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    
  

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 15 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
<?php include 'footer.php'; ?>
