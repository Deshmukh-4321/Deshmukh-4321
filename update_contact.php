<?php   
include('header.php');

include('connection.php');

$update_id = $_GET['update_id'];

$query = "SELECT * from contact_book WHERE contact_id = $update_id";
 
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

// print_r($row);
// exit();


$name= $row['name'];
$email= $row['email'];
$mobile= $row['mobile'];
$dob= $row['dob'];
$address= $row['address'];
$gender= $row['gender'];
$image= $row['image'];
?>
<body>
	<div class=" row container mt-2 mb-2 justify-content-center">
		<div class="col-lg-6 card">
			<form action="update_contact_code.php" method="post" enctype="multipart/form-data"> 
				<h1 class=" text-center"><i><u> Update Contact...!</u></i></h1>

				<input type="hidden" name="update_id" value=" <?php echo $update_id; ?> "><br>

				<label>Name.:</label>
				<input type="text" name="name" class="form-control" id="name" value="<?php echo $name; ?>" required>

				<label>E-mail.:</label>
				<input type="E-mail" name="email" class="form-control" value="<?php echo $email; ?>" required>

				<label>mobile.:</label>
				<input type="text" name="mobile" class="form-control" value="<?php echo $mobile ?>" required>

				<label>DOB.:</label>
				<input type="date" name="dob" class="form-control" value="<?php echo $dob; ?>" required>


				<label>Address.:</label>
				<input type="text" name="address" class="form-control" value="<?php echo $address; ?>" required>

				<label>Gender.:</label>
				<input type="radio" name="gender" value="male"> 
				<?php 

				if ($gender == "male")  
				{
					echo "checked";
				}

				 ?> <class="form-check-input"> Male&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="female" 
				<?php 

				if ($gender == "female")  
				{
					echo "checked";
				}

				 ?> class="form-check-input"> Femal<br>

				<label>Image</label>
				<input type="file" name="image" value="" class="form-control">
		 		<h6>Old Image</h6>
		 		<img src="<?php echo $image; ?>" width="100px">
		
			<div class="row mt-2">
				<div class="col-lg-6 mb-2">
					<input type="submit" value="save" class="btn btn-primary btn-sm">
				</div>
				<div class="col-lg-6 mb-2 text-end">
					<input type="reset" value="cancle" class="btn btn-primary btn-sm">
				</div>
			</div>
			</form>
		</div>
	</div>
	<?php   
	include('footer.php');
	?>
</body>
</html>