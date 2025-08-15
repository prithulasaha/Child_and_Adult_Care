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
    <link rel="stylesheet" href="course.css">

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
            
    </header>
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./image/child back.jpg" alt="" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;/">
        </div>
    </div> 
    <section class="course" id="course">
        <h1 class="heading">All Courses</h1>
        <div class="course-list">
            <div class="course-row">
                <div class="price">1000TK</div>
                <img src="image/laugh.jpg" alt="">
                <h2>Laughter Therapy</h2>
                <div class="enroll">
                    <a href="enroll1.php" class="btn">Enroll</a>
                    <a href="#divOne" class="btn1">Learn</a>
                    <div class="overlay" id="divOne">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form>
                                        
                                        <input type="text" placeholder="Enter Transaction ID">
                                        <a href="laughter.php" class="bn">Go</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-row">
                <div class="price">1000TK</div>
                <img src="image/yoga.jpg" alt="">
                <h2>Yoga & Meditation</h2>
                <div class="enroll">
                    <a href="enroll1.php" class="btn">Enroll</a>
                    <a href="#divTwo" class="btn1">Learn</a>
                    <div class="overlay" id="divTwo">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form>
                                        
                                        <input type="text" placeholder="Enter Transaction ID">
                                        <a href="yoga.php" class="bn">Go</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-row">
                <div class="price">1000TK</div>
                <img src="image/fit.jpg" alt="">
                <h2>Exercise & Fitness</h2>
                <div class="enroll">
                    <a href="enroll1.php" class="btn">Enroll</a>
                    <a href="#divThree" class="btn1">Learn</a>
                    <div class="overlay" id="divThree">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form>
                                        
                                        <input type="text" placeholder="Enter Transaction ID">
                                        <a href="exercise.php" class="bn">Go</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        

    </section>
         
        
    
</body>
</html>