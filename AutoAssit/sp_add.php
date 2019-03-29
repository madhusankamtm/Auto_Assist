<?php
 //Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<html>
    <head>
        <title>Add new Item</title>
        
        <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
      
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
<!--    <div class="collapse navbar-collapse" id="myNavbar">
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
    </div>-->
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-2">
      
    </div>
    <div class="col-sm-8"> 
      <div class="panel panel-default">
        <div class="panel-heading"><h1>Add new Item</h1></div>
        <div class="" style="padding:10px;">
            <a class="btn btn-primary"href="itemView.php">View items</a>
            </div>
          <div class="diverror">
 
        <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $hostname="localhost";
        $uname="root";
        $pword="";
        $db="autoassit";
        
        $conn= mysqli_connect($hostname, $uname, $pword, $db)
                or die("My SQL didntconnect");
        $spcenID=$_SESSION["id"];
        $spname=$_POST['spname'];
        $type=$_POST['type'];
        $dis=$_POST['dis'];
        $url=$_POST['url'];
        $qty=$_POST['qty'];
        $uprice=$_POST['uprice'];
        
        $query="START TRANSACTION;";
                    $result = mysqli_query($conn, $query);
//        $query3= mysqli_query($conn,"SELECT name FROM sparepart");
//        $query4= mysqli_query($conn,"SELECT name FROM sp_order");
                    
                    
        $query1="INSERT INTO sparepart values(NULL,'".$spcenID."','".$spname."','".$type."','".$dis."','".$url."','".$qty."','".$uprice."',now())";
        $result1= mysqli_query($conn, $query1);
        
         $query4="SELECT email FROM sp_order WHERE name='$spname' AND type ='$type' ";
         $result4=mysqli_query($conn, $query4);
         
        $query2="DELETE FROM sp_order WHERE name='$spname' AND type ='$type'";
         $result2= mysqli_query($conn, $query2);
       
        
       // if($result4){
            while ($row = mysqli_fetch_assoc($result4)) {
                    $to = $row['email'];
                    $message = 'This is regarding to inform that,Your requested spare part is now avilable at Auto Assist...Hurrily book your requirement';
                    $headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .
                            'MIME-Version: 1.0' . "\r\n" .
                            'Content-Type:text/html;charset=utf-8';
                    $result1 = mail($to, "Hello..We are Auto Assist System.", $message, $headers);
                    //var_dump($result1);
            }
          //  echo $row[email];
       //}
       $query5="COMMIT;";
                    $result3= mysqli_multi_query($conn, $query5);
//        
        
         mysqli_close($conn);
       }
       
        ?>
              
               
<!--        <form action="#" method="post">
        <input type="text" name="spname" placeholder="Spare Part Name" required><br>
        <input type="text" name="type" placeholder="type" required><br>
        <input type="text" name="dis" placeholder="discription" required><br>
        <input type="text" name="url" placeholder="img url" required><br>
        <input type="text" name="qty" placeholder="quntity" required><br>
        <input type="text" name="uprice" placeholder="uprice" required><br>
        <input type="submit" name="submit" value="submit" >
        </form>-->
       </div>
        <div class="panel-body">
            <div class="form-group row ">
                
                <div class="col-xs-12">
                    <form action=#' method='POST'>
                        <label for='sp_id'>Spare Part Name </label> <input class='form-control' type="text" name="spname" placeholder="Spare Part Name" required><br>
                       <label for='sp_id'>Type </label>   <input class='form-control' type="text" name="type" placeholder="type" required><br>
                       <label for='sp_id'>Discription </label>  <input class='form-control' type="text" name="dis" placeholder="discription" required><br>
                       <label for='sp_id'>Image</label> <input class='form-control' type="text" name="url" placeholder="img url" required><br>
                       <label for='sp_id'>Quantity </label> <input class='form-control' type="text" name="qty" placeholder="quntity" required><br>
                       <label for='sp_id'>Unit Price </label> <input class='form-control' type="text" name="uprice" placeholder="uprice" required><br>
                     <input type='submit' value='Insert' name='submit' class='btn btn-success'/><br><br>    
                    </form>
                       </body>
</html>
