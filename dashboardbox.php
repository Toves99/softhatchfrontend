<?php
$id = $_GET['id'];
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://192.168.56.1:8080/api/v1/auth/listAllUserCourses/' . $id,
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>softhatch</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <style>
  #container {
    display: flex;
    flex-wrap: wrap;
    margin: 30px auto;
    margin-top:100px;
  }

  #container1 {
    flex: 0 0 17%;
    margin: 30px;
    padding: 30px;
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
    width: 100%;
  }
  #span1 {
    display: block;
    font-size: 15px;
    padding-bottom: 10px;
    position: relative;
    font-weight: 300;
   
    margin-top:-20px;
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
    margin-top: -50px;
    border: 0;
    border-radius: 10px;
    width: 100px;
    height:50px;
    cursor: pointer;
    margin-left:300px;
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <main id="mylearning">
  <div id="container" data-aos="fade-up">
  <?php 
      if (!empty($courseData) && isset($courseData['data']) && is_array($courseData['data'])): // Adjust according to your API response structure
          foreach ($courseData['data'] as $course): // Adjust according to your API response structure
            $description_words = str_word_count($course['course_description'], 1);
            $limited_description = implode(' ', array_slice($description_words, 0, 35));
  ?>
        <div id="container1">
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
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
          endforeach;
      else: 
  ?>
        <h3>No courses found</h3>
  <?php endif; ?>
</div>
  </main>
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Maw Institute</span>
          </a>
          <p>Unlock your software development and software engineering potential at Maw institute. Here, we transform aspiring software engineers and software developers into industry-ready professionals.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="termsAndCondition.php">Terms of service</a></li>
            <li><a href="privacy.php">Privacy policy</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Jaramogi Oginga Odinga University of Science and Technology, <br>
            Bondo, 40601<br>
            Kenya <br><br>
            <strong>Phone:</strong> +254704053999<br>
            <strong>Email:</strong> info@mawinstitute.co.ke<br>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
