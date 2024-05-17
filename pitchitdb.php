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
  
  $sql = "INSERT INTO `pitchit`(`s_name`, `S_year`, `file`) VALUES ('$_POST[startupName]','$_POST[yearFounded]','$_POST[uploadFile]')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $con->close();
  ?>

