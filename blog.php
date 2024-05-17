<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <body>
    <section class="sub-header">
      <nav>
        <a href="index.php"><img src="./images/Logo1.png" alt="" /></a>
        <div class="nav-links" id="navLinks">
          <i class="fa-solid fa fa-xmark" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="index.php#course">COURSES</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="./internship.html">INTERNSHIPS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>Our Online Programs for 2024 </h1>
    </section>

    <!--blog page content-->

    <section class="blog-content">
      <div class="row">
        <div class="blog-left">
          <img src="images\blog.jpeg" alt="">
          
          <p style="font-size: 20px; color: grey;"><b>Enhance the learning experience through diverse content formats, including
            video lectures, presentations, and study materials, covering a wide range of
            interview topics.</b></p>
          <br>
          <p style="font-size: 20px; color: grey"><b>Facilitate progress tracking and performance analysis through personalized
            dashboards, analytics tools, and reports, empowering users to identify
            strengths and areas for improvement.</b>
            </p>
          <br>
          <p style="font-size: 20px; color: grey"><b>Prioritize user authentication and security with secure login mechanisms,
            data encryption, and protection of personal information.Prioritize user authentication and security with secure login mechanisms,
data encryption, and protection of personal information.</b></p>
          <br>
          <p style="font-size: 20px; color: grey"><b>Content management with easy upload, version control, and updates
            for interview preparation materials to ensure a seamless and organized
            learning environment.</b></p>
        
          <div class="comment-box" style="border-radius: 10px; border: 2px solid black">
            <h3>Leave A Comment</h3>
            <form action="blog.php" class="comment-form" method="post">
              <input type="text" style="border: 1px solid grey; border-radius: 20px;" name="name" placeholder="Enter Name">
              <input type="email" style="border: 1px solid grey; border-radius: 20px;" name="email" placeholder="Enter Mail">
              <textarea rows="5" style="border: 1px solid grey; border-radius: 20px;" name="comment" placeholder="Your Comment"></textarea>
              <button type="submit" style=" border-radius: 20px; height: 30px; width:150px; background-color: red; color: white" class="hero-btn red-btn">Post Comment</button>
            </form>
          </div>
        
      

    <!--end-->


    <section class="footer" style="margin-top: 100px;">
    <h4>About Us</h4>
    <p>Empowering minds and fostering leadership through Learn2Lead - Your gateway to innovative e-learning experiences.</p>
    <div class="icons">
      <i class='bx bxl-facebook' ></i>
      <i class='bx bxl-twitter' ></i>
      <i class='bx bxl-instagram' ></i>
      <i class='bx bxl-linkedin'></i>    
    </div>
      <p>Made Width <i class="fa-solid fa-heart"></i> by Team Learn2Lead</p>
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
$comment = $_POST['comment'];

// Insert form data into the database
$sql = "INSERT INTO blog(Name, email, comment)
        VALUES ('$Name','$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Query submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>