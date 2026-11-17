<?php
session_start();
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
   
    $query = mysqli_query($con, "INSERT INTO tblambulancehiring (BookingNumber, PatientName, RelativeName, RelativeConNum, HiringDate, HiringTime, AmbulanceType, Address, City, State, Message) VALUES ('$bookingnum', '$pname', '$rname', '$phone', '$hdate', '$htime', '$ambulancetype', '$address', '$city', '$state', '$message')");

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
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title  -->
    <title>Rapid Rescue Portal || About Page</title>

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

  
<!-- Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="style1.css" rel="stylesheet"> 
</head>

<body>
  

<?php include_once('includes/header.php');?>

    <!-- ***** Breadcumb Area Start ***** -->
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(./assets/img/bus2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">About us</h3>
                        <p>We are a dedicated ambulance rescue team committed to delivering rapid, compassionate emergency care to our community, prioritizing patient safety and well-being above all else.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <div class="medilife-features-area section-padding-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="features-content">
                        <h2>We Are Always Prioritizing Our Patients Above All</h2>
                        <p>In every emergency, an ambulance rescue team's first priority is the well-being of the patient. From the moment they arrive on the scene, the team focuses on providing immediate, life-saving care and ensuring the patient’s safety. Whether it’s performing first aid, stabilizing critical conditions, or providing rapid transport to the hospital, every action is centered on the patient’s needs. The team works tirelessly to assess, treat, and monitor patients, putting their health and comfort at the forefront of every decision. This commitment ensures that no matter the circumstances, patients receive the highest standard of care.</p>
                        <!-- <a href="#" class="btn medilife-btn mt-50">View the services <span>+</span></a> -->
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="features-thumbnail">
                        <img src="./assets/img/bus.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Features Area End ***** -->



    <!-- ***** Skilss Area Start ***** -->
    <section class="our-skills-area text-center section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single-pie-bar" data-percent="90">
                        <canvas class="bar-circle" width="100" height="100"></canvas>
                        <h5>Care</h5>
                        <p>Immediate medical help.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single-pie-bar" data-percent="65">
                        <canvas class="bar-circle" width="100" height="100"></canvas>
                        <h5>Assessment</h5>
                        <p>Checking the patient's condition.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single-pie-bar" data-percent="85">
                        <canvas class="bar-circle" width="100" height="100"></canvas>
                        <h5>Transport</h5>
                        <p>Moving the patient safely.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single-pie-bar" data-percent="69">
                        <canvas class="bar-circle" width="100" height="100"></canvas>
                        <h5>Communication</h5>
                        <p>Informing the hospital.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single-pie-bar" data-percent="83">
                        <canvas class="bar-circle" width="100" height="100"></canvas>
                        <h5>Extrication</h5>
                        <p>Safely rescuing the patient.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <div class="single-pie-bar" data-percent="88">
                        <canvas class="bar-circle" width="100" height="100"></canvas>
                        <h5>Stabilization</h5>
                        <p>Keeping the patient stable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills Area End ***** -->

    <!-- ***** Tabs Area Start ***** -->
    <section class="medilife-tabs-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="medilife-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="institution-tab" data-toggle="tab" href="#institution" role="tab" aria-controls="institution" aria-selected="false">Triage</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faq-tab" data-toggle="tab" href="#faq" role="tab" aria-controls="faq" aria-selected="false">First Aid</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="specialities-tab" data-toggle="tab" href="#specialities" role="tab" aria-controls="specialities" aria-selected="true">Monitoring</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="laboratory-tab" data-toggle="tab" href="#laboratory" role="tab" aria-controls="laboratory" aria-selected="false">Coordination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="emergencies-tab" data-toggle="tab" href="#emergencies" role="tab" aria-controls="emergencies" aria-selected="false">Documentation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="scolarship-tab" data-toggle="tab" href="#scolarship" role="tab" aria-controls="scolarship" aria-selected="false">Decontamination</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="institution" role="tabpanel" aria-labelledby="institution-tab">
                                <div class="medilife-tab-content d-md-flex align-items-center">
                                    <!-- Medilife Tab Text  -->
                                    <div class="medilife-tab-text">
                                        <h2>Triage</h2>
                                        <p>In emergency situations, an ambulance team uses triage to evaluate and prioritize patients based on the severity of their injuries or illness. This ensures that those in critical condition receive immediate attention, while others are treated based on urgency. Triage is crucial, especially in mass casualty events, as it helps manage limited resources effectively. By quickly categorizing patients, the team can save more lives and prevent the situation from overwhelming medical personnel. This process requires both speed and accuracy to ensure the right decisions are made on the spot.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class="medilife-tab-img">
                                        <img src="./assets/img/Triage.jpg" alt="" style="width:490px !important;">
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                <div class="medilife-tab-content d-md-flex align-items-center">
                                    <!-- Medilife Tab Text  -->
                                    <div class="medilife-tab-text">
                                        <h2>First Aid</h2>
                                        <p>The ambulance team is trained to provide essential first aid on the scene of an accident or emergency. This can include controlling bleeding, bandaging wounds, splinting broken bones, or administering basic medications. First aid helps stabilize the patient and prevent further complications until more advanced care is available at the hospital. In some cases, first aid can be life-saving, like using a defibrillator or performing CPR. The team is also equipped to handle various conditions, from trauma to medical emergencies like heart attacks or strokes, with proper first aid.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class="medilife-tab-img">
                                        <img src="./assets/img/first-aid-kit.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="specialities" role="tabpanel" aria-labelledby="specialities-tab">
                                <div class="medilife-tab-content d-md-flex align-items-center">
                                    <!-- Medilife Tab Text  -->
                                    <div class="medilife-tab-text">
                                        <h2>Monitoring</h2>
                                        <p>During transport, the team continuously monitors the patient’s vital signs, including heart rate, respiration, oxygen levels, and blood pressure. This ongoing observation is vital to detect any changes in the patient’s condition. If the situation worsens, immediate interventions are made to keep the patient stable during the journey. Advanced monitoring equipment allows the team to track even subtle changes in health, ensuring timely responses to critical shifts. Continuous monitoring not only stabilizes the patient but also prepares hospital staff with up-to-date information upon arrival.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class="medilife-tab-img">
                                        <img src="./assets/img1/bg-img/tab.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="laboratory" role="tabpanel" aria-labelledby="laboratory-tab">
                                <div class="medilife-tab-content d-md-flex align-items-center">
                                    <!-- Medilife Tab Text  -->
                                    <div class="medilife-tab-text">
                                        <h2>Coordination</h2>
                                        <p> Ambulance teams often work alongside other emergency response units, such as police, firefighters, or search and rescue teams. Effective communication and coordination between these agencies ensure that rescue operations run smoothly, whether it’s clearing a path for the ambulance or providing additional resources during complex situations. In large-scale emergencies, coordination helps to divide responsibilities, ensuring that all areas of the crisis are covered. The ability to collaborate with diverse teams is essential, especially when handling natural disasters or multiple-vehicle accidents where multiple agencies are involved.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class="medilife-tab-img">
                                        <img src="./assets/img1/bg-img/medical1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="emergencies" role="tabpanel" aria-labelledby="emergencies-tab">
                                <div class="medilife-tab-content d-md-flex align-items-center">
                                    <!-- Medilife Tab Text  -->
                                    <div class="medilife-tab-text">
                                        <h2>Take a look at this</h2>
                                        <p>Detailed documentation is kept throughout the patient’s care. The ambulance team records vital information such as symptoms, treatments given, medications administered, and time-sensitive actions. This documentation is crucial for the receiving medical team at the hospital, as it provides a clear history of the patient's condition from the scene to the hospital. Proper documentation also serves legal and medical purposes, ensuring that there is a record of all procedures followed during transport. Additionally, this information can help in post-incident analysis and training.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class="medilife-tab-img">
                                        <img src="./assets/img/documentation.jpg" alt="" style="width:490px !important;">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="scolarship" role="tabpanel" aria-labelledby="scolarship-tab">
                                <div class="medilife-tab-content d-md-flex align-items-center">
                                    <!-- Medilife Tab Text  -->
                                    <div class="medilife-tab-text">
                                        <h2>Decontamination</h2>
                                        <p>After every emergency transport, the ambulance and all medical equipment are thoroughly cleaned and sanitized. This process is critical in preventing the spread of infections, especially after transporting patients with contagious diseases. Decontamination also ensures that the ambulance is prepared and safe for the next emergency call. This cleaning process includes sterilizing all surfaces, replacing disposable equipment, and using disinfectants on medical tools. The thoroughness of this procedure is essential, particularly in pandemic situations or when dealing with hazardous materials, to protect both future patients and the medical team.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class="medilife-tab-img">
                                        <img src="./assets/img/decontamination.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Tabs Area End ***** -->

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


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="./assets/js1/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="j./assets/s1/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="./assets/js1/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="./assets/js1/plugins.js"></script>
    <!-- Active js -->
    <script src="./assets/js1active.js"></script>

</body>

</html>