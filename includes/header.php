 <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
       <?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
      <div class="align-items-center d-none d-md-flex">
        <i class="bx bx-envelope"></i> Email:  <?php  echo $row['Email'];?>
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +<?php  echo $row['MobileNumber'];?>
      </div><?php } ?>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a style="font-size: 18px;" href="index.php" class="logo me-auto"><img src="assets/img/RRS Logo Transparent background.png" style="max-height: 80px; padding-bottom: 25px;" alt="">Rapid Rescue Services</a>
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php#hero">Home</a></li>
          <!-- About Dropdown -->
        <li class="dropdown">
          <a href="./about.php" class="nav-link scrollto">About 
            <span class="arrow">&#9660;</span>
          </a>
          <ul class="dropdown-content">
            <li><a href="gallery/gallery.php">Gallery</a></li>
            <li><a href="sitemap.php">SiteMap</a></li>
          </ul>
        </li>
           <li><a class="nav-link scrollto" href="./contact.php">Contact</a></li>
           <li><a class="nav-link scrollto" href="./user/login.php">User Login</a></li>
        <!-- Staff Login Dropdown -->
        <li class="dropdown">
          <a href="admin/login.php" class="nav-link scrollto">Staff Login 
            <span class="arrow">&#9660;</span>
          </a>
          <ul class="dropdown-content">
            <li><a href="driver emts/login.php">Driver / EMTs</a></li>
          </ul>
        </li>
          <li><a class="nav-link scrollto" style="color: red;" href="ambulance-tracking.php">Ambulance Tracking</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="index.php#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Hire an</span> Ambulance</a>

    </div>
  </header><!-- End Header -->