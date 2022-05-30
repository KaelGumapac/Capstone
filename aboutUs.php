
<?php include 'navbar.php'; ?>
    
    <title>About us</title>
    <link rel="stylesheet" href="links/aboutUs/css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="icon" href="links/aboutUs/img/icons/zAS.png">

<style>
.history-text{
  font-size: 1.2rem;
  line-height: 2;
}
.history-title{
  color: cadetblue;
  font-style: italic;
  font-weight: 500;
}
</style>

  <div class="about">
    <div class="content">
      <div class="title">About Us</div>
      <br>
      <p class="history-text">In Sagnay, there is a National Highway connecting Camarines Sur and Tiwi. Along this stretched main road, one will find numerous beautiful beach lines. As Mr. Rogelio C. Villanueva, a quaint Bicolano business man, drove this way he saw its potential.
        He was immediately charmed by the pristine shore, thriving sea life, and the pleasant people of Barangay Bariis, a local town in its vicinity. But as any entrepreneur who has given up on the location, he was faced with one problem: lack of fresh water.
        Undeterred by this obstacle, and besides the fact of being an absolute stranger, he braved-up to ask the locals about their source. With their help, he was able to discover a property that had an unused, free-flowing source of spring water.
        From this, his vision of a resort was born. He found the property around March of 2004, and was very excited in developing the area as its location was quite favorable to the tourist: 15 minutes away from Philippine Geothermal Plant; 10 minute drive to Philippine Ceramics; 5 minutes away from Joroan Church; and certainly the perfect midpoint to those who want to view Mount Mayon in Mayon Rest House and wakeboarding in Camarines Sur.
        The main structure was half-completed when the storm Reming hit Albay on 2006. With the financial loss due to numerous damages to the land, not to mention the overwhelming expense to restart the project, it was understandable to close the whole thing down. But he saw it, not only as a healthy challenge, but as a blessing. It was a sign that his previous plan was still inadequate and must be revised. He scrapped everything, and started anew
        It was rebuilt with a stronger structural base, designed to survive extreme weathers. With its fully stocked bar, comfy cottages, six pools of varying depths and seven completely furnished room finished, guests were first welcomed to 24/7 Balikbayan Fun Resort on March 31, 2012, on Sabado de Gloria.,
        To date, the 24/7 Balikbayan Fun Resort will continue to grow so as to better serve our guests.</p>
        <br>
          <h2 class="history-title">Beach description</h2>
          <p class="history-text">The pristine beach in Tiwi is part of the Lagonoy Gulf, located near Atulayan Bay, and west of Cabugao Bay. Beachgoers will be pleased with the soft and clean sand, and the born-photographers will surely enjoy the rocky features of a small hill near the shore.</p>

    </div>
  </div>

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
