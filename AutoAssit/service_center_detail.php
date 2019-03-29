<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Service Center Details</title>
        <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
        <style>
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
    <body>
<div class="panel panel-default text-center">
                            <div class="panel-body" style="background-color:#d3c1ff;">
                                <p contenteditable="true"> 
                                <h1 align='center' style="color:darkred;"><b>Service Center Details</b></h1></p>
                                <h4 style="color:blue;"><b>Registered Service Centers in Auto Assist Company </b></h4>
                            </div>
                        </div>
        <div class="container">
 <a href="admin.php"><button type="button" class="btn btn-primary btn-arrow-left"><b>BACK</b></button></a>
       
                <?php
                echo'<table class="table">';
                echo'<thead>';
                echo'<tr>';
                echo' <th>User NIC</th>';
                echo' <th>Owner Name</th>';
                echo' <th>Address</th>';
                echo' <th>Email</th>';
             
                echo' <th><th>';
                echo' </tr>';
                echo'  </thead>';
                echo'  <tbody>';

                $username = "root";
                $password = "";
                $hostname = "localhost";
                $db = "autoassit";

                //connection to the database
                $conn = mysqli_connect($hostname, $username, $password, $db)
                        or die("Unable to connect to MySQL");

                //execute the SQL query and return records

                $result = mysqli_query($conn, "SELECT * FROM `detail` INNER JOIN user on detail.nic=user.user_id WHERE active=1 AND detail.nic in (SELECT nic FROM section WHERE section.section='Srevice_Center')");
        
               
                    while ($row = mysqli_fetch_array($result)){ 
                    echo' <tr class="info">';
                    echo " <form action=\"sc_detail_update.php\" method=\"post\">";
                    echo"<td>$row[nic]</td><td>$row[name]</td><td>$row[address]</td><td>$row[email]</td>";
                   echo "<td><input type=\"hidden\" name=\"nic\" value=$row[nic]></td>";
                    echo "<td><input type=\"hidden\" name=\"email\" value=$row[email]></td>";
                    echo "<td><input type=\"submit\" class=\"btn btn-danger\" name=\"remove\" value=\"Remove\"></td>";
                   echo' </tr>  ';
                   echo' </form> ';
                    }
 
                mysqli_close($conn);
                ?> 

            </tbody>
                </table>
                
            </form>  
             
        </div>

        <div class="bottommenu">
            <div class="bottomlogo">
                <span class="dotlogo">&bullet;</span><img src="image/logo1.png" alt="logo1"><span class="dotlogo">&bullet;</span>
            </div>

            <p>"Our main Objective is<br>
                add Value to our customer with our superb service"</p>
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


    </body>
</html>

