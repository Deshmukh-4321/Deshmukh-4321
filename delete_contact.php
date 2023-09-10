<?php

session_start();

include('connection.php');

$contact_id = $_GET['contact_id'];

$query = "DELETE FROM contact_book WHERE contact_id = ".$contact_id;

mysqli_query($conn,$query);

$_SESSION['delete'] = "record deleted successfully";

header("location:contact_list.php");


?>