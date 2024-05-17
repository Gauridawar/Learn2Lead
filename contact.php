<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>University Website</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <section class="sub-header">
    <nav>
      <a href="index.html"><img src="./images/Logo1.png" alt="logo" /></a>
      <div class="nav-links" id="navLinks">
        <i class="fa-solid fa fa-xmark" onclick="hideMenu()"></i>
        <ul>
          <li><a href="./index.php">HOME</a></li>
          <li><a href="./about.html">ABOUT</a></li>
          <li><a href="./index.php#course">COURSE</a></li>
          <li><a href="./blog.php">BLOG</a></li>
          <li><a href="./contact.php">CONTACT</a></li>
          <li><a href="./index.php#intership">INTERNSHIPS</a></li>
        </ul>
      </div>
      <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Contact Us</h1>
  </section>



  <!--------contact us--------->


  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="fa-solid fa-phone"></i>
          <span>
            <h5>+91 XXXXXXXXXX</h5>
          </span>
        </div>
        <div>
          <i class="fa-solid fa-envelope"></i>
          <span>
            <h5>learn2lead@gmail.com</h5>
            <p>Email us </p>
          </span>
        </div>
      </div>
      <div class="contact-col">
        <form action="contact.php" method="post">
          <input type="text" name="name" placeholder="Enter Your Name" required>
          <input type="email" name="email" placeholder="Enter Email" required>
          <input type="text" name="subject" placeholder="Enter Your Subject" required>
          <textarea rows="8" name="message" placeholder="Message" required></textarea>
          <button type="submit" class="hero-btn red-btn">Submit</button>

        </form>
      </div>
    </div>
  </section>





  <section class="footer" style="margin-top: 70px;">
    <h4>About Us</h4>
    <p>Empowering minds and fostering leadership through Learn2Lead - Your gateway to innovative e-learning experiences.</p>
    <div class="icons">
      <i class='bx bxl-facebook' ></i>
      <i class='bx bxl-twitter' ></i>
      <i class='bx bxl-instagram' ></i>
      <i class='bx bxl-linkedin'></i>    
    </div>
    <p>Made With <i class='bx bxs-heart' style="color: red;"></i> by Team Learn2Lead</p>
  </section>

  <script src="script.js"></script>
  </body>

</html>

<?php
// Establish connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn2lead";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
if(isset($_POST['name'])){
$Name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert form data into the database
$sql = "INSERT INTO contact(Name, email, subject, message)
        VALUES ('$Name','$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Query submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

