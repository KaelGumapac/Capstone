<?php include 'navbar.php'?>

    <link rel="stylesheet" href="links/dine/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Dine</title>

    <div class="about">
    <div class="content">
      <div class="heading">
        <h5>Restaurant</h5>
        <h2>Dine with us !
        </h2>
      </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
      </div>
      </div>
      
     
     
      </section>
      <section class="about" id="about">
        <div class="container-r">
          
    
          <div class="content-r flex  top">
            <div class="left-r">
              <h3>24-Hour Restaurant
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
            </div>
            <div class="right-r">
              <img src="assets/Img/1.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container-r">
          
    
          <div class="content-r-1 flex  top">
            <div class="left-r">
              <h3>Fully loaded bar
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
            </div>
            <div class="right-r">
              <img src="assets/Img/bar.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container-r">
          
    
          <div class="content-r flex  top">
            <div class="left-r">
              <h3>Coffee Shop
              </h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
            </div>
            <div class="right-r">
              <img src="assets/Img/coffee.jpg" alt="">
            </div>
          </div>
        </div>
      </section>
     <!-- End of white-bg-sec -->
    

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

<?php include 'footer.php'?>
