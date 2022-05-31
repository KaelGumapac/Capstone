<?php include 'navbar.php';

date_default_timezone_set('Asia/Singapore');
$date = date("m-d-y");


?>

<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time();?>">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<section id="hero">
    <div class="hero container">
        <div>
            <h1 class="hero-h1">The<span></span></h1>
            <h1 class="hero-h1">Resort That Never<span></span></h1>
            <h1 class="hero-h1">Sleeps<span></span></h1>
            <a href="price-list.php" type="button" class="cta">Book Now</a>
        </div>
    </div>
    </section>
    <!--End of Intro and Navbar-->
     <!-- Inline-Form -->
     <form class="form-inline" action="price-list.php" method="post">
        <label class="arrival" for="email">Arrival</label>
        <input type="text"  autocomplete="off" placeholder="<?php echo $date;?>" name="checkin" id="checkin"><i class='bx bxs-calendar'></i>
        <label class="c-out" for="pwd">Check Out</label>
        <input type="text"  autocomplete="off" placeholder="<?php echo $date;?>" name="checkout" id="checkout"><i class='bx bxs-calendar'></i>
        <button type="submit" name="home_submit" class="cta-2">Book Now</button>
        <input type="hidden" name="home_days" id="calculated"> 
    
      </form>
      <div id="inline-picker"></div>
    <!-- End of inline Form -->
    <section id="video" >
        <div class="video-bg">
          <video  width="100%" loop autoplay muted>
            <source src="assets/Img/24_7 Balikbayan Fun Resort - Facebook.mp4" type="video/mp4">
          </video>
        </div>
      </div>
 

<!-- Setting of Date -->

<script>
$('#inline-picker').mobiscroll().datepicker({
    controls: ['calendar'],
    select:'range',
    display: 'inline',
    touchUi: true
});

$('#checkin').datepicker({
    dateFormat: 'yy-mm-dd',
    showAnim: 'drop',
    minDate: 0,
    changeMonth: true,
    changeYear: true,
	onClose: function() {
	   var date2 = $('#checkin').datepicker('getDate');
		 date2.setDate(date2.getDate()+1)
		$('#checkout').datepicker("option", "minDate", date2);
	  }
});
$('#checkout').datepicker({
    dateFormat: 'yy-mm-dd',
    minDate: 0,
    changeMonth: true,
    changeYear: true,
});


$('#checkin').datepicker().bind("change", function () {
    var minValue = $(this).val();
    minValue = $.datepicker.parseDate('yy-mm-dd', minValue);
    $('#checkout').datepicker("option", "minDate", minValue);
    calculate();
});
$('#checkout').datepicker().bind("change", function () {
    var maxValue = $(this).val();
    maxValue = $.datepicker.parseDate('yy-mm-dd', maxValue);
    $('#checkout').datepicker("option", maxValue);
    calculate();
});

function calculate() {
    var d1 = $('#checkin').datepicker('getDate');
    var d2 = $('#checkout').datepicker('getDate');
    var oneDay = 24*60*60*1000;
    var diff = 0;
    if (d1 && d2) {
  
      diff = Math.round(Math.abs((d2.getTime() - d1.getTime())/(oneDay)));
    }
    $('#calculated').val(diff);
  }

</script>


<!-- Setting of Date -->


</section>
<section id="intro-24">
    <div class="service-top">
        <h2 class="section-title">24/7 Balikbayan Fun Resort</h2>
        <p>24/7 Balikbayan Fun Resort is a beach resort offering a wide range of newly constructed facilities to cater your needs. It is located on National Highway, near the coast line going to the famous Pilgrimage Church of Joroan. It is conveniently situated at the south of world-renowned ecotourism sites in the Bicol Peninsula, such as Mayon Volcano, Donsol Whale Sharks (Butanding), and CamSur Watersports Complex (CWC). </p>
    </div>
</section>
<!--End of Video-->
    <!--Services-->

    <!-- 2x2 Grid Col -->
    <div class="container-amen">
      <div class="amenities">
          <center><h1 class="h1-title" >Ameni<span class="h1-span">t</span>ies</h1></center>
      </div>

      <div class="row-amen">

          <div class="column-amen">
              
              <div class="effect-amen">
                  <div class="effect-img-amen">
                      <img src="assets/Img/pool.jpg" alt="">
                  </div>
                  <div class="effect-text-amen">
                      <div class="inner-amen">
                          <h2>Pools</h2>
                          <p>Resort is equipped with 9 Swimming Pools of various depths. Enjoy the refreshing water of the pools that came directly from the mountain beside the resort.</p>
                          <div class="effect-btn-amen">
                              <a href="gallery.php" class="btn-amen"><i class="fa fa-eye"></i> See More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="column-amen">
              <div class="effect-amen">
                  <div class="effect-img-amen">
                      <img src="assets/Img/bar.jpg" alt="">
                  </div>
                  <div class="effect-text-amen">
                      <div class="inner-amen">
                          <h2>Bar</h2>
                          <p>Enjoy your happy hours with your Family, a home away from home. We have all brands of liquors and canned beverages.</p>
                          <div class="effect-btn-amen">
                              <a href="gallery.php" class="btn-amen"><i class="fa fa-eye"></i> See More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="column-amen">
              <div class="effect-amen">
                  <div class="effect-img-amen">
                      <img src="assets/Img/restaurant.jpg" alt="">
                  </div>
                  <div class="effect-text-amen">
                      <div class="inner-amen">
                          <h2>Restaurant</h2>
                          <p>Our restaurant serve both native and world cuisines. We also have a 24/7 coffee corner that serves a mix of intercontinental flavors.</p>
                          <div class="effect-btn-amen">
                              <a href="gallery.php" class="btn-amen"><i class="fa fa-eye"></i> See More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="column-amen">
              <div class="effect-amen">
                  <div class="effect-img-amen">
                      <img src="assets/Img/surf.jpg" alt="">
                  </div>
                  <div class="effect-text-amen">
                      <div class="inner-amen">
                          <h2>Beach</h2>
                          <p>The pristine beach in Tiwi is part of the Lagonoy Gulf, located near Atulayan Bay, and west of Cabugao Bay. Beachgoers will be pleased with the soft and clean sand, and the born-photographers will surely enjoy the rocky features of a small hill near the shore.
</p>
                          <div class="effect-btn-amen">
                              <a href="gallery.php" class="btn-amen"><i class="fa fa-eye"></i> See More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
    <!--End of Service Section-->
    
  
    <!--Rooms-->
    <section id="rooms">
        <div class="rooms container">
            <div class="rooms-header">
                <h1 class="h1-title">24/7 <span class="h1-span">rooms</span></h1>
            </div>
            <div class="all-rooms">
                <div class="room-item">
                    <div class="room-info">
                    <h1>6 PAX</h1>
                    <h2>Family Room</h2>
                    <p> Fully airconditioned and good enough to accommodate SIX (6) Members of your Family. Additional Members/Guests, if any, will be charged extra as per rules. Guests will have FREE access to Swimming Pool and other facility. Also FREE and SECURED Vehicle parking inside our Resort compound. SIX (6) Guests are provided with FREE Breakfast. Check out Time 12:00 Noon.</p>
                    </div>
                    <div class="room-img">
                        <img src="assets/Img/1c.jpg" alt="beach view">
                    </div>
                </div>
                <div class="room-item">
                    <div class="room-info">
                    <h1>7 PAX</h1>
                    <h2>Family Room</h2>
                    <p>Fully airconditioned and good enough to accommodate seven (7) Members of your Family. Additional Members/Guests, if any, will be charged extra as per rules. Guests will have FREE access to Swimming Pool and other facility. Also FREE and SECURED Vehicle parking inside our Resort compound. Seven (7) Guests are provided with FREE Breakfast. Check out Time 12:00 Noon.</p>
                    </div>
                    <div class="room-img">
                        <img src="assets/Img/2c.jpg" alt="beach view">
                    </div>
                </div>
                <div class="room-item">
                    <div class="room-info">
                    <h1>COUPLE ROOM</h1>
                    <h2>Beach view</h2>
                    <p>Couple Room is good enough for TWO (2) Guests and fully airconditioned, copy, clean and hygenic. FREE breakfast for TWO (2) and FREE access to our swimming pool and other facility in the resort. FREE vehicle parking. Check out time 12:00 noon</p>
                    </div>
                    <div class="room-img">
                        <img src="assets/Img/3c.jpg" alt="beach view">
                    </div>
                </div>
                <div class="room-item">
                    <div class="room-info">
                    <h1>DELUXE ROOM</h1>
                    <h2>Pool View</h2>
                    <p>Deluxe room is good enough for TWO to Five guests and fully airconditioned, copy, clean and hygenic. FREE breakfast for TWO (2) and FREE access to our swimming pool and other facility in the resort. FREE vehicle parking. Check out time 12:00 noonCouple Room is good enough for TWO (2) Guests and fully airconditioned, copy, clean and hygenic. FREE breakfast for TWO (2) and FREE access to our swimming pool and other facility in the resort. FREE vehicle parking. Check out time 12:00 noon</p>
                    </div>
                    <div class="room-img">
                        <img src="assets/Img/4c.jpg" alt="beach view">
                    </div>
                </div>
                <div class="room-item">
                    <div class="room-info">
                    <h1>Backpacker</h1>
                    <h2>Pool View</h2>
                    <p>Fully airconditioned and good enough to accommodate Sixteen (16) Members of your Family. Additional Members/Guests, if any, will be charged extra as per rules. Guests will have FREE access to Swimming Pool and other facility. Also FREE and SECURED Vehicle parking inside our Resort compound. Seven (7) Guests are provided with FREE Breakfast. Check out Time 12:00 Noon.</p>
                    </div>
                    <div class="room-img">
                        <img src="assets/Img/5c.jpg" alt="beach view">
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <!-- End of Rooms -->
    <!-- resto -->
    <section id="restaurant-sec">
    <div class="card-restau">
        <div class="card__content">
          
          <div class="card__front">
            <h3 class="card__title">Bar and Restaurant</h3>
            <p class="card__subtitle">24/7 Balikbayan Fun Resort</p>
          </div> 
          
          <div class="card__back">
            <p class="card__body">OUR RESTAURANT SERVE BOTH NATIVE AND WORLD CUISINES. WE ALSO HAVE A 24/7 COFFEE CORNER THAT SERVES A MIX OF INTERCONTINENTAL FLAVORS. DON'T FORGET TO TRY A VARIETY OF ALCOHOLIC BEVERAGES FROM OUR FULLY LOADED BAR. </p>
          </div>
          
        </div>
      </div>
    </section>
    <!--End of restaurant Info-->

    <!-- beach -->
    <section id="entrance">
      <div class="entrance container">
          <div class="col-left">
              <div class="entrance-img">
                  <img class="beach-img" src="assets/Img/main1.jpg" alt="Entrance">
              </div>
          </div>
          <div class="col-right">
            <div class="amenities beach-h1">
              <h1 class="h1-title">Beach <span class="h1-span"> Resort</span></h1>
          </div>
          <h2>Paradise Awaits You!</h2>
              <p>The pristine beach in Tiwi is part of the Lagonoy Gulf, located near Atulayan Bay, and west of Cabugao Bay. Beachgoers will be pleased with the soft and clean sand, and the born-photographers will surely enjoy the rocky features of a small hill near the shore.</p>
      <a href="/Main-roomFin -Book/book-formFin/book-form.html" class="cta-3">Reserve Now</a>
          </div>
      </div>
     
  </section>
  
  <section class="wrapper bg-white-2" id="features-grid">
    <div class="features-grid-container">
      <!-- title -->
      <div class="container d-flex-r text-center mapa">
        <!-- <h2 class="title text-black font-x3">Rooms</h2> -->
      </div>
      <!-- 3rd row -->
      <div class="d-flex-q features-grid-row" id="third-row">
        <!-- img -->
        <div class="features-grid-row-img w-50">
          <div class="map-container">
          <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15519.15207898676!2d123.6344724!3d13.4871559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xafc47961da879dbf!2sBalikbayan%20Resort!5e0!3m2!1sen!2sph!4v1650239577015!5m2!1sen!2sph" width="800" height="420"  allowfullscreen="" loading="lazy" referrerpolicy=" no-referrer-when-downgrade"></iframe>
        </div>
        </div>
        <!-- text -->
        <div class="features-grid-row-text w-50">
          <div class="m-3">
            
            <div>
              <p class="text-dark text-justify font-xs">15 minutes away from Philippine Geothermal Plant; 10 minute drive to Philippine Ceramics; 5 minutes away from Joroan Church; and certainly the perfect midpoint to those who want to view Mount Mayon in Mayon Rest House and wakeboarding in Camarines Sur.</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- End of Beach -->

  <?php include 'footer.php'; ?>