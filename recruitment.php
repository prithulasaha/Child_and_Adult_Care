<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Form</title>
    <link rel="stylesheet" href="recruitment.css">

    <?php
    $nameErr = $regnoErr = $emailErr = $websiteErr = $PassErr = $PassE = "";
    $name = $regno = $email = $website = $password = $phn = $sname = $cname = $location =  "";
    $fname = $lname = $db = $gname = $ffname = $flname = $fphn = $femail = $mfname = $mlname = $mphn = $memail = $pname = $pphn = $ppname = $ppphn = $sname = $tid = "";
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          } 
              $fname = test_input($_POST["fname"]);
              $lname = test_input($_POST["lname"]);
              $db = test_input($_POST["db"]);
              $gname = test_input($_POST["gname"]);
              $email = test_input($_POST["email"]);
              $phn = test_input($_POST["phn"]);
              #$g2fname = test_input($_POST["g2fname"]);
              $ap = test_input($_POST["ap"]);
              $exp = test_input($_POST["exp"]);
              $adds = test_input($_POST["adds"]);
              #$pdf = test_input($_POST["pdf"]);
              $pdfFileName = $_FILES["pdf"]["name"];
              $pdfTempName = $_FILES["pdf"]["tmp_name"];
              $pdfUploadDirectory = "uploads/"; // Directory where uploaded PDFs will be stored
              $pdfFilePath = $pdfUploadDirectory . basename($pdfFileName);

              if (move_uploaded_file($pdfTempName, $pdfFilePath)) {
                // File successfully uploaded
                // Now, you can use $pdfFilePath to store the path in your database
                // Insert the $pdfFilePath into your database table
                
                // Your existing database connection code
                $conn = new mysqli('localhost','root','','child_adult');
                
                // Your SQL query to insert the file path into the database
                $sql = "INSERT INTO recruitment (fname, lname, db, gname, email, phn, ap, exp, adds, pdf) VALUES ('$fname', '$lname', '$db', '$gname', '$email', '$phn', '$ap', '$exp', '$adds', '$pdfFilePath')";
        
                if (mysqli_query($conn, $sql)) {
                    echo '<script type="text/javascript">
                        window.onload = function () { alert("Admission is completed!!!"); }
                        </script>';
                } else {
                    echo "Failed to insert into the database";
                }
            } else {
                echo "Error uploading the file";
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
    
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="title">
            <h1>Recruitment Form</h1>
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
            <input type="emial" placeholder="Email" required name="email">
            <input type="text" placeholder="Phone Number" required name="phn">
        </div>
        <div class="inputBox">
            <select class="combo"  name="ap">
                <option value="job role">Applied Position</option>
                <option value="teacher">Teacher</option>
                <option value="nurse">Nurse</option>
                <option value="nanny">Nanny</option>
            </select>
            <select class="combo"  name="exp">
                <option value="experience">Do you have any work experience? </option>
                <option value="y">Yes</option>
                <option value="n">No</option>
            </select>
        </div>
        <textarea placeholder="Address"  id="" cols="25" rows="5" required name="adds"></textarea>
        <div class="inputBox">
            <p>Upload Your CV</p>
        </div>
        <div class="inputBox">
            
            <input type="file" placeholder="Upload Your CV" required name="pdf">
        </div>
        <input type="Submit" value="SUBMIT" class="btn">
    </form>
    
    <div class="abc">
        <p>We will inform you via email.Please wait.......</p>
    </div>
    
   </section>
</head>
<body>

    

</body>
</html>