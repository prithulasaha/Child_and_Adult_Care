<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nanny_review</title>
    <link rel="stylesheet" href="review.css">
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
      $msg = test_input($_POST["msg"]);
    
      
      $conn = new mysqli('localhost','root','','child_adult');
      $sql="insert into nanny_rev (name, msg)values('$name','$msg')";
      if (mysqli_query($conn, $sql)) {
        // $PassE= " successful";
        /*echo"successfull registration";
          header("Location:Home.php");*/
          echo '<script type="text/javascript">

             window.onload = function () { alert("Successfully Send Message"); }

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
   

    <section class="review" id="review">
        <h1 class="heading">Client's Review</h1>
    
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
           <i class="fas fa-quote-right"></i>
            <div class="user"> 
                <div class="user-info">
                    <h3>Md Ariful Islam</h3>
                    <span>Happy Clinet</span>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
          </div>
          <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <div class="user-info">
                     <h3>Dr.Nusrat Jahan Nishat</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  
                Beatae ullam voluptates laborum natus quasi deserunt magnam odit! 
                Doloribus laudantium exercitationem quo possimus.
                 Minus illo inventore neque obcaecati alias a et?
            </p>
           </div>
           <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <div class="user-info">
                     <h3>Pranto Soumik Saha</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
           </div>
           <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <div class="user-info">
                     <h3>Shormishtha Paul</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
           </div>
           <div class="swiper-slide box">
            <i class="fas fa-quote-right"></i>
             <div class="user"> 
                 <div class="user-info">
                     <h3>Dr.Masudur Rahman</h3>
                     <span>Happy Clinet</span>
                 </div>
             </div>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ullam voluptates laborum natus quasi deserunt magnam odit! Doloribus laudantium exercitationem quo possimus. Minus illo inventore neque obcaecati alias a et?</p>
           </div>
        </div>
        
    
  </section>
    
<section class="contact" id="contact">
    <form method="POST" action="">
        <div class="inputBox">
            <input type="text" placeholder="name" required name="name">
        </div>
        <textarea placeholder="Give your review"  id="" cols="30" rows="10" required name="msg"></textarea>
        <input type="Submit" value="Send" class="btn1">
    </form>
   </section>
   
</body>
</html>