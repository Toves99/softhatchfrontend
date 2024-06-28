
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Soft hatch solution</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
  /* Default styles */

  #h2 {
    margin-left: 50px;
    margin-top: 50px;
    font-size:30px;
    color:black;
    font-family:Garamond;
    font-weight: 700;
    width:55%;
    text-align:left;
  }

  #input {
    margin-top: -30px;
    position: absolute;
    width: 20px;
    background: rgb(225, 230, 233);
    border: rgb(225, 230, 233);
    color: rgb(225, 230, 233);
  }

  #input1 {
    width: 600px;
    text-align: left;
    height: 70px;
    font-size: 25px;
    font-weight: bold;
    border: none;
    background-color: rgb(225, 230, 233);
  }

  #span {
    position: absolute;
    margin-left: 50px;
    margin-top: 20px;
     width: 50%;
  }

  #input3 {
    width: 350px;
    text-align: left;
    border: none;
    background-color: rgb(225, 230, 233);
    font-size: 18px;
  }

  #p {
    margin-left: 40px;
    margin-top: 15px;
    font-size: 18px;
    width: 650px;
  }

  #btn {
    margin-left: 50px;
    margin-top: 170px;
    width: 140px;
    height: 70px;
    border: 0;
    border-radius: 7px;
    background: green;
    color: white;
  }

  #div1 {
    width: 420px;
    height: 350px;
    position:fixed;
    background: white;
    margin-left: 810px;
    margin-top: -60px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    
  }

  #h4 {
    margin-top: 25px;
    position: absolute;
    font-size: 20px;
    font-weight: bold;
    margin-left: 20px;
  }

  #p1 {
    width: 370px;
    position: absolute;
    margin-top: 60px;
    margin-left: 20px;
    font-size: 14px;
    color: grey;
  }

  #span1 {
    background: lightgrey;
    width: 420px;
    height: 2px;
    position: absolute;
    margin-top: 120px;
  }

  #span2 {
    position: absolute;
    margin-top: 150px;
    margin-left: 20px;
    font-size: 17px;
  }

  #span3 {
    position: absolute;
    margin-top: 180px;
    margin-left: 40px;
    font-size: 18px;
    font-weight: bold;
  }

  #input4 {
    background: white;
    border: none;
    font-weight: bold;
    font-size: 18px;
  }

  #span4 {
    position: absolute;
    margin-top: 150px;
    margin-left: 220px;
    font-size: 17px;
  }

  #span5 {
    position: absolute;
    margin-top: 180px;
    margin-left: 230px;
    font-size: 18px;
    font-weight: bold;
  }

  #input5 {
    background: white;
    border: none;
    font-weight: bold;
    font-size: 18px;
    margin-left: 200px;
    margin-top: -90px;
    width: 100px;
  }

  #span6 {
    position: absolute;
    margin-top: 300px;
    margin-left: 150px;
    font-style: italic;
  }
  #message {
    margin-left:300px;
    margin-top:-400px;
    position:fixed;
    background:whitesmoke;
    width:800px;
   display:none;
    height:300px; 
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);

    
  }
  #btn1{
    width:100px;
    height:40px;
    background:blue;
    position:absolute;
    margin-left:380px;
    margin-top:230px;
    border:0;
    color:white;
  }
  #pm{
    position:absolute;
    margin-top:100px;
    width:97%;
    text-align:justify;
    margin-left:10px;
    margin-right:10px;
  }

  /* Media Queries */

  @media (max-width: 768px) {
    /* Adjustments for smaller screens */
    #div1 {
      width: 100%;
      margin-left: 0;
      margin-top: 0;
      height: 300px;
    }

    #h2 {
      margin-left: 20px;
    }

    #h4,
    #p1,
    #span1,
    #span2,
    #span3,
    #input4,
    #span4,
    #span5,
    #input5,
    #span6 {
      position: relative;
      margin-left: 1;
      
    }

    #message {
      margin-left: 0;
      margin-top: 0;
      width: 100%;
      height: auto;
      display:none;
    }

    #btn1 {
      margin-left: 20px;
      margin-top: 10px;
      
    }

    #pm {
      margin-left: 10px;
      margin-right: 10px;
      
      
    }
    #btn {
    margin-left: 30px;
    margin-top: 20px;
    width: 100px;
    height: 50px;
    border: 0;
    border-radius: 7px;
    background: blue;
    color: white;
  }
  #a1{
    color:blue;
    position: absolute;
    margin-top:40px;
    width:100px;
    margin-left:-150px;
  }
  #input1 {
      width: 100%;
      font-size:10px;
      color:black;
      margin-left: -10px;
    }

    #input3 {
      width: 90%;
      color:black;
      font-size: 14px;
      margin-left: -30px;
    }

    #p {
      width: 90%;
      font-size: 14px;
      margin-left: 10px;
      color: black;
      
    }
  }

  @media (max-width: 480px) {
    /* Adjustments for even smaller screens */
    #input1 {
      width: 100%;
      font-size:10px;
      color:black;
      margin-left: -10px;
    }

    #input3 {
      width: 90%;
      color:black;
      font-size: 14px;
      margin-left: -30px;
    }

    #p {
      width: 90%;
      font-size: 14px;
      margin-left: 10px;
      color: black;
      
    }
  }
  #ul{
    margin-left:-120px;
    width:300px;
    height:auto;
    margin-top:10px;
    position:absolute;
  }
  @media screen and (max-width: 768px) {
    #ul{
    margin-left:47px;
    width:200px;
    height:90px;
    margin-top:40px;
    position:absolute;
    height:100px;
    border:0;
    background-color:white;
  }
  }
  #ul1{
    margin-left:-70px;
    width:200px;
    margin-top:20px;
    position:absolute;
  }
  @media screen and (max-width: 768px) {
    #ul1{
    margin-left:37px;
    width:200px;
    height:200px;
    margin-top:30px;
    position:absolute;
    background-color:white;
    border:0;
  }
  #mp{
    position: absolute;
    margin-left: 30px;
    font-size: 14px;
    font-weight: 0;
  }
  }
  #a1{
    color:blue;
  }
  #divme{
    width:300px;
    height:50px;
    background-color:white;
    border-bottom:1px solid grey;
    border-top:1px solid grey;
    
  }
  #mp{
    color:red;
    font-size:18px;
    font-weight:700;
  }
</style>

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>softhatch</span>
        <h5> solutions</h5>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="service.html">Our Services</a></li>

          <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
           <ul>
             <li><a href="allcourse.php">All Courses</a></li>
             <li><a href="accounting.php">Accounting Packages Training</a></li>
             <li><a href="business.php">Business Development Training</a></li>
             <li><a href="packages.php">Computer Packages Training</a></li>
             <li><a href="digital.php">Digital and Social Media Marketing Training</a></li>
             <li><a href="media.php">Media and Entertainment Training</a></li>
             <li><a href="software.php">Software Engineering Training</a></li>
             <li><a href="program.php">Programming Languages Training</a></li>
             <li><a href="portfolio.php">Personal Portfolio Training</a></li>
             <li><a href="trending.php">Trending Technologies Training</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="career.html">Career</a></li>
          <li class="dropdown"><a href="#"><span>about</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="terms.html">Terms of service & Privacy</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="csrsol.html">Solutions for & CSR</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.html">Contact Us</a></li>
          <li><a class="getstarted scrollto" href="login.php">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="courses">
  <?php
if (!isset($_GET['id'])) {
    echo 'No course ID provided.';
    exit;
}

$courseId = $_GET['id'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '192.168.56.1:8080/api/v1/auth/getCourseById/' . $courseId,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

// print_r($response);
// die()
if ($response === false) {
    echo 'cURL Error: ' . curl_error($curl);
    exit;
}

curl_close($curl);

$courseDetail = json_decode($response, true);

?>

    <section style="background-color: rgb(225, 230, 233);height:auto;">
    <h2 id="h2">
    <?php echo htmlspecialchars($courseDetail['title']); ?></h2>
    <span id="span">
      <?php echo htmlspecialchars($courseDetail['course_description']); ?></span>
    <div id="div1">
    <h4 id="h4">Professional certficate of completion <br>
    </h4>
    <p id="p1">You will be issued with a certficate of completion at the end of the training
    </p>
    <span id="span1"></span>

    <span id="span2">Course Fee(Ksh):</span>
    <span id="span3">
    <?php echo htmlspecialchars($courseDetail['cost']); ?></span>

    <span id="span4">Duration:</span>
     <span id="span5">
    <?php echo htmlspecialchars($courseDetail['course_duration']); ?>
    </span>
    <span id="span6">
      <a href="course-login.php" id="a1">View courses</a>
    </span>
    </div>
    <a href="loginCourse.php?title=<?php echo $courseDetail['title'] ?>&description=<?php echo $courseDetail['course_description'] ?>&cost=<?php echo $courseDetail['cost']?>&duration=<?php echo $courseDetail['course_duration']   ?>">
    <button type="submit" id="btn"name="submit" >Apply</button>
    </a>
   <!--- <div id="message">
      <p id="pm"> 
        <?php
        //echo $messageToUser;
        ?>
      </p>
      <button id="btn1">Ok</button>
    </div>--->
    </section>
  
  </main><!-- End #main -->

     <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h4>Our Newsletter</h4>
        <p>Stay updated with the latest in software innovation, product updates, and exclusive offers by subscribing to our newsletter</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row align-items-center"> <!-- Removed gy-4 and justify-content-center -->
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
          <span>Softhatch</span>
        </a>
        <p>All rights reserved. | Empowering innovation through collaboration.</p>
      </div>
      <div class="col-lg-7 col-md-12 d-flex justify-content-end align-items-center"> <!-- Adjusted this column -->
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
</footer><!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
