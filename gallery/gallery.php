<?php
$ambulanceImages = [
    'img/picture/1.webp',
    'img/picture/3.webp',
    'img/picture/6.webp',
    'img/picture/7.webp',
    'img/picture/8.webp',
    'img/picture/9.webp',
    'img/picture/10.webp',
    'img/picture/11.webp',
    'img/picture/12.webp',
    'img/picture/13.webp',
   
];

$doctors = [
    'img/doctors/doctors-1.jpg',
    'img/doctors/doctors-2.jpg',
    'img/doctors/doctors-3.jpg',
    'img/doctors/doctors-4.jpg',
    ' img/gallery/gallery-5.jpg',
    ' img/gallery/gallery-1.jpg',
    ' img/gallery/gallery-8.jpg',

    ' img/gallery/gallery-4.jpg',
 
    ' img/gallery/gallery-6.jpg',
  

    
  

];
$testimonials = [
    'img/testimonials/testimonials-1.jpg',
    'img/testimonials/testimonials-2.jpg',
    'img/testimonials/testimonials-3.jpg',
    'img/testimonials/testimonials-4.jpg',
    'img/testimonials/testimonials-5.jpg',


];
$departmint = [
    
    'img/about.jpg',
    'img/departments-1.jpg',
    'img/departments-2.jpg',
    'img/departments-3.jpg',
    'img/departments-4.jpg',
    'img/departments-5.jpg',
    'img/features.jpg',
    ' img/gallery/gallery-2.jpg',
    ' img/gallery/gallery-3.jpg',
    ' img/slide/slide-1.jpg',
    ' img/slide/slide-2.jpg',
    ' img/gallery/gallery-7.jpg',
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">



    <title>Rapid Rescue Service Ambulance Gallery</title>
</head>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color:white;
    }

    h1 {
        font-family: 'Roboto', sans-serif;
        background-color: #F5F5F5;
        /* Light background */
        color: black;
        text-align: center;


    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
        padding: 15px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .gallery-item:hover .overlay {
        opacity: 1;
    }

    .text {
        color: white;
        font-size: 18px;
        text-align: center;
        padding: 10px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        color: #FFFFFF;
        /* White text for contrast */

    }
</style>

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
<link href="../assets/css/style.css" rel="stylesheet">

<!-- =======================================================
======================================================== -->

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="text-align: left;">
    <div class="container d-flex align-items-center">

      <a style="font-size: 18px;" href="../index.php" class="logo me-auto"><img src="../assets/img/RRS Logo Transparent background.png" style="max-height: 80px; padding-bottom: 25px;" alt="">Go back to home</a>
    
      
    <h1>AMBULANCES</h1>
    <div class="gallery">
        <?php foreach ($ambulanceImages as $image): ?>
            <div class="gallery-item">
                <img src="<?php echo $image; ?>" alt="Ambulance Image">
                <div class="overlay">
                    <div class="text">Emergency Response Vehicle</div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <h1>DOCTORS</h1>
    <div class="gallery">
        <?php foreach ($doctors as $image): ?>
            <div class="gallery-item">
                <img src="<?php echo $image; ?>" alt="Ambulance Image">
                <div class="overlay">
                    <div class="text">High Qualified Doctors</div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <h1>TESTIMONIALS</h1>
    <div class="gallery">
        <?php foreach ($testimonials as $image): ?>
            <div class="gallery-item">
                <img src="<?php echo $image; ?>" alt="Ambulance Image">
                <div class="overlay">
                    <div class="text">Our Export Testimonials</div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <h1>DEPARTMENT</h1>
    <div class="gallery">
        <?php foreach ($departmint as $image): ?>
            <div class="gallery-item">
                <img src="<?php echo $image; ?>" alt="Ambulance Image">
                <div class="overlay">
                    <div class="text">Department</div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>