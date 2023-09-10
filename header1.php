<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contact book management system.</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- Latest compiled JavaScript -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Get your code at fontawesome.com-->
  <script src="assets/js/bootstrap.bundle.min.js"> </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  

</head>
<body>

  <!-- Navbar start -->
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_list.php">contact list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_contact.php">add contact </a>
          </li>
            <a class="nav-link" href="logout.php">logout(<?php echo $_SESSION['name'];?>)</a>
          </li></div>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Navbar end -->
</body>
</html>