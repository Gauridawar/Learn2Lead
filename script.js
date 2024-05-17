function redirectToLoginPage() {
    // Get the form element
    var loginForm = document.getElementById('loginForm');

    // Assuming you want to redirect to a page named "dashboard.html" after successful login
    var targetPage = "main.html";

    // Redirect to the target page
    window.location.href = targetPage;
  }

// Function to open the modal
function openForm() {
  // Display the modal content block
  var modalContent = document.getElementById("modal-content");
  modalContent.style.display = "block";

  // Apply blur effect to elements with the class "blurcontent" except for the one with ID "modal-content"
  var blurContents = document.getElementsByClassName("blurcontent");
  var navbarcontents = document.getElementsByClassName("navbar");
  for (var i = 0; i < navbarcontents.length; i++) {
   
    navbarcontents[i].style.filter = "blur(5px)";
  
}
  for (var i = 0; i < blurContents.length; i++) {
   
      blurContents[i].style.filter = "blur(5px)";
    
  }
}


// Function to close the modal
function closeForm() {
  var modalContent = document.getElementById("modal-content");
  modalContent.style.display = "none";

  var blurContents = document.getElementsByClassName("blurcontent");
  for (var i = 0; i < blurContents.length; i++) {
    blurContents[i].style.filter = "none";
  }
}
