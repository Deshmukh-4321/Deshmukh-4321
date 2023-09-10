<?php   
include('header1.php');
?>
<body>
	<div class=" row container mt-2 mb-2 justify-content-center">
		<div class="col-lg-6 card">
			<form action="add_contact_code.php" method="post" enctype="multipart/form-data">
				<h1 class=" text-center"><i><u> Create new contact...!</u></i></h1>

				<label>Name.:</label>
				<input type="text" name="name" class="form-control" >

				<label>E-mail.:</label>
				<input type="E-mail" name="email" class="form-control">

				<label>Address.:</label>
				<input type="text" name="address" class="form-control">

				<label>Mobile.:</label>
				<input type="number" name="mobile" value="mobile" class="form-control">

				<label>Date of birth.:</label>
				<input type="date" name="dob" class="form-control" id="Date">

				 <label>Image</label>
				 <input type="file" name="image" class="form-control">
				<div>
					<label>Gender.:</label>&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="male" class="form-check-input"> Male
				&nbsp;&nbsp;&nbsp;
				<input type="radio" name="gender" value="female" class="form-check-input">Female</div>                                                  
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