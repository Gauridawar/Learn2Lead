let toggleBtn = document.getElementById('toggle-btn');
let body = document.body;
let darkMode = localStorage.getItem('dark-mode');

// const enableDarkMode = () =>{
//    toggleBtn.classList.replace('fa-sun', 'fa-moon');
//    body.classList.add('dark');
//    localStorage.setItem('dark-mode', 'enabled');
// }

// const disableDarkMode = () =>{
//    toggleBtn.classList.replace('fa-moon', 'fa-sun');
//    body.classList.remove('dark');
//    localStorage.setItem('dark-mode', 'disabled');
// }

// if(darkMode === 'enabled'){
//    enableDarkMode();
// }

// toggleBtn.onclick = (e) =>{
//    darkMode = localStorage.getItem('dark-mode');
//    if(darkMode === 'disabled'){
//       enableDarkMode();
//    }else{
//       disableDarkMode();
//    }
// }

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   search.classList.remove('active');
}

let search = document.querySelector('.header .flex .search-form');

document.querySelector('#search-btn').onclick = () =>{
   search.classList.toggle('active');
   profile.classList.remove('active');
}

let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
   sideBar.classList.toggle('active');
   body.classList.toggle('active');
}

document.querySelector('#close-btn').onclick = () =>{
   sideBar.classList.remove('active');
   body.classList.remove('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
   search.classList.remove('active');

   if(window.innerWidth < 1200){
      sideBar.classList.remove('active');
      body.classList.remove('active');
   }
}

// Toggle night mode function
function toggleNightMode() {
   var startScreen = document.querySelector('.start-screen');
   startScreen.classList.toggle('night-mode');
}

// Example: You can trigger this function on a button click
document.getElementById('toggle-btn').addEventListener('click', toggleNightMode);


const toggleButton = document.getElementById('toggleSidebar');
const sideBarElement = document.getElementById('sidebar'); // Change variable name
const content = document.getElementById('main-content');

toggleButton.addEventListener('click', function () {
   sideBarElement.classList.toggle('active');
   content.classList.toggle('center-content-shifted');
});

document.addEventListener('DOMContentLoaded', function () {
   var ctx = document.getElementById('performanceChart').getContext('2d');
   var performanceChart = new Chart(ctx, {
       type: 'line',
       data: {
           labels: ['January', 'February', 'March', 'April', 'May'],
           datasets: [{
               label: 'Performance Assessment',
               data: [65, 75, 80, 85, 70], // Placeholder data, replace with actual data
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
               data: [5,  6, 2.5, 7.5], // Placeholder data, replace with actual data
               backgroundColor: ['#e74c3c', '#f39c12', '#3498db', '#9b59b6']
           }]
       }
   });
});



