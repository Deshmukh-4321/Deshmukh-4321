<?php 
session_start();

include('connection.php');

$contact_id = $_POST['update_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$gender = $_POST['gender'];


$filename=$_FILES['image']['name'];       // Get file name

if ($filename == "")   // Check if Image not uploaded
{

    $query = "UPDATE contact_book SET contact_id = '$contact_id' , name = '$name' , email = '$email' , mobile = '$mobile' ,  dob = '$dob', gender = '$gender', address = '$address' WHERE contact_id = '$contact_id'";
}
else
{        // Check if Image uploaded

$tmp_name = $_FILES['image']['tmp_name'];   // for temporary Location
$folder = "upload/".$filename;        // set folder path
move_uploaded_file($tmp_name, $folder);     // Upload file into folder

$query = "UPDATE contact_book SET contact_id = '$contact_id' , name = '$name' , email = '$email' , mobile = '$mobile' ,  dob = '$dob', gender = '$gender', address = '$address', image = '$folder' WHERE contact_id = '$contact_id'";
} 


mysqli_query($conn,$query);

$_SESSION['update'] = "data updated successfully";

header("location:contact_list.php");

?>