<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>monthly fee</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
      $name = test_input($_POST["name"]);
      $id = test_input($_POST["id"]);
      $sname = test_input($_POST["sname"]);
      $month = test_input($_POST["month"]);
      $pay = test_input($_POST["pay"]);
      $tid = test_input($_POST["tid"]);
      
    
      
      $conn = new mysqli('localhost','root','','child_adult');
      $sql="insert into monthly_pay (name,id,month,sname,pay,tid)values('$name','$id','$month','$sname','$pay','$tid')";
      if (mysqli_query($conn, $sql)) {
        // $PassE= " successful";
        /*echo"successfull registration";
          header("Location:Home.php");*/
          echo '<script type="text/javascript">

             window.onload = function () { alert("Payment is done"); }

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
                <h1>Monthly Payment Form</h1>
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Name" required name="name">
                <input type="text" placeholder="ID" required name="id">
            </div>
            <div class="inputBox">
                <select class="combo"  name="sname">
                    <option value="batch">Batch</option>
                    <option value="infant">Infant</option>
                    <option value="toddler">Toddler</option>
                    <option value="preschool">Early Preschool</option>
                    <option value="sunshine">SunShine</option>
                    <option value="miniminds">MiniMinds</option>
                    <option value="tinytreasure">TinyTreasure</option>
                    <option value="a">Batch:A</option>
                    <option value="b">Batch:B</option>
                    <option value="c">Batch:C</option>
                </select>
                <select class="combo"  name="month">
                    <option value="month">Month</option>
                    <option value="jan">January</option>
                    <option value="feb">February</option>
                    <option value="mar">March</option>
                    <option value="apr">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="aug">August</option>
                    <option value="sep">September</option>
                    <option value="oct">October</option>
                    <option value="nov">November</option>
                    <option value="dec">December</option>
                </select>
            </div>
           <div class="inputBox">
                 <select class="combo"  name="pay">
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
            <p>1. Bkash: Use Bkash app and choose the payment method. Enter this number (01521527202) as merchant number and give reference infant.</p>
            <p>2. Rocket: Use Rocket app and choose merchant pay and use this number (01725764440) as merchant number and kid2elders as merchant name.</p>
            <p>3. Nagad: Use Nagad app and choose merchant pay and use this number (01925987567) as merchant number.</p>
            <p>After using any of these methods keep the Transaction ID and fill it in the admission form.</p>
        </div>
        
       </section> 
</body>
</html>