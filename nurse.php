<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nurse</title>
    
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
          $sql="insert into nurse (name, email, sname)values('$name','$email','$sname')";
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
    <section class="nurse">
        <div class="container">
            <h1>Our Team</h1>
            <div class="row">
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/1.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2301</h2>
                    <p>Prithula Saha Pritha</p> 
                    <p>Age: 27 years</p>
                    <p>Religion: Hindu</p>
                    <p>Educational Qualification: B.Sc. in post basic nursing course</p>
                    <p>Experience: Evercare Hospital,Chattogram</p>
                    <p>Demanded Salary: 18000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/2.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2302</h2>
                    <p>Md.Piyash Ali</p>  
                    <p>Age: 30 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: Associate degree in nursing</p>
                    <p>Experience: Evercare Hospital,Chattogram</p>
                    <p>Demanded Salary: 15000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/3.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2303</h2>
                    <p>Nabiha Fiza</p> 
                    <p>Age: 25 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: Doctor of Nursing Practice</p>
                    <p>Experience: Anwer Khan Modern Hospital Ltd,Dhaka</p>
                    <p>Demanded Salary: 17000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/4.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2304</h2>
                    <p>Lisa Gomez</p>  
                    <p>Age: 59 years</p>
                    <p>Religion: Christian</p>
                    <p>Educational Qualification: Master of Science in Nursing(MSN)</p>
                    <p>Experience: Aysha Memorial Specialised Hospital,Dhaka</p>
                    <p>Demanded Salary: 20000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
                </div>
                

            </div>

        </div>
    </section>  
    <section class="nurse">
        <div class="container">
            <div class="row">
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/5.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2305</h2>
                    <p>Mostak Mahmud</p>  
                    <p>Age: 27 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: Doctor of Nursing Practice</p>
                    <p>Experience: Care Zone Hospital, Dhaka</p>
                    <p>Demanded Salary: 16000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/6.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2306</h2>
                    <p>Samia Rahman</p>  
                    <p>Age: 45 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: B.Sc. in post basic nursing course</p>
                    <p>Experience: Evercare Hospital,Chattogram</p>
                    <p>Demanded Salary: 18000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/7.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2307</h2>
                    <p>Arefin Labib</p>  
                    <p>Age: 50 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: Nursing Diploma</p>
                    <p>Experience: Bangladesh Specialized Hospital</p>
                    <p>Demanded Salary: 20000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
                </div>
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="image/8.jpg" alt="" class="img-responsive">
                    </div>
                    <h2>Code: 2308</h2>
                    <p>Md.Alam Miah</p> 
                    <p>Age: 30 years</p>
                    <p>Religion: Muslim</p>
                    <p>Educational Qualification: CNA (Diploma or Certificate)</p>
                    <p>Experience: Dhaka Shishu Hospital</p>
                    <p>Demanded Salary: 17000TK</p>
                    <a href="nurse_review.php" class="btn">Review</a>
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
                    <option value="2301">2301</option>
                    <option value="2302">2302</option>
                    <option value="2303">2303</option>
                    <option value="2304">2304</option>
                    <option value="2305">2305</option>
                    <option value="2306">2306</option>
                    <option value="2307">2307</option>
                    <option value="2308">2308</option>
                 </select>
            </div>
            
            <input type="Submit" value="Send" class="btn1">
        </form>
       </section>
</body>
</html>