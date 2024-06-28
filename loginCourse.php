<?php
session_start();
$title=$_GET['title'];
$description=$_GET['description'];
$cost=$_GET['cost'];
$duration=$_GET['duration'];
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => '192.168.56.1:8080/api/v1/auth/authenticate',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "email" => $email,
            "password" => $password
        )),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);
    $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    
    if ($http_status == 200) {
        $response_data = json_decode($response, true);
        $userId=$response_data['data']['id'];
        $token=$response_data['data']['token'];
        $statusCode=$response_data['statusCode'];
        $message=$response_data['message'];

        $_SESSION['user_id']=$userId;
        if (isset($statusCode)==200) {
          echo '<div class="divmess">
          <h1 class="h1">'.$message.'</h1>
          <a href="userCourseConfirm.php?title='.$title.'&description='.$description.'&cost='.$cost.'&duration='.$duration.'&userId='.$userId.'">
          <button class="btn1">Ok</button>
          </a>
          </div>';
        } elseif(isset($statusCode)==201) {
          echo '<div class="divmess">
          <h1 class="h1">'.$message.'</h1>
          <a href="login.php">
          <button class="btn1">Ok</button>
          </a>
          </div>';
        }
    } else {
      echo '<div class="divmess">
      <h1 class="h1">Network error occurred</h1>
      <a href="login.php">
      <button class="btn1">Ok</button>
      </a>
      </div>';
    }

   
    //echo 'userid=>',$userId;
} 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link rel="stylesheet" href="assets/css/loginstyle4.css">
    <style>
   .divmess{
    position:absolute;
    margin-top:150px;
    margin-left:400px;
    width:500px;
    height:350px;
    background-color:white;
    z-index: 10000;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
   }
   .h1{
    margin-left:90px;
    margin-top:110px;
    color:black;
   }
   .btn1{
    margin-left:200px;
    margin-top:180px;
    width:100px;
    height:50px;
    border-radius:10px;
    border:0;
    background-color:green;
    color:white;
   }
 </style>
</head>
<body>
    <div class="header">
  <a href="index.php">
	<h3>softhatch3</h3>
  </a>
	<p>Don't have an account?</p>
	<a href="signupCourse.php?title=<?php echo $title ?>&description=<?php echo $description ?>&cost=<?php echo $cost ?>&duration=<?php echo $duration ?>">
	<button>Sign Up</button>
	</a>
	</div>
    <div class="head">
      <h1>Log in to your account</h1> 
    </div>
    <form action="" method="POST">
	
	
        <div class="textfield">
            <label >Email <span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="text" name="email" placeholder="Enter your email">
        </div>

        <div class="textfield">
            <label>Password <span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="password" name="password" placeholder="Enter your password" id="password">
            <img src="image/close.png" alt="" class="passicon" id="eyeIcon">
        </div>

        <div class="btn">
            <input type="submit" name="submit" value="Login">
            <h6><?php //echo "companyid".$companyid;  ?></h6>
        </div>

        <div class="login">
		<a href="forgotpass.php">
            <p>Forgot Password?</p>
		</a>	
        </div>
    </form>
    <div>
      
    </div>
    <div class="sidebar">
      <img src="assets/img/backimage.png" alt="" >
    </div>


    <script>
  let eyeIcon = document.getElementById("eyeIcon");
  let password = document.getElementById("password");
  eyeIcon.onclick = function () {
    if (password.type == "password") {
      password.type = "text";
      eyeIcon.src = "image/open.png";
    } else {
      password.type = "password";
      eyeIcon.src = "image/close.png";
    }
  }

  let eyeIcon1 = document.getElementById("eyeIcon1");
  let password1 = document.getElementById("password1");
  eyeIcon1.onclick = function () {
    if (password1.type == "password") {
      password1.type = "text";
      eyeIcon1.src = "image/open.png";
    } else {
      password1.type = "password";
      eyeIcon1.src = "image/close.png";
    }
  }
</script>
</body>
</html>