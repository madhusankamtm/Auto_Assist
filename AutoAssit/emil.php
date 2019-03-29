<?php // include 'connection.php '; 
$username = "root";
        $password = "";
        $hostname = "localhost";
        $db = "autoassit";


        $conn = mysqli_connect($hostname, $username, $password, $db)
                or die("Unable to connect to MySQL");



  $result="";
  //if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['message'];
  $headers='From: autoassistautoassist43@gmail.com'. "\r\n" . 
                 'MIME-Version: 1.0' .  "\r\n" .
                 'content-Type: text/html; ';
  
  $send = mail(  $email,$subject, $comment, $headers);
  
  if($send ){
    $result="<p class='ok' >Email sent successfully</p>";
  }else{
    $result="<p class='error1'>Error, Try again";
  } 

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Spare Parts </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

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
      background-color: #101010;
      padding: 25px;
    }
    .ok{
                margin: auto;
                color:green;
                border-bottom: 6px solid green;
                border-width: 2px;
                width:100%;
                background-color: azure;
                padding:10px;
            }
            .error1{
                margin: auto;
                color:red;
                border-bottom: 6px solid red;
                border-width: 2px;
                width:100%;
                background-color: peachpuff;
                padding:10px;
            }
            .error{
               color:red; 
            }
            .diverror{
                margin: auto;
                width:100%;
                padding: 12px 20px;
               
            }
  </style>
</head>
<body>

<!--<div class="jumbotron">
  <div class="container text-center">
    <h1>Car Spare Parts</h1>      
    <!--<p>Search your spare parts.Easily you can find. Try it...</p>
  </div>
</div>-->

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
      <!--<ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>-->
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-3">
      
    </div>
    <div class="col-sm-6"> 
      <div class="panel panel-success">
        <div class="panel-heading"><h1>Send Mail</h1></div>
          <div class="diverror"><?php echo $result; ?></div>
        <div class="panel-body">
         

            <form class="form-horizontal" action="" id="mailForm">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Email to" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="subject">Subject:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="message">Message:</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="message" name="message"></textarea>
      </div>
    </div> 
     <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Submit" class="btn btn-success"/>
    </div>
  </div>
   
    </form>
  

            
        </div>
        <div class="panel-footer">
                 
        </div>
      </div>
    </div>
    <div class="col-sm-2"> 
      
    </div>
  </div>
</div><br>

<div class="container">    
  
</div><br><br>

<footer class="container-fluid text-center">
  <p>AUTO-ASSIT</p>  
  <!--<form class="form-inline">Get details:
      <input type="search" class="form-control" size="50" placeholder="Search your spare part">
    <button type="button" class="btn btn-danger">Search </button>
  </form>-->
</footer>
<script type="text/javascript">
		$.validator.setDefaults( {
			submitHandler: function (form) {
				//alert( "submitted!" );
                                $(form).ajaxSubmit();
			}
		} );

		$( document ).ready( function () {
			$( "#mailForm" ).validate( {
				rules: {
					subject: "required",
					message: "required",
					
				
					email: {
						required: true,
						email: true
					}
					
				},
				messages: {
					subject: "Please enter subject ",
					message: "Please enter message",
					
					email: "Please enter a valid email address",
					
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.next( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}
			} );

		} );
	</script>

</body>
</html>
