<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Spare Parts </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 80px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      background-color: 	#90EE90;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Car Spare Parts</h1>      
    <p>Search your spare parts.Easily you can find. Try it...</p>
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
       <a class="navbar-brand logo" href="home.php"><img src="logo1.png" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
         <li><a href="home.php">HOME</a></li>
        <li><a href="#">SERVICE CENTERS</a></li>
        <li><a href="#">REPAIR CENTERS</a></li>
        <li><a href="SpareParts.php">SPAREPARTS CENTERS</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
         <li><a href="#">ABOUT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Interior</div>
         <div class="panel-heading">Floor components and parts,Car seat, Other Acceseries </div>
         <div class="panel-body"><img src="interior.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Click here to visit</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Electrical Section</div>
          <div class="panel-heading">Ignition,Lighting and signaling system,Sensors,Gauges and meters,Starting system</div>
          <div class="panel-body"><img src="abs.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Click here to visit</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Braking system</div>
        <div class="panel-heading">Adjusting mechanism (adjuster star wheel),Anchor,Bleed nipple,Brake backing plate</div>
        <div class="panel-body"><img src="breaking.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Click here to visit</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Engine components and parts</div>
         <div class="panel-heading">Suspension and steering systems,Engine cooling system,Engine oil systems</div>
         <div class="panel-body"><img src="engine.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Click here to visit</div>
      </div>
    </div>
      
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Transmission system</div>
        <div class="panel-heading">Adjustable pedal,Axle shaft,Bell housing,Universal joint,Other belts,Carrier assembly</div>
        <div class="panel-body"><img src="transmission.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Click here to visit</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Air conditioning system (A/C)</div>
         <div class="panel-heading">A/C Clutch,A/C Compressor,A/C Condenser,A/C Hose,A/C Kit,A/C Relay,A/C Valve
</div>
        <div class="panel-body"><img src="AC.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Click here to visit</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>AUTO-ASSIT</p>  
  <form class="form-inline">Get details:
      <input type="search" class="form-control" size="50" placeholder="Search your spare part">
    <button type="button" class="btn btn-danger">Search </button>
  </form>
</footer>

</body>
</html>
