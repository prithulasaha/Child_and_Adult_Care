<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>




<?php
$nameErr = $regnoErr = $emailErr = $websiteErr = $PassErr = $PassE = "";
$name = $regno = $email = $website = $password = $phn = $sname = $cname = $location =  "";
$fname = $lname = $db = $gname = $ffname = $flname = $fphn = $femail = $mfname = $mlname = $mphn = $memail = $pname = $pphn = $ppname = $ppphn = $sname = $tid = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 
      $fname = test_input($_POST["fname"]);
          $lname = test_input($_POST["lname"]);
          #$db = test_input($_POST["db"]);
          $db=date('Y-m-d', strtotime($_POST["db"]));
          $gname = test_input($_POST["gname"]);
          $ffname = test_input($_POST["ffname"]);
          $flname = test_input($_POST["flname"]);
          $fphn = test_input($_POST["fphn"]);
          $femail = test_input($_POST["femail"]);
          $mfname = test_input($_POST["mfname"]);
          $mlname = test_input($_POST["mlname"]);
          $mphn = test_input($_POST["mphn"]);
          $memail = test_input($_POST["memail"]);
          $pname = test_input($_POST["pname"]);
          $pphn = test_input($_POST["pphn"]);
          $ppname = test_input($_POST["ppname"]);
          $ppphn = test_input($_POST["ppphn"]);
          $sname = test_input($_POST["sname"]);
          $tid = test_input($_POST["tid"]);
          
    
      
      $conn = new mysqli('localhost','root','','child_adult');
      $sql="INSERT INTO toddler (fname,lname,db,gname,ffname,flname,fphn,femail,mfname,mlname,mphn,memail,pname,pphn,ppname,ppphn,sname,tid) values('$fname','$lname','$db','$gname','$ffname','$flname','$fphn','$femail','$mfname','$mlname','$mphn','$memail','$pname','$pphn','$ppname','$ppphn','$sname','$tid')"; 
      if (mysqli_query($conn, $sql)) {
        echo '<script type="text/javascript">

             window.onload = function () { alert("Admission is completed!!!"); }

            </script>';
         
         
      } else {
        
        echo"failed";
        
        
          }
            

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
    

<section class="contact" id="contact">
    
    <form method="POST" action="">
        <div class="title">
            <h1>Toddler Admission Form</h1>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="First Name" required name="fname">
            <input type="text" placeholder="Last Name" required name="lname">
        </div>
        <div class="inputBox">
            <input type="date" placeholder="Date of birth" required name="db" >
            <select class="combo"  name="gname">
                <option value="gender">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Father's First Name" required name="ffname">
            <input type="text" placeholder="Father's Last Name" required name="flname">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Phone Number" required name="fphn">
            <input type="emial" placeholder="Email" required name="femail">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Mother's First Name" required name="mfname">
            <input type="text" placeholder="Mother's Last Name" required name="mlname">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Phone Number" required name="mphn">
            <input type="emial" placeholder="Email" required name="memail">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Person name authorized to pick up child " required name="pname">
            <input type="text" placeholder="Phone Number" required name="pphn">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Person name to call in emergency" required name="ppname">
            <input type="text" placeholder="Phone Number" required name="ppphn">
        </div>
        <div class="inputBox">
            
            <select class="combo"  name="sname">
                <option value="method">Select Payment Method</option>
                <option value="bkash">bKash</option>
                <option value="rocket">Rocket</option>
                <option value="nagad">Nagad</option>
            </select>
            <input type="text" placeholder="Transaction ID" required name="tid" >
        </div>
        <input type="Submit" value="SUBMIT" class="btn">
    </form>
    <div class="abc">
        <h1 class="title">Procedure</h1>
        <p>1. Bkash: Use Bkash app and choose the payment method. Enter this number (01521527202) as merchant number and give reference toddler.</p>
        <p>2. Rocket: Use Rocket app and choose merchant pay and use this number (01725764440) as merchant number and kid2elders as merchant name.</p>
        <p>3. Nagad: Use Nagad app and choose merchant pay and use this number (01925987567) as merchant number.</p>
        <p>After using any of these methods keep the Transaction ID and fill it in the admission form.</p>
    </div>
   </section>

</body>
</html>