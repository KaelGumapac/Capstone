<?php include 'navbar.php'; ?>

    <link rel="stylesheet" href="links/mainRoom/css/style.css?v=<?php echo time();?>">
    <title>Rooms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" href="links/mainRoom/img/icons/zAS.png">


    <section class="room wrapper2 top" id="room">
    <div class="container-r">
      <div class="heading">
        <h5>OUR ROOMS</h5>
        <h2>Fascinating rooms & suites </h2>
      </div>
      <div class="content-r flex mtop">
        <div class="left-r grid2">
          <div class="box-r">
            <i class="fas fa-desktop"></i>
            <p>Free Cost</p>
            <h3>No booking fee</h3>
          </div>
          <div class="box-r">
            <i class="fas fa-dollar-sign"></i>
            <p>Free Cost</p>
            <h3>Best rate guarantee</h3>
          </div>
          <div class="box-r">
            <i class="fab fa-resolving"></i>
            <p>Free Cost</p>
            <h3>Reservations 24/7</h3>
          </div>
          <div class="box-r">
            <i class="fal fa-alarm-clock"></i>
            <p>Free Cost</p>
            <h3>High-speed Wi-Fi</h3>
          </div>
          <div class="box-r">
            <i class="fas fa-mug-hot"></i>
            <p>Free Cost</p>
            <h3>Free breakfast</h3>
          </div>
          <div class="box-r">
            <i class="fas fa-user-tie"></i>
            <p>Free Cost</p>
            <h3>One person free</h3>
          </div>
        </div>
        <div class="right-r room-r-img">
          <img src="links/mainRoom/img/room/76999413-1449106825266201-7361920849852497920-o-1@1x.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="about" id="about">
    <div class="container-r">
      <div class="heading">
        <h5>24/7 Balikbayan Fun Resort</h5>
        <h2>The resort that never sleeps
        </h2>
      </div>

      <div class="content-r flex  top">
        <div class="left-r">
          <h3>Your peace of mind is important to us
          </h3>
          <p>24/7 Balikbayan Fun Resort is a beach resort offering a wide range of newly constructed facilities to cater your needs.</p>
          <p>Our resort is an ideal place for the tired and weary to rest and rejuvenate. Celebrate your memorable occasions here as we gather all sorts of events like marriage, birthdays, seminars and Family get-together. Our service crew will try their best to make your stay enjoyable. Foreigners and overseas Filipinos feel right at home as we provide a safe and friendly environment.</p>
          <button class="flex1">
            <a href="price-list.php"><span>Check Availability</span>
            <i class="fas fa-arrow-circle-right"></i></a>
          </button>
        </div>
        <div class="right-r">
          <img src="links/mainRoom/img/room/back.jpg" alt="">
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


