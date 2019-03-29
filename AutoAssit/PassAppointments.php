<!DOCTYPE html>

<?php
// Initialize the session
session_start();
// 
//// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login(test).php");
//    exit;
//}
?>
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
<div style="border:thin" col-2>
 



<?php
require 'system/Connection.php';
$conn    = Connect();
$R_No= $_SESSION['Reference_No'];
//$R_No = $conn->real_escape_string($_POST['Reference_No']);

	$action = $conn -> real_escape_string($_POST['action']);
	
	 $conn    = Connect();
		
		
	echo '</br>';
	
if ($action == 'Approve')
{	
	$conn    = Connect();
        
	$query1 = "UPDATE appointment SET Appointments='".$action."' WHERE Reference_No='".$R_No."'"; 
	$success1 = $conn->query($query1);
	
         if ($_POST['id'] || $_POST['email']) {
     $to = $_POST['email'];
     $message = 'Your appoinment has been accepted successfully ..';
       $headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .
                   'MIME-Version: 1.0' . "\r\n" .
                   'Content-Type:text/html;charset=utf-8';
     $result1 = mail($to, "Hello..We are Auto Assist System.", $message, $headers);
    
     }
    
    
    
        
        
        
?>
	<div class="col-sm-4">
				<div class="w3-panel w3-orange w3-display-container">
					
					<h3>SuccesFul !</h3>
					<p>Appointments Approved Succesfully !
					<br>
					 Requester was Informed via e-mail.
					</p>
					<br>
					
				</div>
			</div>
			<?php 
			
			
}
else if($action == 'Decline')
{	
	$conn    = Connect();
        
	$query2 = "UPDATE appointment SET Appointments='".$action."' WHERE Reference_No='".$R_No."'"; 
	$success2 = $conn->query($query2);
	if ($_POST['id'] || $_POST['email']) {
     $to = $_POST['email'];
     $message = 'Your appoinment has been rejected ..';
       $headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .
                   'MIME-Version: 1.0' . "\r\n" .
                   'Content-Type:text/html;charset=utf-8';
     $result1 = mail($to, "Hello..We are Auto Assist System.", $message, $headers);
    
     }

	?>
		<div class="col-sm-4">
				<div class="w3-panel w3-orange w3-display-container">
					
					<h3>SuccesFul !</h3>
					<p>Appointments Declined Succesfully !
					<br>
					Requester was Informed via e-mail.
					</p>
					<br>
					
				</div>
			</div>
			
	 
	<?php

}else{
 ?>  
    <div class="col-sm-4">
				<div class="w3-panel w3-orange w3-display-container">
					
					<h3>Error !</h3>
					<p><?php die("Couldn't Handle. Error: ".$conn->error);?> !
					<br>
					
					</p>
					<br>
					
				</div>
			</div>
    <?php
    }
$conn->close();
 
?>
</div></div></div></body></html>