<?php
 //Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<?php
 function filterTable($query) {
            $connect = mysqli_connect("localhost", "root", "", "autoassit");
            $filter_Result = mysqli_query($connect, $query);
            return $filter_Result;
            $result = mysqli_query($connect, $query);
        }
        
         $spcenID=$_SESSION["id"];
            $query="select a.name,a.img_url,a.discription,c.customer_name,b.quntity, b.id from sparepart a inner join sp_booking b on a.sp_id = b.sp_id inner join customer c on b.reference_no = c.reference_no where a.spc_id = (select id from user where id = '$spcenID')";
            $search_result = filterTable($query);
            
 // while ($row = @mysqli_fetch_assoc($search_result)) {      
//if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if ($_POST['id']) {
             if ($_POST['action'] == 'Accept') {

              $result1 ="DELETE FROM sp_booking WHERE id = '$_POST[id]'";
              
             $search_result1 = filterTable($result1);
              header("location: sp_book.php");
             }
       // }
        
        
      //  echo $_POST[id];
    //  }
  }
?>
