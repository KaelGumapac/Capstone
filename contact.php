<?php include 'navbar.php';?>

    <title>Contact</title>
    <link rel="stylesheet" href="links/contact/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="links/contact/customerreview.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="links/contact/star.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>


      <div class="contact">
        <div class="content">
          <div class="title">Contact</div>
          <p class="text-attri">
            24/7 Balikbayan Fun Resort Contact Details <br><br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam modi quaerat aspernatur quia eos ad odio animi. Tempora incidunt odio consectetur dolor sed in ipsa a laboriosam, culpa perferendis quia?
          </p>
          <br>
          <br>
          <p class="text-attri">
            Phone number: <br> 
            +63 00000000<br>
            +63 00000000<br><br>
            Email: 247inquirues@gmai.com
          </p>
          <br>
      <div class="contactform">
        <div class=section>
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.787935180228!2d123.63228371430911!3d13.487161107005784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a1b74e8bb4ab3d%3A0xafc47961da879dbf!2sBalikbayan%20Resort!5e0!3m2!1sen!2sph!4v1650181629618!5m2!1sen!2sph" style="border:cadetblue solid 2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="section2">
          <div class="formborder">
          <form action="#">
          <input type="text" id="name" name="name" placeholder="Name"><br><br>
          <input type="text" id="email" name="email" placeholder="Email"><br><br>
          <input type="number" id="phone" name="phone" placeholder="Phone"><br><br>
          <textarea id="comments" name="message" rows="10" cols="50" placeholder="Messages"></textarea><br>
          <br>
          <button type="button" id="btnn">Send</button>
          <br>
          <br>
        </div>
      </div>
      </div>
      </div>
    </div>

      <div class="testimonials">
        <div class="inner">
          <h1>Customer Reviews</h1>
          <div class="border"></div>

          <div class="card four">
            <div class="card-header">
                <p class="title">How was your journey?</p>
            </div>
    
            <div class="card-body">

                <textarea rows="10" placeholder="Please, leave a message"></textarea>
                <button class="cta">Submit feedback</button>
            </div>
    
            <div class="card-footer">
            </div>
        </div>
        <div class="border"></div>
          <div class="row">
            <div class="col">
              <div class="testimonial">

                <div class="name">Name</div>

                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
  
            <div class="col">
              <div class="testimonial">

                <div class="name">Name</div>
  
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
  
            <div class="col">
              <div class="testimonial">

                <div class="name">Name</div>
    
  
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include 'footer.php'?>
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

            const stars = document.querySelectorAll('.starsr i');
        const card = document.querySelector('.card');

        stars.forEach(function(star) {
            star.addEventListener('mouseover', function() {
                card.className = `card ${this.id}`
            })
        });
          </script>
</body>
</html>