<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login(test).php");
    exit;
}
?>
<html>
    <head>
        <title>Spare Part Search</title>
        <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="author" content="Web Domus Italia">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <script type="text/javascript">
            function Confirm(form) {
                alert("Order successfully!");
                form.submit();
            }
        </script>



        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom:65px;
                border-radius: 0;

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
                color: #7efcf8;
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
tr.spaceUnder>td {
  padding-bottom: .5em;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: red;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: red;
}
        </style>

    </head>
    <body>

        <div class="panel panel-default text-center">
                            <div class="panel-body" style="background-color:#05003a;">
                                <p contenteditable="true"> 
                                <h1 align='center' style="color:#ffffff;"><b>Spareparts</b></h1></p>

                            </div>
                        </div>

     <!--<a class="navbar-brand logo" href="home.php"><img src="image/logo1.png" alt="logo"></a>-->  
        <?php
      htmlspecialchars($_SESSION["reference_no"]);
      // htmlspecialchars($_SESSION["email"]);
        function filterTable($query) {
            $connect = mysqli_connect("localhost", "root", "", "autoassit");
            $filter_Result = mysqli_query($connect, $query);
            return $filter_Result;
            $result = mysqli_query($connect, $query);
        }
        
        
        if (isset($_POST['search'])) {
            $valueToSearch = $_POST['valueToSearch'];

            $query = "SELECT * FROM `sparepart` WHERE name LIKE '%" . $valueToSearch . "%' AND quntity >0";
            $search_result = filterTable($query);
            
            
        } else {
            $query = "SELECT * FROM `sparepart`";
            $search_result = filterTable($query);
            
            
        }

        if (isset($_POST['submit'])) {
            if ($_POST['userid']) {

                $email="SELECT * FROM customer WHERE reference_no=$_SESSION[reference_no]";
                 $result= filterTable($email);
                 while ($row = mysqli_fetch_array($result)){
                     $mail=$row['email'];
                    }  
                $spname = $_POST["spname"];
                $type = $_POST['vtype'];
                $quntity = $_POST["qnty"];
                $query1 = "INSERT INTO sp_order values(NULL,'".$_SESSION['reference_no']."','".$mail."','" . $spname . "','" . $type . "','" . $quntity . "')";
                $result = filterTable($query1);
           
            }
        }
        ?>






<a href='welcome.php'><button type="button" class="btn btn-primary btn-arrow-left"><b>BACK</b></button></a>
        <div class="container-fluid text-center">   
            
            <div class="row content" >
                
                <div class="col-sm-2 well" style="background-color:#7efcf8;">
                    <div class="thumbnail">
                        <p style="color:darkblue;"><b>--  AUTO ASSIST  --<br> Spare part solution</b></p>
                        <img src="image/logo1.png" class="img-circle" height="80" width="80" alt="Profile">

                    </div>  
                    <div class="thumbnail">
                        <p></p>
                        <img src="car3(3).jpg" alt="workshop" width="400" height="300">
                    </div>    

                </div> 

 
                <form class="navbar-form"  action="sparepart_search.php" method="post" role="search" class="center-block" >
                    <h4>You can find your required Sparepart</h4>
                    <div class="input-group add-on">

                        <input class="form-control" type="search" size="120" name="valueToSearch" placeholder="Sparepart Name">


                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="search" value="Filter"><i class="glyphicon glyphicon-search"></i></button>

                        </div>


                    </div><br><br>
                    
                    <table class="table table-hover">
                        
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th> Type</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            


                        </tr>

                        <!-- populate table from mysql database -->
                        <?php while ($row = mysqli_fetch_array($search_result)): ?>
                            <tr>
                                <td> <?php {
                                        echo '   <img src="' . ($row["img_url"] ) . '" height="200" width="250" class="img-thumnail" />  ';
                                    }
                                   
                                   //  echo "<input type=\"hidden\" name=\"sp_id\" value=$row[sp_id]>";
                                     ?>  <br>
                                     <!--<input type="submit" class="btn btn-info" name="submit" value="View More Details" target="sparepartdescription.php">-->
      
                                  <?php  echo" <a href='sparepartdescription.php?sp_id=$row[sp_id] and spc_id=$row[spc_id]'>View More Details</a>";
                                   ;
                                  ?>
                                </td>
                               
                                 <!--<td><?php echo $row['sp_id']; ?></td>-->
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td><?php echo $row['quntity']; ?></td>
                                <td><?php echo $row['unitprice']; ?></td>
                                                                      <td></td>


                            </tr>
<?php endwhile; ?>
                            <?php
                            $query="DELETE FROM sparepart WHERE quntity ='0'";
            $search_result=filterTable($query);
                            ?>
                    </table>
                </form>


                <div class="col-sm-2 well" style="background-color:#7efcf8;">
                    <div class="thumbnail"> 
                        <img src="image/logo1.png" class="img-circle" height="80" width="80" alt="Profile">
                         <p style="color:red; font-size: 30;" ><b>If you didn't find <br>place it in here</b></p>

                    </div>  
                    <!--<div class="col-sm-2 well">-->
                        <form action="sparepart_search.php" method="post">
                            <table>
                                <tr class="spaceUnder"><td><input type="text" name="spname" placeholder="Spare Part Name" required></td></tr>
                                <tr class="spaceUnder"><td><input type="text" name="vtype" placeholder="vehical type" required></td></tr>
                                <tr class="spaceUnder"><td><input type="text" name="qnty" placeholder="Quantity" required></td></tr>
                                <tr><td align="center"><b><input type="submit" name="submit" value="Request Item" onClick="Confirm(this.form)" class="btn btn-primary"></b></td></tr> 
                                <tr><td><input type="hidden" name="userid" value=$row[uid]></td></tr>
                            </table>
                        </form>
                    <!--</div>-->    

                </div> 
            </div>
        </div>


    </body>
</html>
