<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <title>alert</title>
    </head>
    <body>
        <a class="navbar-brand logo" href="index.html"><img src="image/logo1.png" alt="logo"></a>


<nav class="nav nav-pills nav-justified navbar navbar-expand-lg navbar navbar-dark bg-dark">
 <li class="nav-item active">
        <a class="nav-link" href="#"><b>HOME</b> <span class="sr-only">(current)</span></a>
      </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b>DETAILS</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="detail.php">Garaj</a>
          <a class="dropdown-item" href="#">Service Centers</a>
          <a class="dropdown-item" href="#">Sparepart Centers</a>
        </div>
      </li>

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b>APPOINMENTS</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="approval.php">Garaj</a>
          <a class="dropdown-item" href="#">Service Centers</a>
          <a class="dropdown-item" href="#">Sparepart Centers</a>
        </div>
      </li>
      
      <li class="nav-item ">
        <a class="nav-link" href="#"><b>CREATE NEW ACCOUNT</b> <span class="sr-only">(current)</span></a>
      </li>
</nav>
       
      
<?php
            if (isset($_POST['submit'])) {
                echo 'Message Sending Failed, try again';
            } else {

                echo'<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Thank you for contacting with us.we send your details to administration to check.</p>
  <hr>
  <p class="mb-0">After checking the details that you entered, we send you to a message to inform about.</p>
</div>';
            }
            ?>
    </body>
</html>
