<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adult Course</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="enroll.css">
    <?php
$nameErr = $regnoErr = $emailErr = $websiteErr = $PassErr = $PassE = "";
$name = $regno = $email = $website = $password = $phn = $sname = $cname = $location =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 
      $sname = test_input($_POST["sname"]);
      $pay = test_input($_POST["pay"]);
      $tid = test_input($_POST["tid"]);
      
    
      
      $conn = new mysqli('localhost','root','','child_adult');
      $sql="insert into enroll1 (sname,pay,tid)values('$sname','$pay','$tid')";
      if (mysqli_query($conn, $sql)) {
        // $PassE= " successful";
        /*echo"successfull registration";
          header("Location:Home.php");*/
          echo '<script type="text/javascript">

             window.onload = function () { alert("Successfully Enrolled"); }

            </script>';
         
      } else {
        // $PassE = "Registration failed";
        echo"failed";
        
          }
            

}


  
?>

</head>
<body>
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
    <section class="contact" id="contact">
        <form method="POST" action="">
            <div class="title">
                <h1>Enroll into Your Course</h1>
            </div>
            <div class="inputBox">
                <select class="combo"  name="sname">
                    <option value="course">Course</option>
                    <option value="laughter">Laughter Therapy</option>
                    <option value="yoga">Yoga & Meditation</option>
                    <option value="exercise">Exercise & Fitness</option>
                 </select>
            </div>
            <div class="inputBox">
                <select class="combo"  name="pay">
                    <option value="method">Select Payment Method</option>
                    <option value="bkash">bKash</option>
                    <option value="rocket">Rocket</option>
                    <option value="nagad">Nagad</option>
                </select>
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Transaction ID" required name="tid" >
            </div>
            <input type="Submit" value="Send" class="btn1">
        </form>
        <div class="abc">
            <h1 class="title">Procedure</h1>
            <p>1. Bkash: Use Bkash app and choose the payment method. Enter this number (01521527202) as merchant number and write your course name as reference .</p>
            <p>2. Rocket: Use Rocket app and choose merchant pay and use this number (01725764440) as merchant number and kid2elders as merchant name.</p>
            <p>3. Nagad: Use Nagad app and choose merchant pay and use this number (01925987567) as merchant number.</p>
            <p>After using any of these methods keep the Transaction ID and fill it in the enroll form.</p>
        </div>
       </section>
</body>
</html>