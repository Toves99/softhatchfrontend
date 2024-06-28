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
    .container {
      max-width: 1500px;
      margin: 100px auto;
      width: 100%;
    }
    table {
      border: 1;
      margin-top: -40px;
      border-collapse: collapse;
      width: 80%;
      border-radius: 5px 5px 0 0;
      overflow: hidden;
      box-shadow: 0 0 28px rgba(0, 0, 0, 0.15);
      margin-left:100px;
    }
    table th {
      background-color: green;
      color: white;
      padding: 10px;
      font-size:15px;
      text-align:center;
    }
    table td {
      padding: 10px;
      color: black;
      font-size: 14px;
      text-align: left;
    }
    table td, th {
      padding: 1px 15px;
    }
    table tr {
      border-bottom: 1px solid #dddddd;
    }
    table tr:nth-of-type(even) {
      background: #f3f3f3;
    }
    table tr:last-of-type {
      border-bottom: 2px solid grey;
    }
    tr[data-href] {
      cursor: pointer;
    }
    tr[data-href]:hover {
      background-color: blue;
      color: white;
    }
    .error-message {
      text-align: center;
      font-size: 23px;
      background-color: white;
      color: black;
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
    <div class="container">
      <table>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Cost</th>
          <th>Duration</th>
        </tr>
        <?php
        if (!empty($courseData) && isset($courseData['data']) && is_array($courseData['data'])) {
            foreach ($courseData['data'] as $course) {
              $description_words = str_word_count($course['course_description'], 1);
              $limited_description = implode(' ', array_slice($description_words, 0, 20));
                echo "
                <tr data-href='#'>
                  <td>{$course['title']}</td>
                  <td>{$limited_description}</td>
                  <td>{$course['cost']}</td>
                  <td>{$course['course_duration']}</td>
                </tr>
                ";
            }
        } else {
            echo "
            <tr data-href='course-login.php'>
              <td colspan='4' class='error-message'>You have not applied for any course. Please click here to apply.</td>
            </tr>
            ";
        }
        ?>
      </table>
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
