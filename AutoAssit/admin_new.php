
<html>
    <head>
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
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $db = "autoassit";
  
    $conn = mysqli_connect($hostname, $username, $password, $db)
            or die("Unable to connect to MySQL");
    
    
    $uid=$_POST['uid'];
    $name = $_POST['name'];
    $user = $_POST['username'];
    $address=$_POST['address'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    if ($_POST["password"] === $_POST["cpassword"]) {
   // success!
        $query=" ";
    $query .= "INSERT INTO administrator values(NULL,'" . $uid . "','" . $name . "','" . $email . "','".$address."','" . $user . "','" .($_POST["password"]) . "'); ";
    // $query .= "INSERT INTO user values(NULL,'" . $uid . "','" . $user . "','" .($_POST["password"]) . "',1); ";
      $query .= "INSERT INTO admin_tp values('" . $uid . "','" . $telephone . "'); ";

    

   

    $result = mysqli_multi_query($conn, $query);
   
    if ($result) {


        echo"<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'align='center'>Add a new Administrator Sucessfully!!</h4>
  <p align='center'>Now $name is a admin of AutoAssist..</p>
  <hr>
  <p class='mb-0'></p>
</div>";
        
    } else {
        echo "Error occured<br/>". mysqli_error($conn);
    }
    }
    else {
   
    echo"<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'align='center'>Check your password!!</h4>
  <p align='center'>pasword didnt match with confirm password</p>
  <hr>
  <p class='mb-0'></p>
</div>";
}

    mysqli_close($conn);
}
?>
    </body>
</html>


