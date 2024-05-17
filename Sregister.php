<?php
$servername="localhost";
$username="root";
$password="";
$dbname="learn2lead";

$conn=mysqli_connect($servername,$username,$password,$dbname);
print_r($_POST);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `login`(`email`, `fullname`, `username`, `password`, `identity`, `education`)
   VALUES ('$_POST[mail]','$_POST[full_name]','$_POST[username]','$_POST[password]','$_POST[reco]','$_POST[education]')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $con->close();
  ?>

