<?php
$title=$_GET['title'];
$description=$_GET['description'];
$cost=$_GET['cost'];
$duration=$_GET['duration'];
$userId=$_GET['userId'];
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $description = $_POST['course_description'];
    $cost = $_POST['cost'];
    $duration = $_POST['course_duration'];
    
        $postData=array(
            'title' => $title,
            'course_description' => $description,
            'cost' => $cost,
            'course_duration' => $duration,
            
        );
    
        // Initialize cURL session
        $curl = curl_init();
    
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => '192.168.56.1:8080/api/v1/auth/createUserCourse/'.$userId,
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
        if(isset($statusCode)==200){
            echo '<div class="divmess">
            <h1 class="h1">'.$message.'</h1>
            <a href="dashboard.php?id='.$userId.'">
            <button class="btn1">Ok</button>
            </a>
            </div>';
        }
        elseif(isset($statusCode)==201){
            echo '<div class="divmess">
            <h1 class="h1">'.$message.'</h1>
            <a href="dashboard.php">
            <button class="btn1">Ok</button>
            </a>
            </div>';
        }
        
        else{
            echo '<div class="divmess">
            <h1 class="h1">Error occurred</h1>
            <a href="dashboard.php">
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

?>

<html lang="en">
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
    <link rel="stylesheet" href="assets/css/confirmCourse.css">
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
    
    <form action="" method="POST">
	
    <h1 style="position:absolute;margin-left:40px;color:black;font-size:20px;">Title:<?php echo $title  ?></h1>
        <div class="textfield">
        
            <input type="hidden" name="title" value="<?php echo $title  ?>">
        </div>
         
        <h1 style="position:absolute;margin-left:40px;color:black;font-size:16px;">Description:<?php echo $description  ?></h1>
        <div class="textfield">
            <input type="hidden" name="course_description" value="<?php echo $description  ?>" id="password">
            
        </div>
        <h1 style="position:absolute;margin-left:40px;color:black;font-size:16px;margin-top:130px">Cost:<?php echo $cost  ?></h1>
        <div class="textfield">
            <input type="hidden" name="cost" value="<?php echo $cost  ?>" id="password">
            
        </div>
        <h1 style="position:absolute;margin-left:40px;color:black;font-size:16px;margin-top:150px">Duration:<?php echo $duration  ?></h1>
        <div class="textfield">
            <input type="hidden" name="course_duration" value="<?php echo $duration  ?>" id="password">
        </div>

        <div class="btn">
            <input type="submit" name="submit" value="Confirm Course">
            <h6><?php //echo "companyid".$companyid;  ?></h6>
        </div>
    </form>
    <div>
      
    </div>
</body>
</html>