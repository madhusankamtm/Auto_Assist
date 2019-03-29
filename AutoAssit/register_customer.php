



 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register New Customer</title>
  
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
                           <a  class="bottomlogo" href="home.php"><img src="image/logo1.png" alt="logo"></a>
                           <li><h3>AutoAssit-Online Vehicle Solutions </h3></li>
			</ul>
			
	</div>
 
    <div class="jumbotron">
  <div class="container text-center">
    <h2>Create your own Account</h2>      
    <p>by login to AutoAssist you will receive new updates..</p>
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
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nic = $customer_name = $telephone = $email= $address= $username= $password= $confirm_password="";
$nic_err = $customer_name_err = $telephone_err = $email_err= $address_err= $username_err= $password_err= $confirm_password_err="";
 


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty(trim($_POST["nic"]))){
        $nic_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT reference_no FROM customer WHERE nic = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_nic);
            
            // Set parameters
            $param_nic = trim($_POST["nic"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $nic_err = "This username is already taken.";
                } else{
                    $nic = trim($_POST["nic"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
 
    // Validate username
    if(empty(trim($_POST["customer_name"]))){
        $customer_name_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT reference_no FROM customer WHERE customer_name = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_customer_name);
            
            // Set parameters
            $param_customer_name = trim($_POST["customer_name"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $customer_name_err = "This username is already taken.";
                } else{
                    $customer_name = trim($_POST["customer_name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    
     if(empty(trim($_POST["telephone"]))){
        $telephone_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT reference_no FROM customer WHERE telephone = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_telephone);
            
            // Set parameters
            $param_telephone = trim($_POST["telephone"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $telephone_err = "This username is already taken.";
                } else{
                    $telephone = trim($_POST["telephone"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT reference_no FROM customer WHERE email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
   
    
     if(empty(trim($_POST["address"]))){
        $address_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT reference_no FROM customer WHERE address = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_address);
            
            // Set parameters
            $param_address = trim($_POST["address"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $address_err = "This email is already taken.";
                } else{
                    $address = trim($_POST["address"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT reference_no FROM customer WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $username_err = "This email is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    }
    
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)  && empty($Cust_Name_err)  && empty($Cust_TP_err)  && empty($Cust_Address_err)  && empty($Cust_Email_err)  ){
        
        // Prepare an insert statement
        $sql = "INSERT INTO customer (nic,customer_name,telephone,email,address,username,password,active) VALUES (?,?,?,?,?,?,?,1)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssssss", $param_nic, $param_customer_name, $param_telephone, $param_email, $param_address, $param_username,$param_password);
            
            // Set parameters
            $param_nic = $nic;
            $param_customer_name = $customer_name; 
             $param_telephone = $telephone;
             $param_email = $email;
             $param_address = $address;
             $param_username= $username;
            $param_password=password_hash($password, PASSWORD_DEFAULT);
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: welcome.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
        
        
        
        
        
        
        
//         // Prepare an insert statement
//        $sql = "INSERT INTO Cust_Name (Cust_Name) VALUES (?)";
//         
//        if($stmt = $mysqli->prepare($sql)){
//            // Bind variables to the prepared statement as parameters
//            $stmt->bind_param("s",  $param_Cust_Name);
//            
//            // Set parameters
//            
//             $param_Cust_Name = $Cust_Name;
//            
//            
//            // Attempt to execute the prepared statement
//            if($stmt->execute()){
//                // Redirect to login page
//                header("location: login.php");
//            } else{
//                echo "Something went wrong. Please try again later.";
//            }
//        }
//         
//        // Close statement
//        $stmt->close();
//        
        
        
        
        
        
    }
    
    // Close connection
    $mysqli->close();
}
?>
        
        
        
          <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <div class="form-group <?php echo (!empty($nic_err)) ? 'has-error' : ''; ?>">
                <label>NIC</label>
                <input type="text" name="nic" class="form-control" value="<?php echo $nic; ?>">
                <span class="help-block"><?php echo $nic_err; ?></span>
            </div>
            
            <div class="form-group <?php echo (!empty($customer_name_err)) ? 'has-error' : ''; ?>">
                <label>Customer Name</label>
                <input type="text" name="customer_name" class="form-control" value="<?php echo $customer_name; ?>">
                <span class="help-block"><?php echo $customer_name_err; ?></span>
            </div> 
            
            
            <div class="form-group <?php echo (!empty($telephone_err)) ? 'has-error' : ''; ?>">
                <label>Customer Telephone</label>
                <input type="number" name="telephone" class="form-control" value="<?php echo $telephone; ?>">
                <span class="help-block"><?php echo $telephone_err; ?></span>
            </div> 
            
            
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Customer Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $address; ?></span>
            </div> 
            
            
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Customer Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div> 
            
            
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
        
        

        
        
      
      
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
