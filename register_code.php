<?php

session_start();

include('connection.php');

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];


$query = "SELECT * FROM user WHERE email = '$email'";


 $result =  mysqli_query($conn,$query);

$row = mysqli_num_rows($result);

if($row == 0)
{
  // New User


  $query = "INSERT INTO user( name, mobile, email, password) VALUES('$name', '$mobile','$email',  '$password')";
  mysqli_query($conn,$query);

  $_SESSION['status'] = "register successfully";
  header("location:login.php");
}
else
{

  // Already Exist

   $_SESSION['status'] = "Email Already Exists";
   header("location:register.php");

}



?>
