<?php

session_start();

include('connection.php');


$email=$_POST['email'];
$password=$_POST['password'];

$query = "SELECT * FROM user WHERE email = '$email' AND password='$password'";

$result =  mysqli_query($conn,$query);

$row = mysqli_num_rows($result);

if($row == 0)
{
  // email or pass word not match
  $_SESSION['status'] = "Email or Password not matched";


  header("location:login.php");
}
else
{

    // email or pass word  match

  $_SESSION['status'] = "Login SuccessFully";

  $row = mysqli_fetch_assoc($result); 

    $_SESSION['user_id'] = $row['user_id'];

    $_SESSION['name'] = $row['name'];

  header("location:dashboard.php");

}


?>
