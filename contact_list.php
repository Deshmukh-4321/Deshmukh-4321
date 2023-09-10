<?php   
include('header1.php');

include('connection.php');


$query = "SELECT * from contact_book WHERE user_id = ".$_SESSION['user_id'];

$result = mysqli_query($conn,$query);

?>
 
<body>
  <!-- Main Div start -->
 
  <div class="container mt-2 mb-2 justify-content-center text-center" style="min-height: 500px;">
    <i class='fa fa-users' style='font-size : 48px;'></i>
    <h3 class="mb-4"><i></i>Contact List</h3>	

    <div class=" mb-3">
     <a href="add_contact.php" class="btn btn-primary"> <button class="btn btn-sm btn-primary">
      <span>&#10009;</span>
    </button></a>
  </div>
  <?php  

  if (isset($_SESSION['add']))
  {

    ?>
    <div class="alert alert-add">
     <b class="text-primary"> recored added successfully </b>
   </div>
   <?php 

 // session_destroy();
 }


 ?>

 <?php  

 if(isset($_SESSION['delete']))
 {

  ?>
  <div class="alert alert-delete" >
    <b class="text-danger">recored deleted successfully</b>
  </div>

  <?php 


}

?>

<?php  

if(isset($_SESSION['update']))
{

  ?>

  <div class="alert alert-delete" >
    <b class="text-warning">recored updated successfully</b>
  </div>

  <?php 

}

?>
<div class="mb-3">
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
      <th>Action</th>
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
        <td>
          <a href="delete_contact.php?contact_id=<?php echo $row['contact_id']; ?>">
            <button><i class="fa fa-trash" style="color: red;"  onclick="return confirm('are you shure to delete record')"></i></button>
          </a>
          <a href="update_contact.php?update_id= <?php echo $row['contact_id']; ?>">
            <button><i class="fa fa-pencil" style="color: green;"> </i></button>
          </a> 
        </td>
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