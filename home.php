<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child And Adult Care</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   


<?php
$nameErr = $regnoErr = $emailErr = $websiteErr = $PassErr = $PassE = "";
$name = $regno = $email = $website = $password = $phn = $sname = $cname = $location =  "";



if (isset($_SESSION['email'])) {
    $isLoggedIn = true;
} else {
    $isLoggedIn = false;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $phn = test_input($_POST["phn"]);
      $sname = test_input($_POST["sname"]);
      $msg = test_input($_POST["msg"]);
    
      
      $conn = new mysqli('localhost','root','','child_adult');
      $sql="insert into message (username, email, phn, sname, msg)values('$name','$email','$phn','$sname','$msg')";
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



  <!--header section start-->
  <header class="header">
    <a href="#" class="logo">KID<span>2</span>ELDERS</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#batch">batch</a>
        <div class="dropdown">
            <button class="dropbtn">Course
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              
              <a href="child.php">for children</a>
              <a href="adultc.php">for adults</a>
            </div>
        </div>
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
        <a href="recruitment.php">recruitment</a>
        <a href="payment.php">monthly fee</a>
        <a href="#contact">contact</a>
        
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
        <a href="signin.php">sign-in</a>
        
    </nav>
</header> 
<section class="home" id="home">
    <div class="content">
        <h3>We Are Promised To Give You A Heaven Of Care</h3>
    </div>
    <div class="swiper-container home-slider">
     <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="image/slide1.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide2.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide3.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide4.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide5.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide6.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide7.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide8.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide9.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide10.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide11.jpg" alt=" "></div>
        <div class="swiper-slide"><img src="image/slide12.jpg" alt=" "></div>
        
    </div>
    </div>
</section>
<!--home section ends-->
<!--about section start-->
<section class="about" id="about">
    <h1 class="heading">About Us</h1>
    <div class="row">
        <div class="image">
            <img src="image/abt.jpg" alt="">
        </div>
        <div class="content">
            <h3>What<span> We</span> Do</h3>
            <p><span class="span1">KID2ELDERS</span> is an online platform dedicated to providing information about a center that offers care services for both children and adults. This center typically caters to provide services that include daycare, preschool programs, after-school care, and other educational and recreational activities.</p>
            <p>For adults, services may encompass assisted living, senior care, specialized programs for individuals with disabilities, and other forms of support.</p>
            
        </div>
    </div>

   </section>
<!-- about section end-->
<!--gallery section start-->
<section class="gallery" id="gallery">
    <h1 class="heading">Our Gallery</h1>
    <div class="box-container">
        <div class="box">
            <img src="image/g1.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g2.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g3.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g4.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g5.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g6.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g7.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g8.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g9.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g10.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g11.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
        <div class="box">
            <img src="image/g12.jpg" alt="">
            <h3 class="title">Photos & Events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>    
        </div>
    </div>
 </section>
<!--gallery section end-->
<!--team section starts-->
<section id="team">
    <div class="team-heading">
        <h3>our team</h3>
    </div>

     
    <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to1.jpg">     
         </div>
        <div class="t-b-text">
            <strong>Nabiha Fiza</strong>
            <span>Teacher</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to2.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Teacher</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to3.jpg">     
         </div>
        <div class="t-b-text">
            <strong>ABC</strong>
            <span>Teacher</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to4.jpg">     
         </div>
        <div class="t-b-text">
            <strong>Sanjana Jahan Sifat</strong>
            <span>Teacher</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to5.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Nurse</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to6.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Teacher</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to7.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Nurse</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to8.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Nurse</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to9.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Nurse</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to10.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Nanny</span>
        </div>
      </div>
    </div>

    <div class="swiper-slide">
       <div class="team-box">
         <div class="t-b-img">
            <img src="image/to11.jpg">     
         </div>
        <div class="t-b-text">
            <strong>XYZ</strong>
            <span>Nanny</span>
        </div>
      </div>
    </div>
      
    </div>
    
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
     var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
  </script>

 

</section>





<!--team section end-->
<!--batch section starts-->
<section class="batch" id="batch">
    <h1 class="heading">Our Batches</h1>
    <div class="box-container">
        <div class="box">
                <img src="image/t1.jpg" alt="">
            
            <h3 class="title">DayCare</h3>
            <p>Children are provided with a safe and supervised environment where they can engage in various activities, receive basic care, and interact with other children</p>
            <a href="daycare.php" class="btn">Learn More</a>
        </div>
        <div class="box1">
                <img src="image/t3.jpg" alt="">
            <h3 class="title">Pre-Schooling</h3>
            <p> We are providing a play based learning which focuses on foundational skills such as early literacy, basic math concepts, social interaction, and emotional development, preparing children for a smoother transition into kindergarten or primary school.</p>
            <a href="school.php" class="btn">Learn More</a>
        </div>
        <div class="box2">
                <img src="image/t2.jpg" alt="">
            <h3 class="title">Adult Care</h3>
            <p>For adults, we are providing services may encompass assisted living, senior care, specialized programs for individuals with disabilities, and other forms of support.</p>
            <a href="adult.php" class="btn">Learn More</a>
        </div>
    </div>
</section>
<!--batch section end-->
<!--extra section start-->
<section class="extra" id="extra">
    <h1 class="heading">Extras</h1>
    <div class="ex">
        
            <img src="image/x1.jpg" alt="no image">
            <div class="para">
                <h3>Online Course</h3>
                <p>A list of courses on various topics will be available online with description of duration and fee.</br> A child or adult can take these courses by paying first online. He/she will pass a course after going</br> through an online test.</p>

            </div>
        
            
       
            <img src="image/x2.jpg" alt="no image">
            <div class="para">
                 <h3>Counselling</h3>
                <p>The website will offer some counselling sessions to the registered members weekly once. Meeting link will</br>
                be sent via email after completing registration and online payment for a particular session.</p>
            </div>
        
    </div>
    <div class="ex">
        <img src="image/x3.jpg" alt="no image">
        <div class="para">
            <h3>Recruitment</h3>
            <p>An eligible person can join with us as nurse, nanny or teacher. A form will be provided requesting</br>
            information about educational qualification, gender, working experience, age etc. Interested person</br>
            can fill this form up and a mail will be sent in response.</p>
        </div>
        <img src="image/x4.jpg" alt="no image">
        <div class="para">
            <h3>Home Service</h3>
            <p>If a client wants to appoint a nanny to baby sit or taking care of his/her adult family member,</br>there is an option.</p>
        </div>
        
    </div>
</section>
    

<!--extra section end-->
<!--review section start-->
<section class="review" id="review">
    <h1 class="heading">Client's Review</h1>
    <div class="review-slider swiper-container">
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
        
    </div>
  </section>
<!--review section end-->

<!--contact section start-->

<section class="contact" id="contact">
    <h1 class="heading">Get in Touch</h1>
    <form method="POST" action="">
        <div class="inputBox">
            <input type="text" placeholder="name" required name="name">
            <input type="email" placeholder="email" required name="email">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="Contact Number" required name="phn" >
            <select class="combo"  name="sname">
                <option value="Select">Select</option>
                <option value="Review">Review</option>
                <option value="DayCare">DayCare</option>
                <option value="Pre-Schooling">Pre-Schooling</option>
                <option value="Adult Care">Adult Care</option>
                <option value="Course">Course</option>
                <option value="Counselling">Counselling</option>
                <option value="Home Service">Home Service</option>
                <option value="Recruitment">Recruitment</option>
             </select>
        </div>
        <textarea placeholder="Message"  id="" cols="30" rows="10" required name="msg"></textarea>
        <input type="Submit" value="Send" class="btn1">
    </form>
   </section>
<!--contact section end-->
<!--fotter section start-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>location</h3>
            <a href="#"><i class="fas fa-map-marker-alt"></i> House No- C-8,Chandgaon R/A,</br>Road No- 3,Block- A,Chattogram</a>
            <a href="#"><i class="fas fa-clock"></i>Saturday-Thursday:8:00 am-6:30 pm</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#"><i class="fas fa-arrow-right"></i>home</a>
            <a href="#"><i class="fas fa-arrow-right"></i>about</a>
            <a href="#"><i class="fas fa-arrow-right"></i>gallery</a>
            <a href="#"><i class="fas fa-arrow-right"></i>batch</a>
            <a href="#"><i class="fas fa-arrow-right"></i>contact</a>
            
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+1234564646</a>
            <a href="#"><i class="fas fa-phone"></i>+7864909809</a>
            <a href="#"><i class="fas fa-phone"></i>+8100293955</a>
            <a href="#"><i class="fas fa-phone"></i>+2867533602</a>
            <a href="#"><i class="fas fa-phone"></i>+1100293908</a>
        </div>
        <div class="box">
            <h3>e-mail</h3>
            <a href="#"><i class="fas fa-envelope"></i>u1904109@student.cuet.ac.bd</a>
            <a href="#"><i class="fas fa-envelope"></i>u1904110@student.cuet.ac.bd</a>
            <a href="#"><i class="fas fa-envelope"></i>u1904114@student.cuet.ac.bd</a>

        </div>
    </div>
    <div class="credit"> created by  <span>Sifat</span> - <span>Pritha</span> - <span>Fiza</span></div>
  </section>
<!--fotter section end-->

</head>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


<script src="home.js"></script>

<body>
    
    
</body>
</html>
