	<?php   
include('header.php');
?>
 <?php  

  if (isset($_SESSION['status']))
  {

    ?>
    <div class="alert alert-register text-center">
     <b class="text-primary"><?php echo $_SESSION['status'];?> </b>
   </div>
   <?php 

 }

 session_destroy();

 ?>
	<div class=" row container mt-5 mb-5 justify-content-center" style="min-height:350px">
		<div class="col-lg-6 card">
			<form action="login_code.php" method="post">
				<h1 class=" text-center"><i><u> login...!</u></i></h1>

				
				<label>E-mail.:</label>
				<input type="E-mail" name="email" class="form-control">

				<label>password.:</label>
				<input type="password" name="password" class="form-control" id="password">

				<p class="text-warning text-center p-2">( login to see your contacts.)</p>

				<div class="row mt-2">
				<div class="col-lg-6 mb-2">
					<input type="submit" value="login" class="btn btn-primary btn-sm">
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