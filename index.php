<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learn2Lead</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<body>
  <header style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
  url(./images/banner5.png);">
    <section class="header">
      <nav>
        <a href="index.php"><img src="./images/Logo1.png" alt="logo" /></a>
        <div class="nav-links" id="navLinks">
          <i class="fa-solid fa fa-xmark" onclick="hideMenu()"></i>
          <ul>

            <li><a href="./index.php">HOME</a></li>
            <li><a href="./about.html">ABOUT</a></li>
            <li><a href="./index.php#course">COURSE</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="./index.php#internship" class="smooth-scroll">INTERNSHIPS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
         
          </ul>
        </div>
        <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
      </nav>
  </header>
  <div class="text-box">
  <h1 style="text-align: left;">Learning <br>Should never Stop!</h1>

    <!-- Login Code -->
     <div class="wrapper">
      <form action="index.php" method="post">
        <h1>Login</h1>

        <div class="input-box">
          <input type="text" placeholder="Email" name="email" id="email" required>
          <i class='bx bxs-user' style="align-items:flex"></i>
        </div>

        <div class="input-box">
          <input type="password" placeholder="Password" name="password" id="password" required>
          <i class='bx bxs-lock-alt'></i>
        </div>
        <div>
            <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
      // Replace these with your actual database connection details
      $servername = "localhost";
      $username = "root";
      $password = '';
      $dbname = "learn2lead";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Prepare and execute query
      $sql = "SELECT * FROM login WHERE email = ? ";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $_POST['email']);
      $stmt->execute();
      $result = $stmt->get_result();

      // Check if user exists
      if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (($_POST['password']==$user['password'])) {
          
          // Start session and store user data (replace with secure session management)
        //   session_start();
        //   $_SESSION['user_id'] = $user['id'];
        //   $_SESSION['email'] = $user['email'];
        // setcookie('id', $user['id']);
        // setcookie('uname', $user['uname']); 
        // setcookie('image', $user['image']); 
        setcookie("username",$user['username']);
        setcookie("id",$user['id']);
        if($user['identity']==0){
        ?>
        <script>
            document.cookie = "username=<?=$user['username']?>";
            document.cookie = "id=<?=$user['id']?>";
          window.location.assign("Teacherdb.php");
        </script>
    <?php
        }else{?><script>
            document.cookie = "username=<?=$user['username']?>";
            document.cookie = "id=<?=$user['id']?>";
            
          window.location.assign("dindex.php");
        </script>
        <?php
        }
        } else {
          echo "<p align='center' color='red'>Invalid password.</p>";
        }
      } else {
        echo "<p align='center' color='red'>Invalid email.</p>";
      }

      // Close connection
      $conn->close();
    }
  ?></div>

        <div class="remember-forgot">
          <label><input type="checkbox">Remember me </label>
          <a href="forgot-password.html"> Forgot password</a>
        </div>

        <button type="submit" class="btn" >Login</button>

        <div class="dropdown">
          <span> <a href="#Reg" style="color: black;" id="registerLink">Dont have an account? Register</a></span>
        <div class="dropdown-content" id="dropdown">
          <a href="TeacherRegister.html">Teacher</a>
          <a href="StudentRegister.html">Student</a>
          
        </div>
        </div>
      </form>
    </div>
  </div>
  </div>

  </div>



  </section>

  <!-- course -->

  <a id="course"></a>

  <section class="course">
    <h1>Trending Courses</h1>
    <p>Explore the most sought out courses</p>
    <div class="row">
      <div class="course-col">
        
        <a href="images\vid-1.mp4"><img src="./images/course1.jpeg" style="height: 200px; width: 340px;" alt=""></a>
        <h3>Complete Financial Management course for Beginners</h3>
        
      </div>
      <div class="course-col">
        <a href="images\vid-2.mp4"><img src="./images/course2.jpg" style="height: 200px; width: 340px;" alt=""></a>
        <h3>Machine Learning A-Z: AI<br> Python & R + ChatGPT</h3>
      </div>
      <div class="course-col">
        <a href="images\vid-3.mp4"><img src="./images/course3.jpg" style="height: 200px; width: 340px;" alt=""></a>
        <h3>Complete MBA course<br></h3>
        
      </div>
    </div>
  </section>
  <!-- internship -->

  <a id="internship"></a>
  <section class="campus">
    <h1>Top Internships</h1>
    <p>Top Companies providing Internships</p>
    <div class="row">
      <div class="campus-col">
        <a href="https://www.adobe.com/careers/university/internships.html">
        <img src="./images/Adobe.png" alt="Adobe Internships">
        <div class="layer">
          <h3>ADOBE</h3>
          </a>
        </div>
      </div>
      <div class="campus-col">
        <a href="https://buildyourfuture.withgoogle.com/internships">
        <img src="./images/Google.png" alt="Google Internships">
        <div class="layer">
          <h3>GOOGLE</h3>
          </a>
        </div>
      </div>
      <div class="campus-col">
        <a href="https://www.metacareers.com/careerprograms/students/?p[teams][0]=Internship%20-%20Engineering%2C%20Tech%20%26%20Design&p[teams][1]=Internship%20-%20Business&p[teams][2]=Internship%20-%20PhD&p[teams][3]=University%20Grad%20-%20PhD%20%26%20Postdoc&p[teams][4]=University%20Grad%20-%20Engineering%2C%20Tech%20%26%20Design&p[teams][5]=University%20Grad%20-%20Business&teams[0]=Internship%20-%20Engineering%2C%20Tech%20%26%20Design&teams[1]=Internship%20-%20Business&teams[2]=Internship%20-%20PhD&teams[3]=University%20Grad%20-%20PhD%20%26%20Postdoc&teams[4]=University%20Grad%20-%20Engineering%2C%20Tech%20%26%20Design&teams[5]=University%20Grad%20-%20Business">
        <img src="./images/Meta.png" style="margin-top: 90px;" alt="Meta Internships">
        <div class="layer">
          <h3>META</h3>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Facilities -->

  <section class="facilities">
    <h1>Our Facilities</h1>
    <p>Bringing all in one in our webiste,One stop solution for every student.</p>
    <div class="row">
      <div class="facilities-col">
        <img src="./images/interview.jpeg" alt="">
        <h3>Interview Training</h3>
        <p>Trainees find a platform to get themselves ready for the interview in various industries by getting benefit from courses and videos from best teachers and various aptitude tests to track performance.
          For all users , our website provides an internship portal that will make it easier to find availability of internships with the roles needed.</p>
      </div>
      <div class="facilities-col">
        <img src="./images/pitchit.jpeg" alt="">
        <h3>Pitch-It</h3>
        <p>
          Pitch your idea to us and we are here to get you investors.Boost productivity, enhance team synergy, and achieve unparalleled efficiency in a single, user-friendly interface.</p>
      </div>
      <div class="facilities-col">
        <img src="./images/library.jpeg" alt="">
        <h3>E-Library</h3>
        <p>
          Explore a vast digital library within our e-learning platform, offering an extensive collection of e-books, academic resources, and multimedia materials. Elevate your learning experience with easy access to a wealth of knowledge, fostering a dynamic and enriched educational journey.</p>
      </div>
    </div>
  </section>

  <!-- Blog -->

  <section class="testimonials">
    <h1>What Our Student Says</h1>
    <a id="Blog"></a>
    <h3>How learners like you are achieving their goals</h3>
    <div class="row">
      <div class="testimonial-col">
        <img src="./images/user1.jpg" alt="Blog">
        <div>
          <p>This course helped me freshen up on my product manager skills and land a job at Facebook! Thanks guys :)</p>
          <h3>Person A</h3>
          <i class='bx bxs-star' style="color: gold;"></i>
          <i class='bx bxs-star' style="color: gold;"></i>
          <i class='bx bxs-star' style="color: gold;"></i>
          <i class='bx bxs-star' style="color: gold;"></i>
          <i class='bx bxs-star-half' style="color: gold;" ></i>
        </div>
      </div>
      <div class="testimonial-col">
        <img src="./images/user2.jpg" alt="">
        <div>
          <p>I am proud to say that after a few months of taking this course...I passed my exam and am now an AWS Certified Cloud Practitioner! This content was exactly what the CCP exam covered.</p>
          <h3>Person B</h3>
          <i class='bx bxs-star' style="color: gold;"></i>
          <i class='bx bxs-star' style="color: gold;"></i>
          <i class='bx bxs-star' style="color: gold;"></i>
          <i class='bx bxs-star-half' style="color: gold;" ></i>
          <i class='bx bx-star' style="color: gold;"></i>
          
        </div>
      </div>
    </div>
  </section>

  <!----- Call to action ------>

  <section class="cta">
    <h1>Enroll For Various Online Courses</h1>
  </section>

  <!--------- footer --------->

  <section class="footer">
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

