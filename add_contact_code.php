<?php

session_start();

include('connection.php');

$user_id=$_SESSION['user_id'];

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile']; 
$dob=$_POST['dob'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$filename=$_FILES['image']['name'];       // Get file name
$tmp_name = $_FILES['image']['tmp_name'];   // for temporary Location
$folder = "upload/".$filename;        // set folder path
move_uploaded_file($tmp_name, $folder);     // Upload file into folder


$query = "INSERT INTO contact_book( name, email, mobile, dob,address, gender, user_id, image) VALUES('$name', '$email', '$mobile', '$dob','$address', '$gender', '$user_id', '$folder')";

  mysqli_query($conn,$query);


  $_SESSION['add'] = "record added successfully";

header("location:contact_list.php");

?>
