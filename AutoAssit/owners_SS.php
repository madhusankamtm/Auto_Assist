<?php
 //Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
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
<!-- Header -->
<!--<div class=allcontain">-->
	<div class="header">

			<ul class="givusacall">
				<li>Call us: +94553624571 </li>
			</ul>
			<ul class="logreg">
                            <h4>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to AutoAssit</h4>
                             <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                             <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
			</ul>
	</div>
	
	<!-- Navbar Up -->
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
<!--				<li>
                                    <a href="garajsearch.php">Garaj</a>
 
				</li>

-->
                                <li>
                                <a href="appointment.php">APPOINMENTS</a>
				</li>
				<li>
                                    <a href="customer.php">CUSTOMERS</a>
 
				</li>
<!--				<li>
                                    <a href="sp_add.php">SPAREPARTS ADD</a>
 
				</li>
                                <li>
                                    <a href="sp_book.php">BOOKED PARTS</a>
 
				</li>-->
				<li>
                                    <a href="emil.php">CUSTOMER CONTACT</a>
 
				</li>
				
				<div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
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
<!-- ____________________Services Section ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><b><span class="bdots">&bullet;</span>O U R <span class="carstxt">S E R V I C E S</span>&bullet;</b></h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="image/garaj.jpg" alt="garaj">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Garaj & Service Center  <br>Finding</h1>
							<p>"To select easily garaj & service center<br>
						at the places where you didn't go previously"</p>
			 				<h2>Using Online map</h2>
			 				<button id="btnRM" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1>Are You looking</h1>
			 						<p>"Are you looking for a garaj & service centers,<br>
			 						at the places where you did't konw anything. 
									<br>Then you face a trouble.<br>
									This is the web site that help you to find it easily.you can search by using 
									map to select the neareset garaj or service center from the place you want a help.
			 						<br>
			 						</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
	<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="image/sparepart.jpg" alt="sparepart">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Sparepart Centers </h1>
							<p>"To select Sparepart centers<br>
						to get most suitable parts for you"</p>
			 				<h2>Using Online map</h2>
			 				<button id="btnRM2">READ MORE</button>
			 				<div id="readmore2">
			 						<h1>Do you found it</h1>
			 						<p>This is the place that you can eassily found the spare parts that you need for 
									your vehicle.you can get best ones at best shops.</p>
			 						<button id="btnRL2">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			</div>

		</div>
	</div>
	
	
	

<!-- _______________________________News Letter ____________________-->

<form action="comment-reply-system/post_details.php" method="post">
    <div class="newslettercontent">
		<div class="leftside">
			<img src="image/border.png" alt="border">
			<h1><b>Discussion Forum</b></h1>
			<p>Exchange your ideas with others</p>
		</div>
		<div class="rightside">
                    
			<img class="newsimage" src="image/newsletter.jpg" alt="newsletter">
			<!--<input type="text" class="form-control" id="subemail" placeholder="EMAIL">-->
			<button>SUBSCRIBE</button>
                        
                        
		</div>
	</div>

</form>

	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="image/logo1.png" alt="logo1"><span class="dotlogo">&bullet;</span>
		</div>
		<!--<ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
			<li role="presentation"><a href="#/">CATEGORIES</a></li>
			<li role="presentation"><a href="#/">PREORDERS</a></li>
			<li role="presentation"><a href="#/">CONTACT US</a></li>
			<li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
		</ul>-->
		<p>"Our main Objective is<br>
			add Value to our customer with our superb service"</p>
		 <img src="image/line.png" alt="line"> <br>
<!--<div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>-->
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

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>