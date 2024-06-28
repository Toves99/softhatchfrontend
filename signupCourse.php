<?php
$title=$_GET['title'];
$description=$_GET['description'];
$cost=$_GET['cost'];
$duration=$_GET['duration'];
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $conpassword=$_POST['conpassword'];

    if($password != $conpassword){
        echo '<div class="divmess">
        <h1 class="h1">Password does not match.</h1>
        <a href="signup.php">
        <button class="btn1">Ok</button>
        </a>
        </div>';
    }
    else{

        $postData=array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone_number' => $phone_number,
            'password' => $password,
        );
    
        // Initialize cURL session
        $curl = curl_init();
    
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => '192.168.56.1:8080/api/v1/auth/register',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
    
        // Execute cURL request and get response
        $response = curl_exec($curl);
    
        $userdetails=json_decode($response,true);
        $message=$userdetails['message'];
        $statusCode=$userdetails['statusCode'];
        if($statusCode==200){
            echo '<div class="divmess">
            <h1 class="h1">'.$message.'</h1>
            <a href="login.php">
            <button class="btn1">Ok</button>
            </a>
            </div>';
        }
        elseif($statusCode==201){
            echo '<div class="divmess">
            <h1 class="h1">'.$message.'</h1>
            <a href="signup.php">
            <button class="btn1">Ok</button>
            </a>
            </div>';
        }
        else{
            echo '<div class="divmess">
            <h1 class="h1">Error occurred</h1>
            <a href="signup.php">
            <button class="btn1">Ok</button>
            </a>
            </div>';
        }
        
        
        // Close cURL session
        curl_close($curl);
    
        // Output the response
    //    echo $response;
        // echo "<script>alert('$statusCode')</script>";

    }
  
    
        
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link rel="stylesheet" href="assets/css/signup.css">
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
            <h3>SoftHatch</h3>
        </a>
        <p>Already have an account?</p>
        <a href="loginCourse.php?title=<?php echo $title ?>&description=<?php echo $description ?>&cost=<?php echo $cost ?>&duration=<?php echo $duration ?>">
            <button>Log In</button>
        </a>
    </div>
    <div class="head">
        <h1>Create your account.</h1>
    </div>
    <form action="" method="POST">
        <!-- <div class="message">
            <?php 
           // if (!empty($message)) {
                //echo '<div class="message-content">' . htmlspecialchars($message) . '</div>';
                //echo '<button class="ok-btn" onclick="closeMessage()">OK</button>';
                //echo '<button class="close-btn" type="button" onclick="closeMessage()">X</button>';
           //}
            ?>
        </div> -->
        <div class="textfield">
            <label>FirstName<span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="text" name="first_name" placeholder="First Name">
        </div>
        <div class="textfield">
            <label>LastName<span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="text" name="last_name" placeholder="Last Name">
        </div>

        <div class="textfield">
            <label>Email<span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="textfield">
            <label>PhoneNumber<span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="text" name="phone_number" placeholder="PhoneNumber">
        </div>

        <div class="textfield">
            <label>Password<span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="password" name="password" placeholder="Enter your password" id="password">
            <img src="image/close.png" alt="" class="passicon" id="eyeIcon">
        </div>

        <div class="textfield">
            <label>Retype Password<span style="color: red;font-size:23px;margin-top:2px;position:absolute;">*</span></label>
            <input type="password" name="conpassword" placeholder="Enter your password" id="password1">
            <img src="image/close.png" alt="" class="passicon" id="eyeIcon1">
        </div>

        <div class="btn">
            <input type="submit" name="submit" value="Register">
        </div>

        
    </form>

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

        function closeMessage() {
            document.querySelector('.message').style.display = 'none';
        }
    </script>

</body>
</html>
