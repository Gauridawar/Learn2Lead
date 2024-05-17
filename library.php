<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styleslib.css">

</head>

<body>

    <header class="header">

        <section class="flex">

            <a href="index.php"><img src="./images/Logoblack.png" alt="logo" style="width: 250px; height:55px ;" /></a>

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

    <div class="side-bar">

        <div id="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <h1 style="color:white;"><?php echo $_COOKIE['username']?></h1>
            <p class="role">Student</p>
            <a href="./dindex.php" class="btn">view profile</a>

            <nav class="navbar">
                <a href="./dindex.php"><i class="fas fa-home"></i><span>Home</span></a>
                <a href="./about.html"><i class="fas fa-handshake"></i><span>About</span></a>
                <a href="./course1.php"><i class="fa-solid fa-shapes"></i><span>Courses</span></a>
                <a href="./internship.html"><i class='bx bx-briefcase-alt' style="font-size: 20px;"></i><span>Internships</span></a>
                <a href="./contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
                <a href="./library.php"><i class='bx bx-book'></i><span>E-Library</span></a> 
                <a href="index.php"><button class="logout-btn">Logout</button></a>

            </nav>

        </div>
    </div>

    <section class="home-grid">

        <h1 class="heading">quick options</h1>

        <div class="box-container">
            <div class="box">
                <h3 class="title">Top categories</h3>
                <div class="flex">
                    <a href="#"><i class='bx bxs-star'></i><span>Editor's Pick </span></a>
                    <a href="#"><i class="fa-solid fa-chart-simple"></i><span>Most Popular</span></a>
                    <a href="#"><i class="fa-solid fa-school"></i><span>Academic and Education</span></a>
                    <a href="#"><i class="fa-solid fa-palette"></i><span>Art</span></a>
                    <a href="#"><i class="fa-solid fa-dna"></i><span>Biology</span></a>
                    <a href="#"><i class="fa-solid fa-briefcase"></i><span>Business and Career </span></a>
                    <a href="#"><i class="fa-solid fa-hands-holding-child"></i></i><span>Children and Youth</span></a>
                    <a href="#"><i class="fa-solid fa-book-open"></i><span>Fiction and Literature</span></a>
                    <a href="#"><i class="fa-solid fa-heart"></i><span>Lifestyle</span></a>
                    <a href="#"><i class="fa-solid fa-person-hiking"></i><span>Personal Growth</span></a>
                    <a href="#"><i class="fa-solid fa-scale-balanced"></i><span>Politics and Law</span></a>
                    <a href="#"><i class="fa-solid fa-atom"></i><span>Science</span></a>
                    <a href="#"><i class="fa-solid fa-microchip"></i><span>Technology</span></a>
                </div>
            </div>
        </div>

    </section>



    <section class="courses">

        <h1 class="heading">Collections</h1>

        <div class="box-container">

            <div class="box">

                <div class="thumb">
                    <a href="./books/ikigai.php"><img src="https://m.media-amazon.com/images/I/814L+vq01mL._AC_UF1000,1000_QL80_.jpg" alt=""></a>

                </div>
                <h3 class="title">IKIGAI</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>
                
            </div>

            <div class="box">

                <div class="thumb">
                    <a href="./books/theartofwar.php"><img src="https://cdn.kobo.com/book-images/fc4a354b-27cd-4b29-8966-26fafb527c94/1200/1200/False/the-art-of-war-deluxe-hardbound-edition.jpg" alt=""></a>

                </div>
                <h3 class="title">The Art Of War</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>

            </div>

            <div class="box">

                <div class="thumb">
                    <a href="./books/itews.php"><img src="https://m.media-amazon.com/images/I/813aV273-rL._AC_UF1000,1000_QL80_.jpg" alt=""></a>


                </div>
                <h3 class="title">It Ends With Us</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>
            </div>

            <div class="box">

                <div class="thumb">
                    <a href="./books/tfios.php"><img src="https://upload.wikimedia.org/wikipedia/en/a/a9/The_Fault_in_Our_Stars.jpg" alt=""></a>
                    

                </div>
                <h3 class="title">Verity</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>
            </div>

            <div class="box">

                <div class="thumb">
                    <img src="https://scholarlykitchen.sspnet.org/wp-content/uploads/2016/06/c4499-sapiens.jpg" alt="">
                    

                </div>
                <h3 class="title">Sapiens</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>
            </div>

            <div class="box">

                <div class="thumb">
                    <img src="https://m.media-amazon.com/images/I/81KAg5fnOhL._AC_UF1000,1000_QL80_.jpg" alt="">

                </div>
                <h3 class="title">Elon Musk</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>
            </div>
            <div class="box">

                <div class="thumb">
                    <img src="https://m.media-amazon.com/images/I/81Ls+SBCLiL._AC_UF1000,1000_QL80_.jpg" alt="">

                </div>
                <h3 class="title">Atomic Habits</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>
            </div>
            <div class="box">

                <div class="thumb">
                    <img src="https://m.media-amazon.com/images/I/81FPzmB5fgL._AC_UF1000,1000_QL80_.jpg" alt="">

                </div>
                <h3 class="title">The Alchemist</h3>
                <a href="Ikigai _ the Japanese secret to a long and happy life .pdf"><i class="fa-solid fa-cloud-arrow-down" style="margin-left: 240px; margin-top: -20px; font-size: 25px; color: black;"></i></a>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star' style="color: gold;"></i>
                <i class='bx bxs-star-half' style="color: gold;"></i>
                <i class='bx bx-star' style="color: gold;"></i>
            </div>

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
        <p style="font-size: 15px;">Made With <i class='bx bxs-heart' style="color: red;"></i> by Team Learn2Lead</p>
      </section>

    <!-- custom js file link  -->
    <script src="script2.js"></script>


</body>

</html>