<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit'])) {
    
    $bookingnum = mt_rand(100000000, 999999999);
    $pname = $_POST['pname'];
    $rname = $_POST['rname'];
    $phone = $_POST['phone'];
    $hdate = $_POST['hdate'];
    $htime = $_POST['htime'];
    $ambulancetype = $_POST['ambulancetype'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $message = $_POST['message'];
   
    $query = mysqli_query($con, "INSERT INTO tblambulancehiringuser (BookingNumber, PatientName, RelativeName, RelativeConNum, HiringDate, HiringTime, AmbulanceType, Address, City, State, Message) VALUES ('$bookingnum', '$pname', '$rname', '$phone', '$hdate', '$htime', '$ambulancetype', '$address', '$city', '$state', '$message')");

    if ($query) {
        echo "<script>alert('Your request has been sent successfully. Your Booking Number is: $bookingnum');</script>";
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Emergancy Ambulance Hiring Portal || Home Page</title>
 
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">





  

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--sidebar start-->
<?php include_once('includes/sidebar.php');?>
<!--sidebar end-->
<!--Header start-->
<?php include_once('includes/header.php');?>
<!--Header end-->


  <!-- =======================================================
  ======================================================== -->
</head>

<body>




   

    



    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hire an Ambulance</h2>
        </div>

        <form action="" method="post" role="form" class="form-control" data-aos="fade-up" data-aos-delay="100">
          <div class="row" style="padding-top:20px">
            <div class="col-md-4 form-group">
              <input type="text" name="pname" class="form-control" id="pname" placeholder="Enter Patient Name" required>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="rname" class="form-control" id="rname" placeholder="Enter Relative Name" required>
            </div>
           
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Relative Phone Number" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="date" name="hdate" class="form-control datepicker" id="hdate" placeholder="Hiring Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <input type="time" name="htime" class="form-control datepicker" id="htime" placeholder="Hiring Time" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="ambulancetype" id="ambulancetype" class="form-select">
                <option value="">Select Type of Ambulance</option>
                <option value="1">Basic Life Support (BLS) Ambulances</option>
                <option value="2"> Advanced Life Support (ALS) Ambulances</option>
                <option value="3">Non-Emergency Patient Transport Ambulances</option>
                <option value="4">Boat Ambulance</option>
                
               
              </select>
            </div>
          </div>
           <div class="row" style="padding-top:20px">
            <div class="col-md-4 form-group">
              <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" required>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" required>
            </div>
           
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
         
          <div class="text-center" style="padding-top: 20px;padding-bottom: 20px;"><button type="submit"  name="submit" class="btn btn-primary">Submit</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->



  </main><!-- End #main -->

  <?php include_once('includes/footer.php');?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>