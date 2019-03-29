<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Auto Assist Web Applicaton - Project II</title>
	<meta name="description" content="">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">

	
</head>
<body>

	<div class="header">

			<ul class="givusacall">
				<li>Call us: +94553624571 </li>
			</ul>
			<ul class="logreg">
                            <li><img src="654853-user-men-2-512.png" height="50" width="40"><a href="login.php"><span class="register">Login </span></a> </li>
                            <li></li>
                            <li><img src="registration.png" height="50" width="40"><a href="Registration.php"><span class="register">Register</span></a></li>
			</ul>
	</div>



	
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                            <a class="navbar-brand logo" href="home.php"><img src="image/logo1.png" alt="logo"></a>
			</div>	 
		</div>
            <div class="collapse navbar-collapse" id="upmenu" >
			<ul class="nav navbar-nav" id="navbarontop">
                            <li class="active"><a href="home.php">HOME</a> </li>
				
				<li>
					<a href="#">ABOUT US</a>
 
				</li>
<!--				<div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>-->
			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="image/car1(2).jpg" alt="car1(1)">
			
			</div>
			<div class="item">
				<img src="image/car2(2).jpg" alt="car2(2)">
				
			</div>
			<div class="item">
				<img src="image/car3(3).jpg" alt="benz">
				
			</div>
		</div>
		
	</div>
</div>
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><b><span class="bdots">&bullet;</span>C O N T A C T<span class="carstxt">U S</span>&bullet;</b></h1>
	</div>
    <div class="text-center"><b>Our Email : </b><a href="autoassistautoassist43@gmail.com">autoassistautoassist43@gmail.com</a>
       <br> <b>Our Telephone : +94553624571</div>

<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="image/logo1.png" alt="logo1"><span class="dotlogo">&bullet;</span>
		</div>
		<p>"Our main Objective is<br>
			add Value to the customer time by using this wed application"</p>
		 <img src="image/line.png" alt="line"> <br>
		 <div class="footer">
				<div class="copyright">
				  &copy; Copy right 2018 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					<a href="#">Group Project II (Group No.13) </a> 
				</div>
			</div>
	</div>
</div>







<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

var myCenter=new google.maps.LatLng(41.567197,14.681526);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}



</script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<script>
	$(window).resize(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
	});

	$(window).load(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
		google.maps.event.addDomListener(window, 'load', initialize());
	});
	
</script>
<script type="text/javascript" src="source/js/myscript.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>






</body>
</html>