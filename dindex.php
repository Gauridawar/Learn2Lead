<!-- <!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet" />
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Learn2Lead dashboard</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="styledb.css" />


</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                  <img src="uimages.png">
                     <!-- <a href="index.php"><img class="logo_icon img-responsive" src="images\Learn2Lead-logos_transparent.png"
                           alt="#" /></a> -->
                  </div>
                  
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                   
                     <div class="user_info">
                        
                        <h6><?php echo $_COOKIE['username']?></h6>
                        <h7>Student</h7>
                        <p><span class="online_animation"></span> Online</p>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="sidebar_blog_2">
               <h4>Category</h4>
               <ul class="list-unstyled components">
                  </li>
                  <li><a href="pitchit.html"><i class="fa fa-clock-o orange_color"></i> <span>PitchIt</span></a></li>
                  <li>
                  <a href="internship.html"><i class="fa fa-diamond purple_color"></i> <span>Internship</span></a>
                  
                  </li>


                  <li><a href="course1.php"><i class="fa fa-book blue1_color"></i> <span>Courses</span></a></li>
                  <li>
                     <a href="contact.php">
                        <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                  </li>
                  <li>
                     <a href="index.php">
                        <i class="fa fa-sign-out yellow_color"></i> Log Out</a>
                  </li>
               </ul>





         </nav>
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                           class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="index.html"><img class="img-responsive" src="images\Logo1.png" alt="#" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                  </div>
               </nav>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <section class="about">
  
               <div class="row">
       
                  
       
                   <div class="dashboard-content">
                       <h3>Dashboard</h3>
                       <p>The Learning management system allows users to learn from a set of modules and track their progress.</p>
                       
                   </div>
       
               </div>
       
               <div class="box-container" style="color: white;">
                   <div class="box" style="color:white">
                       <div class="progress-bar-container">
                           <div class="progress-bar">
                               <div class="progress" style="width: 40%;"></div>
                           </div>
                           <p class="progress-label">Course Progress</p>
                       </div>
                       <h2>Almost Half Done!</h2>
                       
                   </div>
                   
                   <div class="box">           
                     <div class="checklist-container">
                     <h3>My Checklist</h3>
                     <ul class="checklist">
                         <li>
                             <input type="checkbox" id="task1">
                             <label for="task1">Task 1</label>
                         </li>
                         <li>
                             <input type="checkbox" id="task2">
                             <label for="task2">Task 2</label>
                         </li>
                         <li>
                             <input type="checkbox" id="task3">
                             <label for="task3">Task 3</label>
                         </li>
                         <!-- Add more tasks as needed -->
                     </ul>
                 </div></div>
       
                   <div class="box">
                       <!-- Set a fixed size for the timeSpentChart -->
                       <canvas id="timeSpentChart" width="400" height="400"></canvas>
                   </div>
       
                   <div class="box">
                       <!-- Set a fixed size for the performanceChart -->
                       <canvas id="performanceChart" width="400" height="400"></canvas>
                   </div>
                
                   <div class="box">
               <div class="checklist-container">
                 <h3>My Checklist</h3>
                 <ul class="checklist">
                     <li>
                         <input type="checkbox" id="task1">
                         <label for="task1">Task 1</label>
                     </li>
                     <li>
                         <input type="checkbox" id="task2">
                         <label for="task2">Task 2</label>
                     </li>
                     <li>
                         <input type="checkbox" id="task3">
                         <label for="task3">Task 3</label>
                     </li>
                     <!-- Add more tasks as needed -->
                 </ul>
             </div>
             </div>
     
             <!-- Progress Bars -->
             <div class="box">
             <div class="progress-container">
                 <h3>Task Progress</h3>
                 <div class="progress-bar">
                     <div id="progress-task1" class="progress-bar-fill"></div>
                 </div>
                 <p class="progress-label">Task 1</p>
     
                 <div class="progress-bar">
                     <div id="progress-task2" class="progress-bar-fill"></div>
                 </div>
                 <p class="progress-label">Task 2</p>
     
                 <div class="progress-bar">
                     <div id="progress-task3" class="progress-bar-fill"></div>
                 </div>
                 <p class="progress-label">Task 3</p>
     
                 <!-- Add more progress bars for additional tasks -->
             </div>
         </div>
     
               </div>
     
              
               
       
           </section>
           
                 <!-- Highlighted: Placeholder button for generating a report -->
                 <button id="generate" class="btn">Generate Report</button>
        
       </main>

       <!-- custom js file link -->
       <script src="js/script.js"></script>
       
       <script>
           document.addEventListener('DOMContentLoaded', function () {
               var ctx = document.getElementById('performanceChart').getContext('2d');
               var performanceChart = new Chart(ctx, {
                   type: 'line',
                   data: {
                       labels: ['January', 'February', 'March', 'April', 'May'],
                       datasets: [{
                           label: 'Performance Assessment',
                           data: [65, 75, 80, 85, 100], // Placeholder data, replace with actual data
                           borderColor: '#3498db',
                           borderWidth: 2,
                           fill: false
                       }]
                   },
                   options: {
                       scales: {
                           y: {
                               beginAtZero: true,
                               max: 100
                           }
                       }
                   }
               });
           });
       
           document.addEventListener('DOMContentLoaded', function () {
               var ctx = document.getElementById('timeSpentChart').getContext('2d');
               var timeSpentChart = new Chart(ctx, {
                   type: 'pie',
                   data: {
                       labels: ['Module 1',  'Module 2', 'Module 3', 'Module 4'],
                       datasets: [{
                           data: [5,  4, 2.5, 10], // Placeholder data, replace with actual data
                           backgroundColor: ['#e74c3c', '#f39c12', '#3498db', '#9b59b6']
                       }]
                   }
               });
           });
       </script>
            
            <!-- end testimonial -->
            <!-- progress bar -->

            <!-- end progress bar -->

            <!-- end dashboard inner -->
         </div>
      </div>
   </div>


   </div>
   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="js/animate.js"></script>
   <!-- select country -->
   <script src="js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="js/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="js/Chart.min.js"></script>
   <script src="js/Chart.bundle.min.js"></script>
   <script src="js/utils.js"></script>
   <script src="js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
   <script src="js/chart_custom_style1.js"></script>
</body>

</html> -->