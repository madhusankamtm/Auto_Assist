<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style/slider.css">
        <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        <link rel="stylesheet" type="text/css" href="style/contactstyle.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php
        $username = "root";
        $password = "";
        $hostname = "localhost";
        $db = "autoassit";


        $conn = mysqli_connect($hostname, $username, $password, $db)
                or die("Unable to connect to MySQL");
        $result = mysqli_query($conn, "SELECT * FROM `detail` INNER JOIN user on detail.nic=user.user_id WHERE "
                . "(active=0 AND detail.nic in (SELECT nic FROM section WHERE section.section='Garaj')) OR "
                . "(active=1 AND detail.nic in (SELECT nic FROM section WHERE section.section='Garaj' AND section.acceptorreject='0'))");         
// $result = mysqli_query($conn, "SELECT * FROM `detail` INNER JOIN user on detail.nic=user.user_id WHERE active=0 AND detail.nic in (SELECT nic FROM section WHERE section.section='Garaj' AND section.acceptorreject='0')");
        while ($row = @mysqli_fetch_assoc($result)) {
            if ($_POST['nic'] || $_POST['email']) {
                if ($_POST['action'] == 'Accept') {
                    $result = mysqli_query($conn, "UPDATE user SET active='1' WHERE user_id='$_POST[nic]' ");
                    $result = mysqli_query($conn, "UPDATE section SET acceptorreject='1' WHERE nic='$_POST[nic]' AND section='Garaj'  ");
                    echo"<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'align='center'>Accept Succesfully !!</h4>
                    <p align='center'>Now $_POST[nic] is a member of AutoAssist..</p>
                    <hr>
                    <p class='mb-0'></p>
                    </div>";
                    $to = $_POST['email'];
                    $message = 'This is regarding to inform that, Now Your (Garaj Account)  a member of Auto Assist!! ';
                    $headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .
                            'MIME-Version: 1.0' . "\r\n" .
                            'Content-Type:text/html;charset=utf-8';
                    $result1 = mail($to, "Hello..We are Auto Assist System.", $message, $headers);
                  //  var_dump($result1);
//                    header("location: garaj_approval.php");
                } else if ($_POST['action'] == 'Reject') {

                    // $result = mysqli_query($conn, "DELETE FROM user WHERE user_id='$_POST[nic]'");
                    $result = mysqli_query($conn, "DELETE FROM section WHERE nic='$_POST[nic]' AND section='Garaj'");
                    $result = mysqli_query($conn, "DELETE FROM detail WHERE nic='$_POST[nic]'");
                    echo"<div class='alert alert-success' role='alert'>
                    <h4 class='alert-heading'align='center'>You Rejected $_POST[nic] 's account!!</h4>
                    <p align='center'></p>
                    <hr>
                    <p class='mb-0'></p>
                  </div>";

                    $to = $_POST['email'];
                    $message = 'This is regarding to inform that we cant accept your account(Garaj Account).Sorry for the inconveniance ';
                    $headers = 'From: autoassistautoassist43@gmail.com' . "\r\n" .
                            'MIME-Version: 1.0' . "\r\n" .
                            'Content-Type:text/html;charset=utf-8';
                    $result1 = mail($to, "Hello..We are Auto Auto Assist System.", $message, $headers);
                  //  var_dump($result1);
                }
                 header("location: garaj_approval.php");
            }
        }
        mysqli_close($conn);
        ?> 
    </body>
</html>

