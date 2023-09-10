	<?php   
include('header.php');
?>

	<div class=" row container mt-5 mb-5 justify-content-center">
		<div class="col-lg-6 card">

			 <?php  

  if (isset($_SESSION['status']))
  {

    ?>
    <div class="alert alert-register text-center">
     <b class="text-primary"> <?php echo $_SESSION['status'];?> </b>
   </div>
   <?php 

 }

 session_destroy();

 ?>

			<form action="register_code.php" method="post">
				<h1 class=" text-center"><i><u> Register Here...!</u></i></h1>

				<label>Name.:</label>
				<input type="text" name="name" class="form-control" >

				<label>Mobile.:</label>
				<input type="number" name="mobile" value="mobile" class="form-control">

				<label>E-mail.:</label>
				<input type="E-mail" name="email" class="form-control">

				<label>password.:</label>
				<input type="password" name="password" class="form-control" id="password">

			<div class="row mt-2">
				<div class="col-lg-6 mb-2">
					<input type="submit" value="register" class="btn btn-primary btn-sm">
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