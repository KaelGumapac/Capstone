<?php $pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME); 
switch($pageName){
  case "home":
    $pageName = "Dashboard";
    break;
  case "reserved":
    $pageName = "Reserved";
    break;
  case "checkin":
    $pageName = "Check-in";
    break;
  case "records":
    $pageName = "Records";
    break;
  case "roompage":
    $pageName = "Rooms";
    break;
  case "roomscategory":
    $pageName = "Room Category";
    break;
  case "gallery":
    $pageName = "Gallery";
    break;
  case "users":
    $pageName = "Users";
    break;
  }

?>

<link rel="stylesheet" href="assets/css/navbar.css?v=<?php echo time(); ?>">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="sidebar">  
  <div class="logo-details">
      <i class='bx bx-bug'></i>
    <span class="logo_name">24/7 Balikbayan Fun resort</span>
  </div>

      <ul class="nav-links">
        <li><a href="home.php" ><i class='bx bx-grid-alt' ></i><span class="links_name">Dashboard</span></a></li>
        <li><a href="reserved.php" ><i class='bx bx-box' ></i><span class="links_name">Reserved</span></a></li>
        <li><a href="checkin.php" ><i class='bx bx-pie-chart-alt-2' ></i><span class="links_name">Check-in</span></a></li>
        <li><a href="roompage.php" ><i class='bx bx-box' ></i><span class="links_name">Rooms</span></a></li>
        <li><a href="roomscategory.php" ><i class='bx bx-list-ul' ></i><span class="links_name">Room category</span></a></li>
        <li><a href="gallery.php?" ><i class='bx bx-list-ul' ></i><span class="links_name">Gallery</span></a></li>
        <?php if($_SESSION['usertype'] == 'superadmin'): ?>
        <li><a href="records.php" ><i class='bx bx-coin-stack' ></i><span class="links_name">Records</span></a></li>
        <li><a href="users.php" ><i class='bx bx-book-alt' ></i><span class="links_name">Users</span></a></li>
        <li><a href="activity_logs.php" ><i class='bx bx-book-alt' ></i><span class="links_name">Activity Logs</span></a></li>
        <?php endif;?>
        <li class="log_out"><a href="logout.php"><i class='bx bx-log-out'></i><span class="links_name">Log out</span></a></li>  
      </ul>
</div>

  <!-- Topbar -->
<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard"><?php echo $pageName;?></span>
      </div>
      

<!--Admin profile-->
            <div class="profile-details">
        <img src="img/sample.png" alt="">
        <span class="admin_name"><?php echo $_SESSION['name']?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <script src="js/script.js"></script>