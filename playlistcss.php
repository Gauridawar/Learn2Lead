<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <title>Learn2Lead</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styles2.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

    <a href="index.html"><img src="./images/Logoblack.png" alt="logo" style="width: 250px; height:55px ;"/></a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <!-- <div id="toggle-btn" class="fas fa-sun"></div> -->
      </div>

   </section>

</header>   

<div class="side-bar"  style="background-color: #15283c">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h1 style="color:white;"><?php echo $_COOKIE['username']?></h1>
      <p class="role">student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="./dindex.php"><i class="fas fa-home"></i><span>Home</span></a>
         <a href="./about.html"><i class="fas fa-handshake"></i><span>About</span></a>
         <a href="./course1.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
         <a href="./internship.html"><i class='bx bx-briefcase-alt'></i><span>Internships</span></a>
         <a href="./contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
         <a href="library.php"><i class='bx bx-book'></i><span>E-Library</span></a>

         <a href='./index.php'><button class="logout-btn">Logout</button></a>

   </nav>

</div>

<section class="playlist-details">

   <h1 class="heading">playlist details</h1>

   <div class="row">

      <div class="column">
         <form action="" method="post" class="save-playlist">
            <button type="submit"><i class="far fa-bookmark"></i> <span>save playlist</span></button>
         </form>
   
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>7 videos</span>
         </div>
      </div>
      <div class="column">
         
   
         <div class="details">
            <h3>Complete CSS tutorial</h3>
            <p>This course covers it all - we start at the very basics (What is CSS? How does it work? How do you use it)? and gradually dive in deeper and deeper. And we do this by showing both practical examples as well as the theory behind it.
               Getting started with CSS might look easy but there actually is a lot of depth to CSS - hence this course provides different "Tracks" or "Entry points" to exactly meet your demands and reflect you current knowledge</p>
            <a href="https://buy.stripe.com/test_7sI5m1cJQg3kcHCfYY"  class="inline-btn">Buy this course: ₹499</a>
         </div>
      </div>
   </div>

</section>

<section class="playlist-videos">

   <h1 class="heading">playlist videos</h1>

   <div class="box-container">

      <a class="box" href="watchvideo.php">
         <i class="fas fa-play"></i>
         <img src="images/post-2-1.png" alt="">
         <h3>Complete CSS tutorial (part 01)</h3>
      </a>

      <a class="box" href="watchvideo.php">
         <i class="fas fa-play"></i>
         <img src="images/post-2-2.png" alt="">
         <h3>Complete CSS tutorial (part 02)</h3>
      </a>

      <a class="box" href="watchvideo.php">
         <i class="fas fa-play"></i>
         <img src="images/post-2-3.png" alt="">
         <h3>Complete CSS tutorial (part 03)</h3>
      </a>

      <a class="box" href="watchvideo.php">
         <i class="fas fa-play"></i>
         <img src="images/post-2-4.png" alt="">
         <h3>Complete CSS tutorial (part 04)</h3>
      </a>

      <a class="box" href="watchvideo.php">
         <i class="fas fa-play"></i>
         <img src="images/post-2-5.png" alt="">
         <h3>Complete CSS tutorial (part 05)</h3>
      </a>

      <a class="box" href="watchvideo.php">
         <i class="fas fa-play"></i>
         <img src="images/post-2-6.png" alt="">
         <h3>Complete CSS tutorial (part 06)</h3>
      </a>

   </div>

</section>

<section class="footers">
   <h4>About Us</h4>
   <div class="icons">
     <i class='bx bxl-facebook' ></i>
     <i class='bx bxl-twitter' ></i>
     <i class='bx bxl-instagram' ></i>
     <i class='bx bxl-linkedin'></i>    
   </div>
   <p style="font-size: 15px; margin-top: 25px;">Made With <i class='bx bxs-heart' style="color: red;"></i> by Team Learn2Lead</p>
 </section>
<!-- custom js file link  -->
<script src="script2.js"></script>

   
</body>
</html>