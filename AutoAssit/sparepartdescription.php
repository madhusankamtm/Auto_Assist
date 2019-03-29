<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login(test).php");
    exit;
}
?>

<?php
        htmlspecialchars($_SESSION["reference_no"]);
        $username = "root";
        $password = "";
        $hostname = "localhost";
        $db = "autoassit";
        $conn = mysqli_connect($hostname, $username, $password, $db)
                or die("Unable to connect to MySQL");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {    
            $quantity=$_POST['qty'];
             
          //  if($_GET['sp_id'] ){
          //  $spid=$row['sp_id'];    
              if (isset($_POST['submit'])) {
                   
                     $query11 ="INSERT INTO sp_booking values(NULL,'".$_POST['sp_id']."','".$_POST['spc_id']."','".$_SESSION['reference_no']."','".$quantity."')";
                    
                     $result11= mysqli_query($conn,$query11);
                   
                     $query1="UPDATE sparepart SET quntity=quntity - $quantity WHERE sp_id=".$_POST['sp_id'];
                     $result1= mysqli_query($conn,$query1);
                
                     if(mysqli_affected_rows($conn)>0){
                         header('Location: sparepart_search.php');
                     }
                     
                  
            }
           
            
           // echo $_GET['sp_id'];
           // echo $query11;    
             mysqli_close($conn);
        }
        ?>
<html>
    <head>
        <title>More details</title>
          <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



        <style>
div.background {
  background: url(klematis.jpg) repeat;
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.9;
  filter: alpha(opacity=80); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
body {
   /* just for this demo. */
   
   padding: 30px;
}

.btn {
   /* just for this demo. */
   
   margin-top: 5px;
}

.btn-arrow-right,
.btn-arrow-left {
   position: relative;
   padding-left: 18px;
   padding-right: 18px;
}

.btn-arrow-right {
   padding-left: 36px;
}

.btn-arrow-left {
   padding-right: 36px;
}

.btn-arrow-right:before,
.btn-arrow-right:after,
.btn-arrow-left:before,
.btn-arrow-left:after {
   /* make two squares (before and after), looking similar to the button */
   
   content: "";
   position: absolute;
   top: 5px;
   /* move it down because of rounded corners */
   
   width: 22px;
   /* same as height */
   
   height: 22px;
   /* button_outer_height / sqrt(2) */
   
   background: inherit;
   /* use parent background */
   
   border: inherit;
   /* use parent border */
   
   border-left-color: transparent;
   /* hide left border */
   
   border-bottom-color: transparent;
   /* hide bottom border */
   
   border-radius: 0px 4px 0px 0px;
   /* round arrow corner, the shorthand property doesn't accept "inherit" so it is set to 4px */
   
   -webkit-border-radius: 0px 4px 0px 0px;
   -moz-border-radius: 0px 4px 0px 0px;
}

.btn-arrow-right:before,
.btn-arrow-right:after {
   transform: rotate(45deg);
   /* rotate right arrow squares 45 deg to point right */
   
   -webkit-transform: rotate(45deg);
   -moz-transform: rotate(45deg);
   -o-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
}

.btn-arrow-left:before,
.btn-arrow-left:after {
   transform: rotate(225deg);
   /* rotate left arrow squares 225 deg to point left */
   
   -webkit-transform: rotate(225deg);
   -moz-transform: rotate(225deg);
   -o-transform: rotate(225deg);
   -ms-transform: rotate(225deg);
}

.btn-arrow-right:before,
.btn-arrow-left:before {
   /* align the "before" square to the left */
   
   left: -11px;
}

.btn-arrow-right:after,
.btn-arrow-left:after {
   /* align the "after" square to the right */
   
   right: -11px;
}

.btn-arrow-right:after,
.btn-arrow-left:before {
   /* bring arrow pointers to front */
   
   z-index: 1;
}

.btn-arrow-right:before,
.btn-arrow-left:after {
   /* hide arrow tails background */
   
   background-color: white;
}
        </style>
    </head>
    <body style="background-color: #cc6600">
 <!--<div id="loginbox" style="margin-top:50px; color: #09F" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" jumbotron>-->
        <?php
        //  if ($_SERVER["REQUEST_METHOD"] == "GET") {
       
        
        //$spid=$_GET['sp_id'];
        if (isset($_GET['sp_id'])) {
           // if($_GET['submit']=='View More Details'){
        $query = "SELECT * FROM sparepart WHERE sp_id='$_GET[sp_id]'";
      //    $query = "SELECT * FROM sparepar";
        $result = mysqli_query($conn, $query);
         
        // mysqli_close($conn);
        //   }
          while ($row = mysqli_fetch_array($result)){
        // if ($_GET['sp_id']) {
             //$query1 = "SELECT * FROM sparepart WHERE sp_id=$_GET[sp_id]";
             // $result1 = mysqli_query($conn, $query1);
            ?>  
  
 <div class="background">
     
  <div class="transbox">
    <a href='sparepart_search.php'><button type="button" class="btn btn-primary btn-arrow-left"><b>BACK</b></button></a>

 <h1 align='center'><b><?php echo $row['name']?>(<?php echo $row['type']?>)</b></h1>
              <div class="jumbotron" style="background-color:#ffffff;">
                
        <form action="sparepartdescription.php" method="post">
            <?php echo "<input type='text' style='display:none;' name='sp_id' value='".$_GET['sp_id']."'/>";
                    echo "<input type='text' style='display:none;' name='spc_id' value='".$row['spc_id']."'/>"
            ?>
                 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?php {
                            echo '   <img src="' . ($row["img_url"] ) . '" height="400" width="600" class="img-thumnail" />  ';
                        }
                        ?>
                    </div>

                </div>
                <div class="col-sm-5 well" style="background-color:#ccffff;">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
                    <h2 style="color:darkblue;"><b><u>More details</u></b></h2>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <b>Name :</b> <?php echo $row['name']; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <b> Type :</b><?php echo $row['type']; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <b> Description : </b> <?php echo $row['discription']; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <b> Quantity : </b> <?php echo $row['quntity']; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <b> Unit price : </b> <?php echo $row['unitprice']; ?>
                    </div>
                <div class="container-fluid text-center">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="text" name="qty" placeholder="Quantity that you want" required>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                        <input type="submit" name="submit" value="Place the Order" class="btn btn-success">
                        <!--<button type="button" class="btn btn-success" name="submit" >Place the Order</button>-->
                    </div>
                         </div>

              </div>
                    </div>
                    </div>
         
        </form>
                  </div>
   </div>
</div>
     
        <?php } ?>
        <?php }?>
        
       
    </body>
</html>

