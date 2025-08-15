


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


<?php

$nameErr = $emailErr = $websiteErr = $PassErr = $PassE = "";
$name = $email = $website = $password = "";

if(isset($_POST['login'])){
    // $conn = new mysqli('localhost','root','','learning');
    // die("Error: sjjjjjjjjjjjjj"); 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
     }
     else {
        $emailErr = test_input($_POST["email"]);}
     if (empty($_POST["password"])) {
        $PassErr = "password reqired";
        }
        else {
            $password = test_input($_POST["password"]);
   
         }
         $conn = new mysqli('localhost','root','','child_adult');
         $sql = "SELECT * FROM user WHERE email = '$email' && password='$password'";
           $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
             if ($rowCount>0) {
           
                header("Location: home.php");
                
                
             }
             else{
                
                $PassE= "Login failed";
             }

 }
else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 
      $name = test_input($_POST["name"]);
      #$email = test_input($_POST["email"]);
      $email = test_input($_POST["email"]);
      $address = test_input($_POST["address"]);
      $phn = test_input($_POST["phn"]);
      $password = test_input($_POST["password"]);
     
      $conn = new mysqli('localhost','root','','child_adult');
      $sql = "SELECT * FROM user WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
       $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            die("Error: user already exist.");
            
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // array_push($errors, "Email is not valid");
            die("Error: Email is not valid");

           }
      else{
        $sql="insert into user (name,email,address,phn,password)values('$name','$email','$address','$phn','$password')"; 
      if (mysqli_query($conn, $sql)) {
        // $PassE= " successful";
        echo '<script type="text/javascript">

        window.onload = function () { alert("Registration successful"); }

          </script>';

      }}
    }

  
?>


<header class="header">
    <a href="#" class="logo">KID<span>2</span>ELDERS</a>
    <nav class="navbar">
            <a href="home.php#home">home</a>
            <a href="home.php#about">about</a>
            <a href="home.php#gallery">gallery</a>
            <a href="home.php#batch">batch</a>
           
            <a href="counselling.php">counselling</a>
            <div class="dropdown">
                <button class="dropbtn">home services
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  
                  <a href="nanny.php">nanny</a>
                  <a href="nurse.php">nurse</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Course
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  
                  <a href="child.php">for children</a>
                  <a href="adultc.php">for adults</a>
                </div>
            </div>
            <a href="recruitment.php">recruitment</a>
            <a href="payment.php">monthly fee</a>
            <a href="home.php#contact">contact</a>
            <div class="dropdown">
                <button class="dropbtn">Notice Board
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  
                  <a href="general.php">general notice</a>
                  <a href="appointment.php">appointment</a>
                  <a href="program.php">Recent Program Plan</a>
                </div>
            </div>
            
        </nav>
</header> 
<div class="wrapper">
        
    <div class="form-box login">
     <h2>Sign in</h2>
     <form  method="POST" action="">
        <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="text" name="name">
            <label>Email</label>
        </div>
        
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name="password">
            <label>Password</label>
        </div>
        
        <button type="submit" name="login" class="button"><a href="home.php">Sign in</a></button> 
        <!--<input type="submit" name="login" value="Sign in">-->
        <div class="login-signup">
            <p>Don't have an account? <a href="#" class="register-link">Sign up</a></p>
        </div>
     </form>
    </div>
    <div class="form-box register">
     <h2>Sign up</h2>
     <form method="POST" action="">
        <div class="input-box">
            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
            <input type="text" required name="name">
            <label>Username</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="email"></ion-icon></span>
            <label id="email-label">Email</label>
            <!--<input type="email" required>-->
            <input type="email" required name="email" spellcheck="false" id="email-field" onkeyup="validateEmail()">
            <span id="email-error"></span>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <input type="text" required name="address">
            <label>Your Address</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
            <input type="text" required name="phn">
            <label>Contact Number</label>
        </div>
        <div class="input-box">
            <input type="password"  required name="password">
            <label>Password</label>
            <img src="image/open_eye.png" alt="" id="eye">
        </div>

        <!--<input type="submit" name="submit" value="Sign Up"> -->
        <button type="submit" name="submit" value="register now" class="button"><a href="signin.php">Sign up</a></button> 
        <div class="login-signup">
            <p>Already have an account?<a href="#" class="login-link">Sign in</a></p>
        </div>
     </form>
    </div>
    
    
</div>

<script src="signin.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>