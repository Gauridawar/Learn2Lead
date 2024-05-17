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
    <title>Video</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles2.css">

    

    

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

    <div class="side-bar" style="background-color: #15283c">

        <div id="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="images/pic-1.jpg" class="image" alt="">
            <h1 style="color:white;"><?php echo $_COOKIE['username']?></h1>
            <p class="role">student</p>
            <a href="dindex.php" class="btn">view profile</a>
        </div>

        <nav class="navbar">
                
            <a href="about.html"><i class="fas fa-handshake"></i><span>About</span></a>
            <a href="blog.php"><i class="fas fa-home"></i><span>Blog</span></a>
            <a href="couse1.php"><i class="fa-solid fa-shapes"></i><span>Courses</span></a>
            <a href="internship.html"><i class='bx bx-briefcase-alt'></i><span>Internships</span></a>
            <a href="../contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a> 
            <a href="library.php"><i class='bx bx-book'></i><span>E-Library</span></a>
            
        </nav>

    </div>

    <section class="watch-video">

        <div class="video-container">
            <div class="video">
                <!-- <video src="images/vid-1.mp4" controls poster="images/post-1-1.png" id="video"></video> -->
                <iframe src="https://player.vdocipher.com/v2/?otp=20160313versASE323mYAc6Ji3PoyJUDtAbCa8dxPoMHkVg22o9UcB9PFKRX53hI&playbackInfo=eyJ2aWRlb0lkIjoiOTg2YTE4N2NmZjM0NDUwZjg0MWM5ZWE4M2FkNmFiZDgifQ==" style="border:0;height:600px;width:1200px;max-width:100%" poster="images/post-1-1.png" allowFullScreen="true" allow="encrypted-media"></iframe>

            </div>
            <h3 class="title">complete HTML tutorial (part 01)</h3>
            <div class="info">
                <p class="date"><i class="fas fa-calendar"></i><span>22-10-2023</span></p>
                <p class="date"><i class="fas fa-heart"></i><span>44 likes</span></p>
            </div>
            <div class="tutor">
                <img src="images/pic-2.jpg" alt="">
                <div>
                    <h3>Amy</h3>
                    <span>developer</span>
                </div>
            </div>
            <form action="" method="post" class="flex">
                <a href="course1.php" class="inline-btn">view playlist</a>
                <button><i class="far fa-heart"></i><span>like</span></button>
            </form>
            <p class="description">
                Explore the realm of web programming by taking the HTML course. Learn the language that powers the
                internet, from the fundamentals to more complex strategies.
                You can expect hands-on practice, practicals, and knowledgeable advice as you progress toward HTML
                proficiency.
            </p>
        </div>

    </section>

    <section class="comments">

        <h1 class="heading">5 comments</h1>

        <form action="" class="add-comment">
            <h3>add comments</h3>
            <textarea name="comment_box" placeholder="enter your comment" required maxlength="1000" cols="30"
                rows="10"></textarea>
            <input type="submit" value="add comment" class="inline-btn" name="add_comment">
        </form>

        <h1 class="heading">user comments</h1>

        <div class="box-container">

            <div class="box">
                <div class="user">
                    <img src="images/pic-1.jpg" alt="">
                    <div>
                        <h3>Tester</h3>
                        <span>22-10-2022</span>
                    </div>
                </div>
                <div class="comment-box">this is a comment</div>
                <form action="" class="flex-btn">
                    <input type="submit" value="edit comment" name="edit_comment" class="inline-option-btn">
                    <input type="submit" value="delete comment" name="delete_comment" class="inline-delete-btn">
                </form>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-2.jpg" alt="">
                    <div>
                        <h3>Learner 2</h3>
                        <span>22-10-2023</span>
                    </div>
                </div>
                <div class="comment-box">awesome tutorial!
                    keep going!</div>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-3.jpg" alt="">
                    <div>
                        <h3>John </h3>
                        <span>25-10-2023</span>
                    </div>
                </div>
                <div class="comment-box">amazing way of teaching!
                    thank you so much!
                </div>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-4.jpg" alt="">
                    <div>
                        <h3>Jmaes</h3>
                        <span>27-10-2023</span>
                    </div>
                </div>
                <div class="comment-box">loved it, thanks for the tutorial!</div>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-5.jpg" alt="">
                    <div>
                        <h3>Deo E</h3>
                        <span>29-10-2023</span>
                    </div>
                </div>
                <div class="comment-box">this is what I have been looking for! thank you so much!</div>
            </div>

            <div class="box">
                <div class="user">
                    <img src="images/pic-2.jpg" alt="">
                    <div>
                        <h3>Student 1</h3>
                        <span>29-10-2023</span>
                    </div>
                </div>
                <div class="comment-box">thanks for the tutorial!

                    how to download source code file?
                </div>
            </div>

        </div>

    </section>

    <!-- custom js file link  -->
    <script src="script2.js"></script>

</body>

</html>