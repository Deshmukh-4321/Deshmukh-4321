<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Footer</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="assets/js/bootstrap.bundle.min.js"> </script>
</head>
<body>
	<!-- Footer Start -->
	<footer class="bg-dark p-2">
		<div class="text-center">
			<p class="text-warning">All right reserved HMS | Designed By  Avantika Mali,
				Priyanka Jadhav ,
				 Kajal Vhanmane,
			Komal Deshmukh </p>
		</div>
	</footer>
	<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
	<!-- Footer end -->
</body>
</html>
