
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Auto Assist Web Applicaton - Project II</title>
        <meta name="description" content="">
        <meta name="author" content="Web Domus Italia">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
    <a href="home.php"></a>
    <link rel="stylesheet" type="text/css" href="style/slider.css">
    <link rel="stylesheet" type="text/css" href="style/mystyle.css">

</head>
<body>
    <!-- Header -->
    <!--<div class="allcontain">-->
   
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 90%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
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
<a href="welcome.php"><button type="button" class="btn btn-primary btn-arrow-left"><b>BACK</b></button></a>
<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text-center"><b><span class="bdots">&bullet;</span> <span class="carstxt">APPOINTMENTS</span>&bullet;</b></h1>
    </div>

    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            <div class="col-sm-8 text-left"> 

                <form action="PassAppointmentFrom.php" method="POST">

                    <div class="form-group row">
                        <label for="text-input" class="col-2 col-form-label">Customer Name</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Type Your Name" name="Customer_Name" required><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text-input" class="col-2 col-form-label">Requirement</label>
                        <div class="col-10">
                            <input class="form-control" type="text" placeholder="Type Your Requirement" name="Requirement"required><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datetime-local-input" class="col-2 col-form-label">Appointment Date and time</label>
                        <div class="col-10">
                            <input class="form-control" type="datetime-local" value="2018-11-12T18:20" name="Appointment_TimeSlot" /><br>
                          
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="tel-input" class="col-2 col-form-label">Telephone</label>
                        <div class="col-10">
                            <input class="form-control" type="tel" placeholder="Type Your Telephone Number" name="Telephone" minlength="10" maxlength="10"><br>
                        </div>
                    </div>    

                    <div class="form-group row">
                        <label for="email-input" class="col-2 col-form-label">Email</label>
                        <div class="col-10">
                            <input class="form-control" type="email" placeholder="auto_assist@example.com" name="email"required><br>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Book your appointment</button>  
                </form> 
            </div>


            <div class="col-sm-2 sidenav">

            </div>
        </div>
    </div>

    <!-- ______________________________________________________Bottom Menu ______________________________-->
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
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>


