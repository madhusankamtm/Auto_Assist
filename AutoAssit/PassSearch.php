<?php

$name = $_POST['PassSearch'];
$db = mysqli_connect('localhost', 'root', '', 'autoassit');
$sql = "SELECT reference_no, customer_name, telephone, email, address FROM customer WHERE customer_name like '" . $name . "%'";
$result = mysqli_query($db, $sql);


if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if (!empty($name)) {
    if (!empty($result)) {
       
        echo "<div align='center' class='w3-light-gray'><h3>Customer Details Viewer</h3>";
        echo "<table border='1'>
        <tr>
                <th >Reference No</th>
                <th >Customer name</th>
		<th >Telephone Number</th>
		<th >Email</th>
		<th >Address</th>
                
        </tr>";

//if($name=$row['customer_name']){
        while ($row = mysqli_fetch_array($result)) {
            
            // echo " <form action=\"sp_book.php\" method=\"post\">";
            echo "<tr>";
           
            echo "<td>" . $row['reference_no'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['telephone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";   
            //echo "<td><input type=\"submit\" class=\"btn btn-danger\" name=\"Orders\" value=\"Orders\"></td>";
            // echo "<td><input type=\"hidden\" name=\"reference_no\" value=$row[reference_no]></td>";
            echo "</tr>";
            // echo' </form> ';
             
        }//reference_no, customer_name, telephone, email, address 
//        echo "</table>";
    }else {
    echo '     <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            
					<h3>Error !</h3>
					<p>Can not find a similar word!
					</p>
					<br>
					</div>
				</div>
			</div>';
    }
} else {
//    echo ' <div class="col-md-12">
//				<div align="center">
//					
//					<h3 class="text-center"></h3>
//					<p class="text-center">Please Enter the Value!
//					<br>
//					 
//					</p>
//					<br>
//					
//				</div>
//			</div>
//';
    echo "<div align='center' class='w3-light-gray'><h3>Customer Details Viewer</h3>";
        echo "<table border='1'>
        <tr>
                <th >Reference No</th>
                <th >Customer name</th>
		<th >Telephone Number</th>
		<th >Email</th>
		<th >Address</th>
        </tr>";
    while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['reference_no'] . "</td>";
            echo "<td>" . $row['customer_name'] . "</td>";
            echo "<td>" . $row['telephone'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }//ref
         echo "</table>";
}


?>
