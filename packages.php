<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '192.168.0.102:8080/api/v1/auth/list_package_courses',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
if ($response === false) {
    echo 'cURL Error: ' . curl_error($curl);
    exit;
}

curl_close($curl);

$courseData = json_decode($response, true);

// Debug the API response
// echo '<pre>';
// print_r($courseData);
// echo '</pre>';
// die();

?>
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
  #container {
    display: flex;
    flex-wrap: wrap;
    margin: 30px auto;
  }

  #container1 {
    flex: 0 0 20%;
    margin: 10px;
    padding: 10px;
    box-sizing: border-box;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  }

  #img {
    width: 90px;
    height: 90px;
  }

  #h4 {
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 20px;
    color: black;
    width: 100%;
  }

  #p {
    width: 400px;
    margin: 10px 0 0 0;
    font-size: 15px;
    text-align: left;
    color:green;
    font-weight:700;
  }

  #member-info {
    padding-left: 20px;
  }

  #member:hover {
    transform: translateY(-10px);
  }

  #span2 {
    display: inline-block;
    font-size: 15px;
    padding-bottom: 15px;
    position: relative;
    font-weight: 300;
    /* font-family:Garamond; */
  }




  #span {
    display: block;
    font-size: 15px;
    padding-bottom: 15px;
    position: relative;
    font-weight: 300;
  }
  #span1 {
    display: block;
    font-size: 15px;
    padding-bottom: 10px;
    position: relative;
    font-weight: 300;
    margin-left:200px;
    margin-top:-53px;
  }

  #span::after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 1px;
    background: #cbd6e9;
    bottom: 0;
    left: 0;
  }

  #btn {
    margin-top: 10px;
    border: 0;
    border-radius: 10px;
    width: 100px;
    cursor: pointer;
    margin-left:100px;
    background-color: green;
    color:white;
  }

  /* Media query for screens with a maximum width of 600px */
  @media (max-width: 600px) {
    #container1 {
      flex: 1 1 100%;
    }

    #h4 {
      font-size: 14px;
    }

    #p {
      margin-top: 10px;
      font-size: 12px;
    }

    #span {
      font-size: 12px;
    }

    #btn {
      margin-left: 0;
      margin-top: 10px;
      width: 80px;
    }

    #img {
      width: 95px;
      height: 95px;
    }
  }

  /* Media query for screens with a minimum width of 601px and maximum width of 900px */
  @media (min-width: 601px) and (max-width: 900px) {
    #container1 {
      flex: 1 1 calc(50% - 20px);
    }
  }

  /* Media query for screens with a minimum width of 901px */
  @media (min-width: 901px) {
    #container1 {
      flex: 1 1 calc(33.33% - 20px);
    }
  }

  #ul {
    margin-left: -120px;
    width: 300px;
    height: auto;
    margin-top: 10px;
    position: absolute;
  }

  @media screen and (max-width: 768px) {
    #ul {
      margin-left: 47px;
      width: 200px;
      height: 90px;
      margin-top: 40px;
      position: absolute;
      height: 100px;
      border: 0;
      background-color: white;
    }

    #p {
      margin-top: 40px;
      width: 150%;
      font-size: 10px;
      text-align: left;
      margin-left: -130px;
    }
  }

  #ul1 {
    margin-left: -70px;
    width: 200px;
    margin-top: 20px;
    position: absolute;
  }

  @media screen and (max-width: 768px) {
    #ul1 {
      margin-left: 37px;
      width: 200px;
      height: 200px;
      margin-top: 30px;
      position: absolute;
      background-color: white;
      border: 0;
    }

    #p {
      margin-top: 40px;
      width: 150%;
      font-size: 10px;
      text-align: left;
      margin-left: -130px;
    }

    #mp {
      position: absolute;
      margin-left: 30px;
      font-size: 12px;
    }
  }

  #divme {
    width: 300px;
    height: 50px;
    background-color: white;
    border-bottom: 1px solid grey;
    border-top: 1px solid grey;
  }

  #mp {
    color: red;
    font-size: 16px;
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
  <main id="main">


<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>All Courses</h2>
      <p>Explore our professional courses.</p>
    </header>
    

    <div id="container" data-aos="fade-up">
  <?php 
      if(!empty($courseData) && isset($courseData)): // Adjust according to your API response structure
          foreach($courseData as $package): // Adjust according to your API response structure
              if(isset($package['courses'])) {
                $course = $package['courses'];
                $description_words = str_word_count($course['course_description'], 1);
                $limited_description = implode(' ', array_slice($description_words, 0, 25));
      ?>
        <div id="container1">
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/values-1.jpg" id="img" alt=""></div>
              <div id="member-info">
                <h4 id="h4"><?php echo htmlspecialchars($course['title']); ?></h4>
                <p id="p">Java,flutter</p>
                <span id="span"><?php echo htmlspecialchars($limited_description); ?></span>
                <span id="span2">Fee:Ksh <p style="font-weight:bold;margin-left:60px;margin-top:-23px;"><?php echo htmlspecialchars($course['cost']); ?></p></span>
                <span id="span1">Duration:<p style="font-weight:bold;margin-left:66px;margin-top:-22px;"><?php echo htmlspecialchars($course['course_duration']); ?></p></span>
                <a href="coursedetail.php?id=<?php echo $course["id"] ?>">
                  <button id="btn">Proceed <i class="bi bi-arrow-right-short"></i></button>
                </a>
              </div>
            </div>
          </div>
        </div>
  <?php 
              }
          endforeach;
      else: 
  ?>
        <h3>No courses found</h3>
  <?php endif; ?>
</div>

</section><!-- End Courses Section -->

<style>
  .course-box {
    margin-bottom: 30px;
    border: 2px solid #ddd;
    border-radius: 5px;
    transition: background-color 0.3s ease, border-color 0.3s ease;
    padding: 10px;
    height:400px;
    width: 350px;
  }
  .course-box h3{
    font-size: 16px;
    margin-left:110px;
    margin-top:-90px;
    font-weight:bold;
    width: 70%;
    text-align:left;
  
  }
  .course-box span{
    font-size: 14px;
    margin-left:110px;
    margin-top:-40px;
  }
  .course-box p{
    font-size: 13px;
    margin-left:100px;
    margin-top:20px;
  }
  .course-box img{
    width: 90px;
    height: 90px;
  }
  
  .course-box:hover {
    background-color: #f0f0f0;
    border-color: #aaa;
  }
  /* .course-footer {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    
  } */
  .course-box .cost {
    font-weight: bold;
    color: #333;
    margin-top:20px;
    /* margin-left:50px; */
    /* width: 60%; */
  }
  .course-box .duration {
    font-weight: bold;
    color: #333;
    margin-left:200px;
    top:-70px;
  }
  .enroll-button {
    text-align: center;
    margin-top: 10px;
  }
  .enroll-button button {
    padding: 10px 20px;
    background-color: #28a745;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
  }
  .enroll-button button:hover {
    background-color: #218838;
  }
</style>




    
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
