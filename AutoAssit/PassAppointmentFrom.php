<!DOCTYPE html>
//<?php
//// Initialize the session
//session_start();
// 
//// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login(test).php");
//    exit;
//}
//?>
<html>
<title>Auto Assist Web Applicaton - Project II</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="system/assets/css/bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display:none}
</style>
<body>


<div class="w3-content">

<h1 align="center">Notice</h1>
 <div class="col-sm-3">
<br>

<img src="image/repair-icon-pc.png" width="400" height="200">
<br>
</div>

<div class="col-sm-3">
<div style="border:thin" col-2>
       
<?php
//  htmlspecialchars($_SESSION["id"]);
require 'system/Connection.php';
$conn    = Connect();

if(!$conn){
	echo "yes";
	}

$Customer_Name   = $conn->real_escape_string($_POST['Customer_Name']);
$Requirement   = $conn->real_escape_string($_POST['Requirement']);
$AppointmentTimeSlot=$conn->real_escape_string($_POST['Appointment_TimeSlot']);
$Telephone    = $conn->real_escape_string($_POST['Telephone']);
$email = $conn->real_escape_string($_POST['email']);
date_default_timezone_set('Asia/Colombo');
$DateTime=date('Y-m-d h:i:s', time());;
$Appointments='Not respond';

//$date = date('m/d/Y h:i:s a', time());

$query   = "INSERT INTO appointment(Customer_name, Requirement, Appointment_TimeSlot, Requested_DateTime, Telephone, Email, Appointments) VALUES ('".$Customer_Name."','".$Requirement."','".$AppointmentTimeSlot."','".$DateTime."','".$Telephone."','".$email."','".$Appointments."' )";
$success = $conn->query($query);
 

if (!$success) {
    
 	?>
		<div class="col-sm-4">
			<div class="w3-panel w3-orange w3-display-container">
				<span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
				<h3>Error!</h3>
				<p><?php die("Couldn't enter data: ".$conn->error); ?>
				<br>
				
				</p>
				<br>
				
			</div>
		</div>
  
   <?php
}
else{
    
?>

		<div class="col-sm-4">
			<div class="w3-panel w3-orange w3-display-container">
				<span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
				<h3>Your booking is success</h3>
				<p>We will inform you as soon as possible.Check your e-mail. 
				<br>
				
				</p>
				<br>
				
			</div>
		</div>
  
    
    
    
   <?php	
}
$conn->close();
 
?> 
       
    </div>
    <br>
    </div> 
    </div>
    </body>
    

</html>