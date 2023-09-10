<?php   
include('header1.php');

include('connection.php');


$query = "SELECT * from contact_book WHERE dob =  CURDATE() AND user_id = ".$_SESSION['user_id'];

$result = mysqli_query($conn,$query);

?>
 
<body>
  <!-- Main Div start -->
 
  <div class="container mt-2 mb-2 justify-content-center text-center" style="min-height: 500px;">
    <i class='fa fa-users' style='font-size : 48px;'></i>
    <h3 class="mb-4"><i></i>Dashboard</h3>	

    <div class=" mb-3">
     <a href="add_contact.php" class="btn btn-primary"> <button class="btn btn-sm btn-primary">
      <span>&#10009;</span>
    </button></a>
  </div>
  
<div class="mb-3">
	<h3 class="text-left">Todays Birthday</h3>
<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">
</div>
<table class="table table-bordered table-striped" id="myTable">
  <thead>
    <tr>
      <th>contact_id</th>
      <th>Image </th>
      <th>contact Name</th>
      <th>E-mail</th>
      <th>Mobile</th>   
      <th>Date of birth</th>     
      <th>Address</th> 
      <th>Gender</th>
      
    </tr>
  </thead>
  <tbody>

    <?php

         // $row = mysqli_fetch_assoc($result);

         // print_r($row);
    $count = 1 ;

    while ($row = mysqli_fetch_assoc($result) )
    {
      ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td> <img src="<?php echo $row['image']; ?>" width="80px"> </td>
        <td><?php echo $row['name']; ?></td>
        <td> <?php echo $row['email']; ?></td>
        <td> <?php echo $row['mobile']; ?> </td>
        <td> <?php echo $row['dob']; ?> </td>
        <td> <?php echo $row['address']; ?></td>
        <td> <?php echo $row['gender']; ?></td>
      
      </tr>
      <?php 
      $count++; 
    }

    ?>

  </tbody>
</table>	
</div>
<!-- Main Div End -->
<?php   
include('footer.php');
?>
</body>
</html>