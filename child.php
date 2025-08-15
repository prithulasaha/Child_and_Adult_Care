
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Course</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="course.css">

</head>
<body>



<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your database password if any
$dbname = "child_adult"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to redirect to respective pages based on the transaction ID
function redirectToPage($transaction_id) {
    switch ($transaction_id) {
        case 'your_transaction_id_1':
            header("Location: color_shape.php");
            exit();
            break;
        case 'your_transaction_id_2':
            header("Location: animal_birds.php");
            exit();
            break;
        // Add more cases for different transaction IDs and corresponding pages
        default:
            header("Location: child.php");
            exit();
            break;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tid'])) {
    $transaction_id = $_POST['tid'];

    // Check if transaction ID exists in the database
    $sql = "SELECT * FROM enroll WHERE tid = '$transaction_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Transaction ID found in the database, redirect to corresponding page
        redirectToPage($transaction_id);
    } else {
        echo "Transaction ID not found in the database";
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
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./image/child back.jpg" alt="" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;/">
        </div>
    </div> 
    <section class="course" id="course">
        <h1 class="heading">All Courses</h1>
        <div class="course-list">
            <div class="course-row">
                <div class="price">800TK</div>
                <img src="image/color.png" alt="">
                <h2>Learn Colors & Shapes</h2>
                <div class="enroll">
                    <a href="enroll.php" class="btn">Enroll</a>
                    <a href="#divOne" class="btn1">Learn</a>
                    <div class="overlay" id="divOne">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form method="POST" action="color_shape.php">
                                        
                                        <input type="text" placeholder="Enter Transaction ID" name="tid">
                                       <!-- <a href="color_shape.php" name="in" class="bn">Go</a>-->
                                       <button type="submit" name="in" class="bn">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-row">
                <div class="price">800TK</div>
                <img src="image/animal.jpg" alt="">
                <h2>Learn Animals Birds Fruits & Flowers</h2>
                <div class="enroll">
                    <a href="enroll.php" class="btn">Enroll</a>
                    <a href="#divTwo" class="btn1">Learn</a>
                    <div class="overlay" id="divTwo">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form method="POST" action="animal_birds.php">
                                        <input type="text" placeholder="Enter Transaction ID" name="tid">
                                        <!--<a href="animal_birds.php" class="bn">Go</a>-->
                                        <button type="submit" name="in" class="bn">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-row">
                <div class="price">800TK</div>
                <img src="image/alpha.jpg" alt="">
                <h2>Learn Alphabets</h2>
                <div class="enroll">
                    <a href="enroll.php" class="btn">Enroll</a>
                    <a href="#divThree" class="btn1">Learn</a>
                    <div class="overlay" id="divThree">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form method="POST" action="alphabet.php">
                                        
                                        <input type="text" placeholder="Enter Transaction ID" name="tid">
                                        <!--<a href="alphabet.php" class="bn">Go</a>-->
                                        <button type="submit" name="in" class="bn">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="course-list">
            <div class="course-row">
                <div class="price">800TK</div>
                <img src="image/number.jpg" alt="">
                <h2>Learn Numbers</h2>
                <div class="enroll">
                    <a href="enroll.php" class="btn">Enroll</a>
                    <a href="#divFour" class="btn1">Learn</a>
                    <div class="overlay" id="divFour">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form method="POST" action="number.php">
                                        <input type="text" placeholder="Enter Transaction ID" name="tid">
                                        <!--<a href="number.php" class="bn">Go</a>-->
                                        <button type="submit" name="in" class="bn">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-row">
                <div class="price">800TK</div>
                <img src="image/month.jpg" alt="">
                <h2>Learn Name of Days Months & Seasons</h2>
                <div class="enroll">
                    <a href="enroll.php" class="btn">Enroll</a>
                    <a href="#divFive" class="btn1">Learn</a>
                    <div class="overlay" id="divFive">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form method="POST" action="month.php">
                                        <input type="text" placeholder="Enter Transaction ID" name="tid">
                                        <!--<a href="month.php" class="bn">Go</a>-->
                                        <button type="submit" name="in" class="bn">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-row">
                <div class="price">800TK</div>
                <img src="image/draw.jpg" alt="">
                <h2>Explore Drawings</h2>
                <div class="enroll">
                    <a href="enroll.php" class="btn">Enroll</a>
                    <a href="#divSix" class="btn1">Learn</a>
                    <div class="overlay" id="divSix">
                        <div class="wrapper">
                            <h2>Please fill up transaction id</h2>
                            <a href="#" class="close">&times;</a>
                            <div class="content">
                                <div class="container">
                                    <form method="POST" action="drawing.php">
                                        <input type="text" placeholder="Enter Transaction ID" name="tid">
                                        <!--<a href="drawing.php" class="bn">Go</a>-->
                                        <button type="submit" name="in" class="bn">Go</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

    </section>
         
        
    <script src="child.js"></script>
</body>
</html>