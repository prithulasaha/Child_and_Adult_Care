<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nanny</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="nurse.css">

    
</head>
<body>


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
          $email = test_input($_POST["email"]);
          $sname = test_input($_POST["sname"]);
          
        
          
          $conn = new mysqli('localhost','root','','child_adult');
          $sql="insert into nanny (name, email, sname)values('$name','$email','$sname')";
          if (mysqli_query($conn, $sql)) {
            // $PassE= " successful";
            /*echo"successfull registration";
              header("Location:Home.php");*/
              echo '<script type="text/javascript">
    
                 window.onload = function () { alert("we will inform you via email!!!!!!"); }
    
                </script>';
             
          } else {
            // $PassE = "Registration failed";
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
            <a href="recruitment.html">recruitment</a>
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
    <section class="nurse">
        <div class="container">
            <h1>Our Team</h1>
            <div class="row">
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/9.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2401</h2>
                    <p>Wong May Nu</p> 
                    <p>Age: 27 years</p>
                    <p>Religion: Buddhist</p>
                    <p>Educational Qualification: HSC</p>
                    <p>Demanded Salary: 5000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/10.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2402</h2>
                    <p>Jannatul Fardous Jyoti</p>  
                    <p>Age: 30 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: HSC</p>
                    <p>Demanded Salary: 7000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/11.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2403</h2>
                    <p>Monika Akter</p> 
                    <p>Age: 21 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: SSC</p>
                    <p>Demanded Salary: 4000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/12.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2404</h2>
                    <p>Eity Roy</p>  
                    <p>Age: 30 years</p>
                    <p>Religion: Hindu</p>
                    <p>Educational Qualification: JSC</p>
                    <p>Demanded Salary: 5000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                

            </div>

        </div>
    </section>  
    <section class="nurse">
        <div class="container">
            <div class="row">
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/13.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2405</h2>
                    <p>Jidan Abrar</p>  
                    <p>Age: 27 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: HSC</p>
                    <p>Demanded Salary: 6000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/14.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2406</h2>
                    <p>Farida Begum Kathy</p>  
                    <p>Age: 25 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: JSC</p>
                    <p>Demanded Salary: 5000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/15.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2407</h2>
                    <p>Hafiza Khatun</p>  
                    <p>Age: 32 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: SSC</p>
                    <p>Demanded Salary: 8000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/16.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2408</h2>
                    <p>Dola Swift</p> 
                    <p>Age: 58 years</p>
                    <p>Religion: Christian</p>
                    <p>Educational Qualification: HSC</p>
                    <p>Demanded Salary: 7000TK</p>
                    <a href="nanny_review.php" class="btn">Review</a>
                </div>
                

            </div>

        </div>
    </section> 

    <section class="contact" id="contact">
        <h1 class="heading">Booking Form</h1>
        <form method="POST" action="">
            <div class="inputBox">
                <input type="text" placeholder="your name" required name="name">
                <input type="email" placeholder="email" required name="email">
            </div>
            <div class="inputBox">
                <textarea placeholder="Address"  id="" cols="30" rows="5" required name="add"></textarea>
                <select class="combo"  name="sname">
                    <option value="Select">Employee Code</option>
                    <option value="2401">2401</option>
                    <option value="2402">2402</option>
                    <option value="2403">2403</option>
                    <option value="2404">2404</option>
                    <option value="2405">2405</option>
                    <option value="2406">2406</option>
                    <option value="2407">2407</option>
                    <option value="2408">2408</option>
                 </select>
            </div>
            
            <input type="Submit" value="Send" class="btn1">
        </form>
       </section>
</body>
</html>