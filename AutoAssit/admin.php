<!DOCTYPE html>
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
        <title>admin page</title>
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





        <style>
            /* Popup box BEGIN */
            .hover_bkgr_fricc{
                background:rgba(0,0,0,.4);
                cursor:pointer;
                display:none;
                height:100%;
                position:fixed;
                text-align:center;
                top:0;
                width:100%;
                z-index:10000;
            }
            .hover_bkgr_fricc .helper{
                display:inline-block;
                height:100%;
                vertical-align:middle;
            }
            .hover_bkgr_fricc > div {
                background-color: #fff;
                box-shadow: 10px 10px 60px #555;
                display: inline-block;
                height: auto;
                max-width: 551px;
                min-height: 100px;
                vertical-align: middle;
                width: 60%;
                position: relative;
                border-radius: 8px;
                padding: 15px 5%;
            }
            .popupCloseButton {
                background-color: #fff;
                border: 3px solid #999;
                border-radius: 50px;
                cursor: pointer;
                display: inline-block;
                font-family: arial;
                font-weight: bold;
                position: absolute;
                top: -20px;
                right: -20px;
                font-size: 25px;
                line-height: 30px;
                width: 30px;
                height: 30px;
                text-align: center;
            }
            .popupCloseButton:hover {
                background-color: #ccc;
            }
            .trigger_popup_fricc {
                cursor: pointer;
                font-size: 20px;
                margin: 20px;
                display: inline-block;
                font-weight: bold;
            }
            /* Popup box BEGIN */
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

        </style>
        <script>
            $(window).load(function () {
                $(".trigger_popup_fricc").click(function () {
                    $('.hover_bkgr_fricc').show();
                });
                $('.hover_bkgr_fricc').click(function () {
                    $('.hover_bkgr_fricc').hide();
                });
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fricc').hide();
                });
            });

        </script>
    </head>
    <body style="background-color:#ffffff;">
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

        <!--<a class="navbar-brand logo" href="home.php"><img src="image/logo1.png" alt="logo"></a>-->


<!--        <nav class="nav nav-pills nav-justified navbar navbar-expand-lg navbar navbar-dark navbar navbar-light" style="background-color:#ccccff">
            <li class="nav-item active">
                <a class="nav-link" href="home.php" ><b>HOME</b> <span class="sr-only">(current)</span></a>
            </li>
 

            <li class="nav-item ">
                <a class="nav-link" href="adminnewacc.php"><b>ADMIN ACCOUNT</b> <span class="sr-only">(current)</span></a>
            </li>

        </nav>-->


        <div class="panel panel-default text-center">
            <div class="panel-body" style="background-color:#ffffff;">
                <p contenteditable="true"> 
                <h1 align='center' style="color:#ffffff;"><b>-------</b></h1></p>

            </div>
        </div>
        <div class="container-fluid text-center">    
            <div class="row content" >
                <div class="col-sm-2 well" style="background-color:#ffffff;">
                    <!--                    <div class="thumbnail">
                                        <p><a href="#">Profile</a></p>
                                       <img src="au.png" class="img-circle" height="100" width="100" alt="Profile">
                    
                                    </div>  
                    --><div class="thumbnail">
                        <p style="color:darkblue;"><b>--  AUTO ASSIST  --<br> Administration</b></p>
                        <img src="image/logo1.png" class="img-circle" height="80" width="80" alt="Profile">

                    </div> 
                    <div class="thumbnail">
                        <p></p>
                        <img src="car3(3).jpg" alt="workshop" width="200" height="200">
                    </div>    

                </div> 
                <div class="col-sm-8 text-center" > 
                    <div class="jumbotron" style="background-color:#7efcf8;">
                        <nav class="nav nav-pills nav-justified navbar navbar-expand-lg navbar navbar-dark navbar navbar-light" style="background-color: #ffffff;">

                            <li class="nav-item dropdown"> <img src="detail.png" height="100" width="75">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <b>DETAILS</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="garaj_detail.php">Garaj</a>
                                    <a class="dropdown-item" href="service_center_detail.php">Service Centers</a>
                                    <a class="dropdown-item" href="sparepartcenter_detail.php">Sparepart Centers</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><img src="appointment-15-246052.png" height="100" width="75">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <b>ACCOUNT ACTIVATION</b>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="garaj_approval.php">Garaj</a>
                                    <a class="dropdown-item" href="srevice_center_approval.php">Service Centers</a>
                                    <a class="dropdown-item" href="sparepart_center_approval.php">Sparepart Centers</a>
                                </div>
                            </li>

                            <li class="nav-item "> <img src="image/customer.png" height="100" width="75">
                                <a class="nav-link" href="cusdetails.php"><b>CUSTOMERS</b> <span class="sr-only">(current)</span></a>
                            </li>
                            
                            <li class="nav-item "> <img src="image/admin.png" height="100" width="75">
                            <a class="nav-link" href="adminnewacc.php"><b>ADMIN ACCOUNT</b> <span class="sr-only">(current)</span></a>
                            </li>

                        </nav>

                    </div>
                </div>
                <div class="col-sm-2 well" style="background-color:#ffffff;">
                    <div class="thumbnail">

                    </div>  
                    <div class="thumbnail">

                    </div>    

                </div> 


            </div>
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


        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
        <script type="text/javascript" src="source/js/isotope.js"></script>
        <script type="text/javascript" src="source/js/myscript.js"></script> 
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
    </body>
</html>