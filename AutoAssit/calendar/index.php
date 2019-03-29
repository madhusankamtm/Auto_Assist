






 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calender</title>
  
  <link rel="stylesheet" type="text/css" href="style/mystyle.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom:65px;
      border-radius: 0;
      background-color:#191970;
      
      
       
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
       
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
      
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
    
     <div class="header">
			
            
                       <ul class="givusacall">
                           <a  class="bottomlogo" href="../home.php"><img src="../image/logo1.png" alt="logo"></a>
                           <li><h1>AutoAssit-Online Vehicle Solutions </h1></li>
			</ul>
			
	</div>
    <div class="jumbotron">
  <div class="container text-center">
    <h3>Find booked schedules via calander</h3>      
    
  </div>
</div>
    
    
    
 
<nav class="navbar navbar-inverse">
    
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       
        
              
				
        
    </div>
     
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="../home.php">HOME</a></li>
        <li><a href="#">SERVICE CENTERS</a></li>
        <li><a href="#">REPAIR CENTERS</a></li>
        <li><a href="#">SPAREPARTS CENTERS</a></li>
        <li><a href=" ../contact.php">CONTACT US</a></li>
         <li><a href="#">ABOUT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="../register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
       
     
    </div>
    <div class="col-sm-8 text-left">
      
      
       <?php
//Include the event calendar functions file
include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Event Calendar by CodexWorld</title>
    <!-- Include the stylesheet -->
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <!-- Include the jQuery library -->
    <script src="jquery.min.js"></script>
</head>
<body>
    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
</body>
</html>


 
        
        

        
        
      
      
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p></p>
      </div>
      <div class="well">
        <p></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>AUTO-ASSIST</p>
</footer>

</body>
</html>
