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
    <title>Rapid Rescue Portal || Contact Page</title>


    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<style>
    


    /*Contact Us*/

    .contact_us_6 * {
      margin-top: 20px;
      font-family: Nunito, sans-serif;
    }
    
    .contact_us_6 .text-blk {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 0px;
      margin-left: 0px;
      line-height: 25px;
    }
    
    .contact_us_6 .responsive-cell-block {
      min-height: 75px;
    }
    
    .contact_us_6 input:focus,
    .contact_us_6 textarea:focus {
      outline-color: initial;
      outline-style: none;
      outline-width: initial;
    }
    
    .contact_us_6 .container-block {
      min-height: 75px;
      width: 100%;
      padding-top: 10px;
      padding-right: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      display: block;
    }
    
    .contact_us_6 .responsive-container-block {
      min-height: 75px;
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      margin-top: 0px;
      margin-right: auto;
      margin-bottom: 50px;
      margin-left: auto;
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 0px;
      padding-left: 0px;
    }
    
    .contact_us_6 .responsive-container-block.big-container {
      padding-top: 10px;
      padding-right: 30px;
      width: 35%;
      padding-bottom: 10px;
      padding-left: 30px;
      background-color: #03a9f4;
      position: absolute;
      height: 950px;
      right: 0px;
    }
    
    .contact_us_6 .responsive-container-block.container {
      position: relative;
      min-height: 75px;
      flex-direction: row;
      z-index: 2;
      flex-wrap: nowrap;
      align-items: center;
      justify-content: center;
      padding-top: 0px;
      padding-right: 30px;
      padding-bottom: 0px;
      padding-left: 30px;
      max-width: 1320px;
      margin-top: 0px;
      margin-right: auto;
      margin-bottom: 0px;
      margin-left: auto;
    }
    
    .contact_us_6 .container-block.form-wrapper {
      background-color: white;
      max-width: 450px;
      text-align: center;
      padding-top: 50px;
      padding-right: 40px;
      padding-bottom: 50px;
      padding-left: 40px;
      box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
      border-top-left-radius: 6px;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;
      border-bottom-left-radius: 6px;
      margin-top: 90px;
      margin-right: 0px;
      margin-bottom: 60px;
      margin-left: 0px;
    }
    
    .contact_us_6 .text-blk.contactus-head {
      font-size: 36px;
      line-height: 52px;
      font-weight: 900;
    }
    
    .contact_us_6 .text-blk.contactus-subhead {
      color: #9c9c9c;
      width: 300px;
      margin-top: 0px;
      margin-right: auto;
      margin-bottom: 50px;
      margin-left: auto;
      display: none;
    }
    
    .contact_us_6 .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 26px;
      margin-left: 0px;
      min-height: 50px;
    }
    
    .contact_us_6 .input {
      width: 100%;
      height: 50px;
      padding-top: 1px;
      padding-right: 15px;
      padding-bottom: 1px;
      padding-left: 15px;
      border-top-width: 2px;
      border-right-width: 2px;
      border-bottom-width: 2px;
      border-left-width: 2px;
      border-top-style: solid;
      border-right-style: solid;
      border-bottom-style: solid;
      border-left-style: solid;
      border-top-color: #eeeeee;
      border-right-color: #eeeeee;
      border-bottom-color: #eeeeee;
      border-left-color: #eeeeee;
      border-image-source: initial;
      border-image-slice: initial;
      border-image-width: initial;
      border-image-outset: initial;
      border-image-repeat: initial;
      font-size: 16px;
      color: black;
    }
    
    .contact_us_6 .textinput {
      width: 98%;
      min-height: 150px;
      padding-top: 20px;
      padding-right: 15px;
      padding-bottom: 20px;
      padding-left: 15px;
      border-top-width: 2px;
      border-right-width: 2px;
      border-bottom-width: 2px;
      border-left-width: 2px;
      border-top-style: solid;
      border-right-style: solid;
      border-bottom-style: solid;
      border-left-style: solid;
      border-top-color: #eeeeee;
      border-right-color: #eeeeee;
      border-bottom-color: #eeeeee;
      border-left-color: #eeeeee;
      border-image-source: initial;
      border-image-slice: initial;
      border-image-width: initial;
      border-image-outset: initial;
      border-image-repeat: initial;
      font-size: 16px;
    }
    
    .contact_us_6 .submit-btn {
      width: 98%;
      background-color: #03a9f4;
      height: 60px;
      font-size: 20px;
      font-weight: 700;
      color: white;
      border-top-width: 0px;
      border-right-width: 0px;
      border-bottom-width: 0px;
      border-left-width: 0px;
      border-top-style: outset;
      border-right-style: outset;
      border-bottom-style: outset;
      border-left-style: outset;
      border-top-color: #767676;
      border-right-color: #767676;
      border-bottom-color: #767676;
      border-left-color: #767676;
      border-image-source: initial;
      border-image-slice: initial;
      border-image-width: initial;
      border-image-outset: initial;
      border-image-repeat: initial;
      border-top-left-radius: 40px;
      border-top-right-radius: 40px;
      border-bottom-right-radius: 40px;
      border-bottom-left-radius: 40px;
    }
    

    .contact_us_6 .form-box {
      z-index: 2;
      margin-top: 100px !important;
      margin-right: 48px;
      margin-bottom: 0px;
      margin-left: 0px;
    }
    
    .contact_us_6 ::placeholder {
      color: #dadada;
    }
    
    .contact_us_6 .mob-text {
      display: block;
      text-align: left;
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 25px;
      margin-left: 0px;
    }
    
    .contact_us_6 .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-12.wk-ipadp-12 {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 20px;
      margin-left: 0px;
    }
    
    .contact_us_6 .text-blk.contactus-subhead.color {
      color: white;
    }
    
    .contact_us_6 .map-box {
      max-width: 800px;
      max-height: 520px;
      width: 100%;
      height: 520px;
      background-color: #d9d9d9;
      background-image: url("https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/sc23.png");
      background-size: cover;
      background-position-x: 50%;
      background-position-y: 50%;
    }
    
    .contact_us_6 .map-part {
      width: 100%;
      height: 100%;
    }
    
    .contact_us_6 .text-blk.map-contactus-head {
      font-weight: 900;
      font-size: 22px;
      line-height: 32px;
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 10px;
      margin-left: 0px;
      color: #03a9f4;
    }
    
    .contact_us_6 .text-blk.map-contactus-subhead {
      max-width: 300px;
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 20px;
      margin-left: 0px;
    }
    
    .contact_us_6 .social-media-links.mob {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 30px;
      margin-left: 0px;
      width: 230px;
      display: flex;
      justify-content: flex-start;
    }
    
    .contact_us_6 .link-img {
      width: 30px;
      height: 30px;
      margin-top: 0px;
      margin-right: 25px;
      margin-bottom: 0px;
      margin-left: 0px;
    }
    
    .contact_us_6 .link-img.image-block {
      margin-top: 0px;
      margin-right: 0px;
      margin-bottom: 0px;
      margin-left: 0px;
    }
    
    .contact_us_6 .social-icon-link {
      margin: 0 25px 0 0;
      padding: 0 0 0 0;
    }
    
    @media (max-width: 1024px) {
      .contact_us_6 .responsive-container-block.container {
        justify-content: center;
      }
    
      .contact_us_6 .map-box {
        position: absolute;
        top: 0px;
        max-height: 320px;
      }
    
      .contact_us_6 .map-box {
        max-width: 100%;
        width: 100%;
      }
    
      .contact_us_6 .responsive-container-block.container {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
      }
    
      .contact_us_6 .map-part {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    
      .contact_us_6 .container-block.form-wrapper {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
      }
    
      .contact_us_6 .mob-text {
        display: block;
      }
    
    
    
      .contact_us_6 .link-img {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        display: flex;
        justify-content: space-evenly;
      }
    
      .contact_us_6 .social-media-links.mob {
        justify-content: space-evenly;
      }
    
      .contact_us_6 .responsive-cell-block.wk-desk-7.wk-ipadp-12.wk-tab-12.wk-mobile-12 {
        text-align: center;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        flex-direction: row;
      }
    
      .contact_us_6 .text-blk.contactus-subhead {
        display: block;
      }
    
      .contact_us_6 .mob-text {
        text-align: center;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
      }
    
      .contact_us_6 .responsive-container-block.container {
        flex-wrap: wrap;
      }

      .contact_us_6 .form-box {
        margin-top: 200px;
        margin-right: 0px;
        margin-bottom: 40px;
        margin-left: 0px;
      }
    }
    
    @media (max-width: 768px) {
      .contact_us_6 .submit-btn {
        width: 100%;
      }
    
      .contact_us_6 .input {
        width: 100%;
      }
    
      .contact_us_6 .textinput {
        width: 100%;
      }
    
      .contact_us_6 .container-block.form-wrapper {
        margin-top: 80px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
      }
    
      .contact_us_6 .text-blk.input-title {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
      }
    
      .contact_us_6 .form-box {
        padding-top: 0px;
        padding-right: 20px;
        padding-bottom: 0px;
        padding-left: 20px;
      }
    
      .contact_us_6 .container-block.form-wrapper {
        padding-top: 50px;
        padding-right: 15px;
        padding-bottom: 50px;
        padding-left: 15px;
      }
    
      .contact_us_6 .mob-text {
        display: block;
      }
    
      .contact_us_6 .responsive-container-block.container {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
      }
    
      .contact_us_6 .form-box {
        margin-top: 200px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
      }
    
      .contact_us_6 .container-block.form-wrapper {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
      }
    
      .contact_us_6 .form-box {
        margin-top: 220px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
      }
    
      .contact_us_6 .form-box {
        margin-top: 220px;
        margin-right: 0px;
        margin-bottom: 50px;
        margin-left: 0px;
      }
    
      .contact_us_6 .text-blk.contactus-head {
        font-size: 32px;
        line-height: 40px;
      }
    }
    
    @media (max-width: 500px) {
      .contact_us_6 .container-block.form-wrapper {
        padding-top: 50px;
        padding-right: 15px;
        padding-bottom: 50px;
        padding-left: 15px;
      }
    
      .contact_us_6 .container-block.form-wrapper {
        margin-top: 60px;
        margin-right: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
      }
    
      .contact_us_6 .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6 {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 15px;
        margin-left: 0px;
      }
    
      .contact_us_6 .responsive-container-block {
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 35px;
        margin-left: 0px;
      }
    
      .contact_us_6 .text-blk.input-title {
        font-size: 12px;
      }
    
      .contact_us_6 .text-blk.contactus-head {
        font-size: 26px;
        line-height: 35px;
      }
    
      .contact_us_6 .input {
        height: 45px;
      }
    }

    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
</style>
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


<div class="contact_us_6">
  <div class="responsive-container-block container">
    <form class="form-box" id="contact-form">
      <div class="container-block form-wrapper">
        <div class="mob-text">
          <p class="text-blk contactus-head">
            Get in Touch
          </p>
        </div>
        <div class="responsive-container-block" id="i2cbk">
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
            <p class="text-blk input-title">
              FIRST NAME
            </p>
            <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
            <p class="text-blk input-title">
              EMAIL
            </p>
            <input class="input" id="ipmgh-3" name="Email" placeholder="Please enter email...">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
            <p class="text-blk input-title">
              PHONE NUMBER
            </p>
            <input class="input" id="imgis-3" name="PhoneNumber" placeholder="Please enter phone number...">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
            <p class="text-blk input-title">
              WHAT DO YOU HAVE IN MIND ?
            </p>
            <textarea class="textinput" id="i5vyy-3" placeholder="Please enter query..."></textarea>
          </div>
        </div>
        <button class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2">
          Submit
        </button>
      </div>
    </form>
    <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
      <div class="map-part">
        <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
          Reach us at
        </p>
        <p class="text-blk map-contactus-subhead">
        For immediate assistance, contact us at [+927894561236] or email us at [mail@RRS.com]. Your health is our priority!
        </p>
        <div class="social-media-links mob">
          <a class="social-icon-link" href="https://x.com/RapidRescue3" id="ix94i-2-2">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
          </a>
          <a class="social-icon-link" href="https://www.facebook.com/rapidrescuemedicalptyltd/" id="itixd">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
          </a>
          <a class="social-icon-link" href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&ifkv=ARpgrqfu1EgQ1lIzAiAVOGW6o6nVxSA5FwDTF46AD4kMBpMI-S66GEPS8zELo9AgNRSczWCjPEggUw&osid=1&passive=1209600&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-81555901%3A1726900711936023&ddm=0" id="izxvt">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
          </a>
          <a class="social-icon-link" href="https://www.instagram.com/rapid_rescue_lifesaving/?hl=en" id="izldf-2-2">
            <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
          </a>
        </div>
        <div class="map-box container-block">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const form = document.getElementById('contact-form');
  const inputFields = form.querySelectorAll('input, textarea');

  // Add the required attribute to each input field and textarea field
  inputFields.forEach((field) => {
    field.required = true;
  });

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (form.checkValidity()) {
      alert('Form submitted successfully!');
      form.reset(); // Clear the form
      // Reset the input fields to their default values
      inputFields.forEach((field) => {
        field.value = '';
      });
    } else {
      alert('Please fill in all required fields!');
    }
  });
</script>

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